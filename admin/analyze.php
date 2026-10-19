<?php
session_start();

// Check if session variables exist
if(isset($_SESSION['user_id']) && isset($_SESSION['email'])) {
    // Session variables exist, user is logged in
    $user_id = $_SESSION['user_id'];
    $email = $_SESSION['email'];

    // You can use $user_id and $email in your code as needed
} else {
    // Session variables don't exist, user is not logged in
    // Redirect to login page or handle accordingly
    header("Location: login.php");
    exit; // Ensure script execution stops after redirection
}

include('codes/db.php');
require 'EnquiryAnalyzer.php';

$apiKey = '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';
$getproducts = "SELECT id, title FROM products WHERE id != 75";
$result = $db->query($getproducts);
if ($result->num_rows > 0) {
    $products = [];
    $productsid = [];
    while ($row = $result->fetch_assoc()) {
        $products[] = $row['title'];
        $productsid[] = $row['id'];
    }
} else {
    $products = [];
}
// var_dump($products);
$analyzer = new EnquiryAnalyzer($apiKey, $products);

// MySQLi connection

// Date range
// Read GET or POST dates (example using GET)
$from = isset($_GET['from']) && !empty($_GET['from']) ? $_GET['from'] : null;
$to   = isset($_GET['to'])   && !empty($_GET['to'])   ? $_GET['to']   : null;


$error = null;

if ($from && $to) {
    try {
        $fromDate = new DateTime($from);
        $toDate   = new DateTime($to);

        // Reverse check
        if ($toDate < $fromDate) {
            $error = 'Invalid range: "To" date cannot be before "From" date.';
        }
        // Same month & year validation
        elseif (
            $fromDate->format('Y-m') !== $toDate->format('Y-m')
        ) {
            $error = 'Please select dates within the same month only.';
        }

    } catch (Exception $e) {
        $error = 'Invalid date format.';
    }
}

if ($error) {
    echo '<p style="color:red;">' . $error . '</p><a href="analyze.php">Go Back</a>';
    exit; // or die;
}



// If dates are not provided → set default current month
if (!$from || !$to) {
    $from = date('Y-m-01 00:00:00'); // Start of current month
    $to   = date('Y-m-t 23:59:59');  // End of current month
}

$batchSize = 50;

// 1️⃣ Count total rows (excluding already AI-checked if needed)
$countSql = "
    SELECT COUNT(*) AS total 
    FROM enqueries 
    WHERE created_at BETWEEN '$from' AND '$to' 
      AND ai_check = 0
";
$countResult = $db->query($countSql);
$countRow = $countResult->fetch_assoc();
// echo "Total rows = " . $countRow['total'] . "\n";
// 2️⃣ Batch processing
$offset = 0;

while (true) {

    // Fetch limited rows
    $sql = "
        SELECT id, description
        FROM enqueries
        WHERE created_at BETWEEN ? AND ?
          AND ai_check = 0
        ORDER BY id
        LIMIT $batchSize OFFSET $offset
    ";

    $stmt = $db->prepare($sql);

    if (!$stmt) {
        die("SQL Prepare failed: " . $db->error . "\nQuery: " . $sql);
    }

    $stmt->bind_param("ss", $from, $to);
    $stmt->execute();
    $result = $stmt->get_result();


    // No more rows → stop
    if ($result->num_rows === 0) break;

    while ($row = $result->fetch_object()) {

        // Analyze message using your AI analyzer
        $analysis = $analyzer->analyze($row->description);

        // var_dump($analysis);

        $aiType       = $analysis['type'];
        $aiProduct    = mapProductId($analysis['product']);
        $aiConfidence = $analysis['confidence'];

        // Update query
        $update = $db->prepare("
    UPDATE `enqueries` SET
        `type` = ?,
        `productid` = ?,
        `ai_check` = 1
    WHERE `id` = ?
");

        if (!$update) {
            die("Prepare failed: " . $db->error);
        }

        $update->bind_param("ssi", $aiType, $aiProduct, $row->id);
        $update->execute();

        echo "Updated ID: {$row->id}\n";

        sleep(1); // to avoid API rate limit
    }

    $offset += $batchSize;
}


function mapProductId($productName)
{
    global $db;
    $stmt = $db->prepare("SELECT id FROM products WHERE title = ?");
    $stmt->bind_param("s", $productName);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        return $row['id'];
    }
    return null; // or handle unknown product
}

$sql = "SELECT id, page_url FROM enqueries 
        WHERE productid IS NULL 
        AND created_at BETWEEN '$from' AND '$to'";

$result = $db->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $pageUrl = $row['page_url'];

        // 1. Extract slug from URL
        $path = parse_url($pageUrl, PHP_URL_PATH);
        $path = ltrim($path, "/");
        $slug = str_replace(".html", "", $path);
        $slug = basename($slug);

        // 2. Get product ID
        $productSql = $db->prepare("SELECT id FROM products WHERE url = ? LIMIT 1");
        $productSql->bind_param("s", $slug);
        $productSql->execute();
        $productResult = $productSql->get_result();
        $product = $productResult->fetch_assoc();

        $productId = $product ? $product['id'] : 0;
        if($productId !== 0){
        // 3. Update enqueries table
        $update = $db->prepare("
            UPDATE enqueries SET 
                productid = ?,
                type = 'real'
            WHERE id = ?
        ");

        if (!$update) {
            die("Prepare failed: " . $db->error);
        }

        $update->bind_param("si", $productId, $row['id']);
        $update->execute();
        }
    }
} else {
    echo "No records found with NULL productid in the specified date range.\n";
}




// message from form
// $message = "Enquiry about zinc oxide";

// $result = $analyzer->analyze($message);
// var_dump($result);
// // Save to DB example (pseudo)
// $ai_type = $result['type'];
// $ai_product = $result['product'];
// $ai_confidence = $result['confidence'];
// $ai_month = date('n'); // or use created_at for historical records
// $ai_year = date('Y');

// now run INSERT/UPDATE as per your DB code

$sql = "
SELECT 
    e.id,
    e.name,
    e.email,
    e.phone_number,
    p.title AS product_name,
    e.city,
    e.country,
    e.type,
    e.productid,
    e.page_url,
    e.description,
    e.created_at
FROM enqueries AS e
LEFT JOIN products AS p ON e.productid = p.id
WHERE e.archived = '0' AND e.created_at BETWEEN '$from' AND '$to'
ORDER BY e.id DESC
";

$resultproductquery = $db->query($sql);

$allTypes = ['real', 'spam', 'job', 'other'];
$typeSql = "
SELECT 
    type,
    COUNT(*) AS total
FROM enqueries
WHERE archived = '0' AND created_at BETWEEN '$from' AND '$to'
GROUP BY type
";
$typeResult = $db->query($typeSql);


$brandSql = "
SELECT 
    b.id,
    b.name,
    b.url
FROM brand b
ORDER BY b.name
";

$brandResult = $db->query($brandSql);

$brandData = [];

while ($row = $brandResult->fetch_assoc()) {
    $brandData[$row['id']] = [
        'brand_name'       => $row['name'],
        'brand_slug'       => $row['url'],
        'brand_total'      => 0,
        'brand_page_total' => 0,
        'products'         => []
    ];
}
$productSql = "
SELECT
    b.id AS brand_id,
    p.id AS product_id,
    p.title AS product_name,
    COUNT(e.id) AS total
FROM products p
JOIN brand b ON p.brand = b.id
LEFT JOIN enqueries e 
    ON e.productid = p.id
    AND e.archived = '0'
    AND e.created_at BETWEEN '$from' AND '$to'
GROUP BY b.id, p.id
ORDER BY b.name
";

$productResult = $db->query($productSql);

while ($row = $productResult->fetch_assoc()) {

    $brandId = $row['brand_id'];
    $count   = (int)$row['total'];

    if ($row['product_id']) {
        $brandData[$brandId]['products'][] = [
            'product_name' => $row['product_name'],
            'total'        => $count
        ];

        $brandData[$brandId]['brand_total'] += $count;
    }
}
$brandPageSql = "
SELECT
    b.id AS brand_id,
    COUNT(e.id) AS total
FROM brand b
LEFT JOIN enqueries e
    ON e.page_url LIKE CONCAT('%url=', b.url, '%')
    AND e.archived = '0'
    AND e.productid = 'NULL'
    AND e.created_at BETWEEN '$from' AND '$to'
GROUP BY b.id
";

$brandPageResult = $db->query($brandPageSql);

while ($row = $brandPageResult->fetch_assoc()) {

    $brandId = $row['brand_id'];
    $count   = (int)$row['total'];

    $brandData[$brandId]['brand_page_total'] = $count;
    $brandData[$brandId]['brand_total'] += $count;
}




?>
<?php include('inc/header.php') ?>




  <div class="container-scroller">
      
      <style>
          .desc-box {
    width: 150px;               /* fixed width */
    white-space: nowrap;        /* single line */
    overflow: hidden;
    text-overflow: ellipsis;    /* ... */
    cursor: pointer;
}

.border-success {
    border-color: #198754 !important;
    color: #198754 !important;
}

.border-danger {
    border-color: #dc3545 !important;
    color: #dc3545 !important;
}

.border-info {
    border-color: #0dcaf0 !important;
    color: #0dcaf0 !important;
}

.border-secondary {
    border-color: #6c757d !important;
    color: #6c757d !important;
}


      </style>

<?php  include('inc/nav.php') ?>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
      
    <?php include('side.php');?>
      <!-- partial -->
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            
         
            
          <div class="row">
               <?php
                      $typeCounts = [];
 $totalqueries = 0;
while ($row = $typeResult->fetch_assoc()) {
    $typeCounts[$row['type']] = (int)$row['total'];
    $totalqueries += $row['total'];
}

                      ?>
            <div class="col-md-12 mb-2">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold"><?php
if (isset($_GET['from']) || isset($_GET['$to'])) {
    echo $from . " - " . $to;
} else {
    echo date('F Y');
}
?>
 Queries </h3>
               
                </div>
                <!-- <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div> -->
              </div>
            </div>
          </div>
          <div class="row">
              
              
              <div class="col-lg-12 mb-4">
                  <div class="row">
                     
 <?php
$bgColors = [
  'real'  => 'linear-gradient(135deg, #43ce8e, #98f9cc)',
    'spam'  => 'linear-gradient(135deg, #ff6e7c, #f78f99)',
    'job'   => 'linear-gradient(135deg, #0dcaf0, #7ae8ff)',
    'other' => 'linear-gradient(135deg, #9c9c9c, #cbccce)'
];
?>




  <div class="col-md-2 stretch-card transparent">
        <div class="card text-white" style="background-image: linear-gradient(45deg, #e934ce, #de50ba80);">
            <div class="card-body">
                <p class=""></p>
                <p><span class="fs-30 mx-1"><?php echo $totalqueries;?></span>Total</p>
                

            </div>
        </div>
    </div>

<?php foreach ($allTypes as $type) { 
    $total = $typeCounts[$type] ?? 0;
    $bgcolor = $bgColors[$type] ?? '#6c757d';
?>
    <div class="col-md-2 stretch-card transparent">
        <div class="card text-white" style="background-image: <?= $bgcolor ?>;">
            <div class="card-body">
                <p class=""></p>
                <p><span class="fs-30 mx-1"><?= $total; ?></span><?= ucfirst($type); ?></p>
                

            </div>
        </div>
    </div>
<?php } ?>

    </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
        
           <form method="GET" class="mb-3">
    <div class="row" bis_skin_checked="1">
        <div class="col-md-3" bis_skin_checked="1">
            <label for="start_date">Start Date</label>
            <input type="date" required name="from" id="start_date" class="form-control" value="">
        </div>
        <div class="col-md-3" bis_skin_checked="1">
            <label for="end_date">End Date</label>
            <input type="date" required name="to" id="end_date"  class="form-control" value="">
        </div>
        <div class="col-md-3 align-self-end" bis_skin_checked="1">
            <button type="submit" class="btn btn-primary">Filter</button>
            <a href="analyze.php" class="btn btn-secondary">Reset</a>
            
        </div>
        
        
    </div>
    <div class="text-danger" id="errdownload"></div>
</form>
 <?php
if(isset($_GET['from']) && isset($_GET['to'])){
?>
<form method="GET" class="mb-3" action="downexcel.php">
    <input type="hidden" name="stdate" id="stdate" value="<?php echo $_GET['from'];?>">
    <input type="hidden" name="enddate" id="enddate" value="<?php echo $_GET['to'];?>">
    <button type="submit" class="btn btn-primary">Download</button>
     <div class="text-success">Available for download</div>
</form>
 
<?php
}
else{
?>
<button type="button" onClick="sheetdownload()" class="btn btn-primary mb-3">Download</button>

<?php
}
?>

<div class="table-responsive">
    
    <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Queries</button>
    <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Product Wise Count</button>
    
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <div style="display:flex; justify-content:space-between">
       <h3>Enquiries List</h3>
       
       <button type="button" id="archiveSelected" class="btn btn-danger btn-sm mb-2">
    Archive Selected
</button>
</div>


    <table id="kt_table_users" class="table table-striped table-borderless dataTable no-footer">
        <thead class="table-darks">
            <tr>
                <th><input type="checkbox" class="add-all-archive"></th>
                <th>  Type</th>
                 <th>Product</th>
                <th>Name</th>
               
                <th>Message</th>
                 <th>Date</th>
                <th>Email</th>
                <th>Phone</th>
                   
                   <th>Page URL</th>
               
                <th>City</th>
                <th>Country</th>
                
            </tr>
        </thead>
        <tbody>
            <?php while($row = $resultproductquery->fetch_assoc()): ?>
            <tr>
    
<td><input type="checkbox" value="<?= $row['id'] ?>" class="add-archive"></td>
<td>
    
    <select style="width:50px" class="form-select form-select-sm enquiry-type"
            data-id="<?= $row['id'] ?>">
        <?php
        $allTypes = ['real', 'spam', 'job', 'other'];
        foreach ($allTypes as $type) {
            $selected = ($row['type'] === $type) ? 'selected' : '';
            echo "<option value='{$type}' {$selected}>".ucfirst($type)."</option>";
        }
        ?>
    </select>
</td>
  <td>
    <select style="width:130px; color:#000" class="form-select form-select-sm enquiry-product"
            data-enquiry-id="<?= $row['id'] ?>">

        <?php if (!in_array($row['productid'], $productsid)) { ?>
            <option value="" selected disabled class="text-danger">
                Product Not Found
            </option>
        <?php } ?>
        
         <option value="">
               Product Not Found
            </option>

        <?php foreach ($productsid as $index => $pid) { ?>
            <option value="<?= $pid ?>"
                <?= ($row['productid'] == $pid) ? 'selected' : '' ?>>
                <?= htmlspecialchars($products[$index]) ?>
            </option>
        <?php } ?>

    </select>
</td>



                <td><?= $row['name'] ?></td>
                  <td>
    <div class="desc-box" title="<?= htmlspecialchars($row['description']) ?>">
        <?= $row['description'] ?>
    </div>
</td>
<td><?= date('d M Y',strtotime($row['created_at'])) ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['phone_number'] ?></td>
          

                  <td><?= $row['page_url'] ?></td>
              
                <td><?= $row['city'] ?></td>
                <td><?= $row['country'] ?></td>
               
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
      
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
 <?php foreach ($brandData as $brand): ?>

    <h4 class="mt-4" style="display:flex; justify-content:space-between">
        <span><?= htmlspecialchars($brand['brand_name']) ?></span>
        <span class="badge bg-primary" style="color:#fff">
            Total: <?= $brand['brand_total'] ?>
        </span>
    </h4>

    <table class="table table-bordered table-sm mb-4">
         <colgroup>
        <col style="width:70%">
        <col style="width:30%">
    </colgroup>
        <thead class="table-dark">
            <tr>
                <th>Product Name</th>
                <th>Total Enquiries</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($brand['products'] as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['product_name']) ?></td>
                    <td><?= $product['total'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php endforeach; ?>





  </div>

</div>


   

</div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

<script>
    
document.addEventListener('change', function (e) {
    if (e.target.classList.contains('enquiry-type')) {

        const enquiryId = e.target.dataset.id;
        const type = e.target.value;

        fetch('update-enquiry-type.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `id=${enquiryId}&type=${type}`
        })
        .then(res => res.json())
        .then(data => {
            if (!data.success) {
                alert('Failed to update');
            }
            else{
                location.reload();
            }
        })
        .catch(() => alert('Error updating'));
    }
});

function updateSelectColor(select) {
    select.className = 'form-select form-select-sm enquiry-type';

    const map = {
        real: 'border-success',
        spam: 'border-danger',
        job: 'border-info',
        other: 'border-secondary'
    };

    select.classList.add(map[select.value] || 'border-secondary');
}

document.querySelectorAll('.enquiry-type').forEach(updateSelectColor);

document.addEventListener('change', e => {
    if (e.target.classList.contains('enquiry-type')) {
        updateSelectColor(e.target);
    }
});

document.addEventListener('change', function (e) {
    if (e.target.classList.contains('enquiry-product')) {

        const enquiryId = e.target.dataset.enquiryId;
        const productId = e.target.value;

        fetch('update-enquiry-product.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `enquiry_id=${enquiryId}&product_id=${productId}`
        })
        .then(res => res.json())
        .then(data => {
            if (!data.success) {
                alert('Failed to update product');
            }
        })
        .catch(() => alert('Error updating product'));
    }
});


document.addEventListener('DOMContentLoaded', () => {

    const selectAll = document.querySelector('.add-all-archive');

    selectAll.addEventListener('change', function () {
        document.querySelectorAll('.add-archive').forEach(cb => {
            cb.checked = this.checked;
        });
    });

    document.addEventListener('change', function (e) {
        if (e.target.classList.contains('add-archive')) {
            const all = document.querySelectorAll('.add-archive');
            const checked = document.querySelectorAll('.add-archive:checked');

            selectAll.checked = (all.length === checked.length);
        }
    });

});

document.getElementById('archiveSelected').addEventListener('click', () => {

    const ids = Array.from(document.querySelectorAll('.add-archive:checked'))
                     .map(cb => cb.value);

    if (ids.length === 0) {
        alert('Please select at least one item');
        return;
    }
    
     const confirmArchive = confirm(
        "⚠️ Are you sure you want to archive the selected items?\n\n" +
        "Once archived, they can ONLY be restored by an Admin."
    );

    if (!confirmArchive) {
        return; // stop action
    }

    fetch('archive-enquiries.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ ids })
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            alert("Updated Sucessfully")
            location.reload();
        } else {
            alert('Failed to archive');
        }
    });
});

// function setDate(el, datefield){
//     const value = el.value;
//     console.log(value);
//     document.querySelector('#'+datefield).value = value;
// }

function sheetdownload(){
    document.querySelector("#errdownload").innerHTML = 'To download sheet please click <strong>filter button by selecting a date range</strong> ';
}
</script>




<?php include('inc/footer.php') ?>

