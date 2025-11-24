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

include('inc/header.php') ?>




  <div class="container-scroller">

<?php  include('inc/nav.php') ?>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
              aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
              aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
            aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->

          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
       <!-- partial:partials/_sidebar.php -->
       <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>



          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Brands</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add-brand.php">Add A Brand</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-brands.php">Manage Brands</a></li>

              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
              aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="add-products.php">Add A Product</a></li>
                <li class="nav-item"><a class="nav-link" href="manage-products.php">Manage Products</a></li>
              </ul>
            </div>
          </li>
<!--          <li class="nav-item">-->
<!--    <a class="nav-link" data-toggle="collapse" href="#blog-elements" aria-expanded="false"-->
<!--      aria-controls="blog-elements">-->
<!--      <i class="icon-columns menu-icon"></i>-->
<!--      <span class="menu-title">Blog</span>-->
<!--      <i class="menu-arrow"></i>-->
<!--    </a>-->
<!--    <div class="collapse" id="blog-elements">-->
<!--      <ul class="nav flex-column sub-menu">-->
<!--        <li class="nav-item"><a class="nav-link" href="add-blog-category.php">Add a Category</a></li>-->
<!--        <li class="nav-item"><a class="nav-link" href="all-blog-category-list.php"> Manage  Category</a></li>-->
<!--        <li class="nav-item"><a class="nav-link" href="add-single-blog-post.php"> Add New Post</a></li>-->
<!--        <li class="nav-item"><a class="nav-link" href="all-blog-post.php"> Manage Posts</a></li>-->
<!--      </ul>-->
<!--    </div>-->
<!--</li>-->


          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">-->
          <!--    <i class="icon-bar-graph menu-icon"></i>-->
          <!--    <span class="menu-title">Enqueries</span>-->
          <!--    <i class="menu-arrow"></i>-->
          <!--  </a>-->
          <!--  <div class="collapse" id="charts">-->
          <!--    <ul class="nav flex-column sub-menu">-->

          <!--    <li class="nav-item"> <a class="nav-link" href="enqueries.php">Manage Enqueries</a></li>-->
          <!--    </ul>-->
          <!--  </div>-->
          <!--</li>-->

        </ul>
      </nav>
      <!-- partial -->
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Admin</h3>
                  <h6 class="font-weight-normal mb-0">Product listing and enquiry management. 
                  <!--<span class="text-primary">3 new enqueries!</span>-->
                      </h6>
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

            <style>
              .transparents .card-body p{
                margin-bottom: 0;
              }
              .transparents .card-body {
                flex-wrap: wrap;
                padding: 13px;
                align-items: center;
                justify-content: space-between;
              }
              
              .dataTables_wrapper select {
   
    height: 30px;
    width: 78px;
   
}
              
              #kt_table_users_filter{
                  display:none;
              }
              
              
              .status-New        { background-color: #d1ecf1 !important; color: #0c5460 !important; }
.status-Qualified  { background-color: #cce5ff !important; color: #004085 !important; }
.status-Contacted  { background-color: #fff3cd !important; color: #856404 !important; }
.status-Converted  { background-color: #d4edda !important; color: #155724 !important; }
.status-FollowUp   { background-color: #e2e3e5 !important; color: #383d41 !important; }
.status-Junk       { background-color: #f8d7da !important; color: #721c24 !important; }
.status-Not-Junk   { background-color: #d6d8d9 !important; color: #1b1e21 !important; }

            </style>

            <div class="col-md-12 grid-margin transparent transparents">

              <!--<div class="row">-->
              <!--  <div class="col-md-2 mb-4 mb-lg-0 stretch-card transparent">-->
              <!--    <div class="card card-light-blue">-->
              <!--      <div class="card-body d-flex">-->
              <!--        <p class="">New </p>-->
              <!--        <p class="fs-30 ">10</p>-->

              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--  <div class="col-md-2 stretch-card transparent">-->
              <!--    <div class="card card-light-danger">-->
              <!--      <div class="card-body d-flex">-->
              <!--        <p class="">Contacted </p>-->
              <!--        <p class="fs-30 ">100</p>-->

              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--  <div class="col-md-2 stretch-card transparent">-->
              <!--    <div class="card card card-tale">-->
              <!--      <div class="card-body d-flex">-->
              <!--        <p class="">Converted </p>-->
              <!--        <p class="fs-30 ">100</p>-->

              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--  <div class="col-md-2 stretch-card transparent">-->
              <!--    <div class="card" style="background: #9359f4; color:#fff;">-->
              <!--      <div class="card-body d-flex">-->
              <!--        <p class="">Interested </p>-->
              <!--        <p class="fs-30 ">100</p>-->

              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--  <div class="col-md-2 stretch-card transparent">-->
              <!--    <div class="card card-light-blue">-->
              <!--      <div class="card-body d-flex">-->
              <!--        <p class="">Not interested </p>-->
              <!--        <p class="fs-30 ">100</p>-->

              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--  <div class="col-md-2 stretch-card transparent">-->
              <!--    <div class="card card-light-danger" style="background: #48edb6;">-->
              <!--      <div class="card-body d-flex">-->
              <!--        <p class="">Lost </p>-->
              <!--        <p class="fs-30 ">100</p>-->

              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>

          <!-- Modal -->
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Inquery</h5>
                  <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    aria-label="Close">Close</button> -->
                </div>
                <div class="modal-body">
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Product name</label>
                      <input type="password" class="form-control" id="exampleInputConfirmPassword1"
                        placeholder="Product Name">
                    </div>
                   
                    <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button> -->
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal -->

          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h4 class="card-title">Manage Inqueries</h4>
                    <form action="download.php" method="GET">
                        <div class="row">
                            <div class="col-md-4">
                                <input required type="date" name="start_date">
                            </div>
                             <div class="col-md-4">
                                <input required type="date" type="enddate" name="end_date">
                            </div>
                       
                         <div class="col-md-4">
                        <button class="btn btn-info" type="submit">Download</button>
                        </div>
                         </div>
                    </form>
                    <!--<button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"-->
                    <!--  class="btn btn-primary btn-icon-text">-->
                    <!--  <i class="mdi mdi-library-plus"></i>-->
                    <!--  Add Inquery-->
                    <!--</button>-->
                  </div>


                  <p class="card-description">
                    <!-- Add class <code>.table-striped</code> -->
                  </p>
                  <!-- Note Modal -->
<div class="modal fade" id="noteModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Edit Lead Note</h5>
    
      </div>
      <div class="modal-body">
        <form id="noteForm">
          <input type="hidden" name="lead_id" id="lead_id">
          <div class="mb-3">
            <label class="form-label">Note</label>
            <textarea class="form-control" name="note" id="note_text" rows="4"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Save Note</button>
          
            <button type="button" class="btn btn-secondary closenow">Close</button>
         
        </form>
      </div>
    </div>
  </div>
</div>
<h4>Filter By Date:</h4>
<form method="GET" class="mb-3">
    <div class="row">
        <div class="col-md-3">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" 
                   class="form-control" 
                   value="<?php echo isset($_GET['start_date']) ? $_GET['start_date'] : ''; ?>">
        </div>
        <div class="col-md-3">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" id="end_date" 
                   class="form-control" 
                   value="<?php echo isset($_GET['end_date']) ? $_GET['end_date'] : ''; ?>">
        </div>
        <div class="col-md-3 align-self-end">
            <button type="submit" class="btn btn-primary">Filter</button>
            <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>" class="btn btn-secondary">Reset</a>
        </div>
    </div>
</form>


                  <div class="table-responsive">
                    <table class="table table-striped table-borderless" id="kt_table_users">
    <thead>
        <tr>
            <th>Action</th>
            <th>Date</th>
            <th>Name</th>
                 <th>Product Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Status</th>
            <th>Product URL</th>
        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
        <?php
        include('./codes/db.php');
       $start_date = isset($_GET['start_date']) ? $_GET['start_date'] : '';
$end_date   = isset($_GET['end_date']) ? $_GET['end_date'] : '';

$query = "SELECT id, name, product, email, phone_number, status, notes, page_url, created_at 
          FROM enqueries";

// If both dates are selected, add WHERE condition
if (!empty($start_date) && !empty($end_date)) {
    $query .= " WHERE DATE(created_at) BETWEEN '" . $db->real_escape_string($start_date) . "' 
                                      AND '" . $db->real_escape_string($end_date) . "'";
}

$query .= " ORDER BY id DESC";

$result = $db->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr data-enqueries-id='<?php echo $row['id']?>'>
                    <td>
                        <a class="btn btn-primary btn-sm" href="view-leads.php?id=<?php echo $row['id']; ?>">
                            View Details <i class="ti ti-eye"></i>
                        </a>
                          <span class="note-preview" style="display:none;" id="note_preview_<?php echo $row['id']; ?>">
        <?= $row['notes'] ? substr($row['notes'], 0, 30) . '...' : 'No notes'; ?>
    </span>
  <button class="btn btn-sm btn-outline-secondary ms-2 edit-note-btn" 
        data-id="<?php echo $row['id']; ?>" 
        data-note="<?php echo htmlspecialchars($row['notes'] ?? ''); ?>">
    <i class="ti ti-notepad"></i> 
    <?php echo !empty($row['notes']) ? 'View Note' : 'Add Note'; ?>
</button>

                    </td>
                    <td><?= date('d M Y', strtotime($row['created_at'])) ?></td>
                    <td><?= htmlspecialchars($row['name']); ?></td>
                      <td><?= $row['product']; ?></td>
                    <td><?= htmlspecialchars($row['phone_number']); ?></td>
                    <td><?= htmlspecialchars($row['email']); ?></td>
                   
                    <td>
                   <?php
$status = $row['status']; 
$className = 'status-' . str_replace(' ', '-', $status);
?>
<select data-enqueries-id='<?php echo $row['id']?>' class="form-select form-control enqueries-status-select <?php echo $className; ?>" 
        name="enqueries_status">
    <option value="New" <?= ($status == 'New') ? 'selected' : ''; ?>>New</option>
    <option value="Qualified" <?= ($status == 'Qualified') ? 'selected' : ''; ?>>Qualified</option>
    <option value="Contacted" <?= ($status == 'Contacted') ? 'selected' : ''; ?>>Contacted</option>
    <option value="Converted" <?= ($status == 'Converted') ? 'selected' : ''; ?>>Converted</option>
    <option value="FollowUp" <?= ($status == 'FollowUp') ? 'selected' : ''; ?>>Follow Up</option>
    <option value="Junk" <?= ($status == 'Junk') ? 'selected' : ''; ?>>Junk</option>
    <option value="Not Junk" <?= ($status == 'Not Junk') ? 'selected' : ''; ?>>Not Junk</option>
</select>

                    </td>
                    <td style="white-space: normal;"><?= htmlspecialchars($row['page_url']); ?></td>
                </tr>
        <?php
            }
            $result->free();
        } else {
            echo "<tr><td colspan='7' class='text-center'>No data found</td></tr>";
        }
        $db->close();
        ?>
    </tbody>
</table>

                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
    
        <!-- partial -->
     
    <!-- page-body-wrapper ends -->
    
    <script>
                var datatable;
                // Assuming you have a table element with an ID 'kt_ecommerce_enrolled_students_table'
                var table = document.getElementById('kt_table_users');

                var handleChangeStatus = () => {
                    // Select all status dropdowns
                    const statusDropdowns = table.querySelectorAll('[name="enqueries_status"]');

                    statusDropdowns.forEach(statusDropdown => {
                        // Status dropdown on change
                        statusDropdown.addEventListener('change', function() {
                            const studentId = $(this).closest('tr').find('[name="enqueries_status"]').data('enqueries-id');

                            const newUserStatus = this.value;

                            // SweetAlert2 pop up
                            Swal.fire({
                                text: `Are you sure you want to change the status to ${newUserStatus}?`,
                                icon: "warning",
                                showCancelButton: true,
                                buttonsStyling: false,
                                confirmButtonText: "Yes, change it!",
                                cancelButtonText: "No, cancel",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-success",
                                    cancelButton: "btn fw-bold btn-active-light-primary"
                                }
                            }).then(function(result) {
                                if (result.value) {
                                    // Make an Ajax request to update the status
                                    $.ajax({
                                        url: './codes/enquiery.php', // Update with the correct PHP file
                                        method: 'POST',
                                        data: {
                                            enqueries_id: studentId,
                                            newUserStatus: newUserStatus
                                        },
                                        success: function(response) {
                                            if (response.success) {
                                                Swal.fire({
                                                    text: `Status changed to ${newUserStatus} successfully!`,
                                                    icon: "success",
                                                    buttonsStyling: false,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: {
                                                        confirmButton: "btn fw-bold btn-primary",
                                                    }
                                                });
                                            } else {
                                                Swal.fire({
                                                    text: `Failed to change status to ${newUserStatus}.`,
                                                    icon: "error",
                                                    buttonsStyling: false,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: {
                                                        confirmButton: "btn fw-bold btn-primary",
                                                    }
                                                });
                                            }
                                        },
                                        error: function() {
                                            Swal.fire({
                                                text: `An error occurred while changing the status to ${newUserStatus}.`,
                                                icon: "error",
                                                buttonsStyling: false,
                                                confirmButtonText: "Ok, got it!",
                                                customClass: {
                                                    confirmButton: "btn fw-bold btn-primary",
                                                }
                                            });
                                        }
                                    });
                                } else {
                                    // Reset the dropdown to the previous status if the user cancels
                                    statusDropdown.value = statusDropdown.getAttribute('data-previous-value');
                                }
                            });
                        });
                    });
                }

                // Call the function to initialize the status change functionality
                handleChangeStatus();
                
                
                document.querySelectorAll('.edit-note-btn').forEach(btn => {
  btn.addEventListener('click', function () {
    const id = this.getAttribute('data-id');
    const note = this.getAttribute('data-note');

    document.getElementById('lead_id').value = id;
    document.getElementById('note_text').value = note;
    new bootstrap.Modal(document.getElementById('noteModal')).show();
  });
});

document.getElementById('noteForm').addEventListener('submit', function(e) {
  e.preventDefault();
  let formData = new FormData(this);

  fetch('update_note.php', {
    method: 'POST',
    body: formData
  }).then(res => res.json())
    .then(data => {
      if (data.success) {
        // Update preview in table
        document.getElementById('note_preview_' + formData.get('lead_id')).innerText =
            formData.get('note').substring(0, 30) + '...';
      // Hide modal safely
     $('#noteModal').removeClass('show').hide();
$('.modal-backdrop').remove(); 
$('body').removeClass('modal-open').css('padding-right', '');



        // Show SweetAlert
        Swal.fire({
          text: "Note updated successfully!",
          icon: "success",
          buttonsStyling: false,
          confirmButtonText: "Ok, got it!",
          customClass: {
            confirmButton: "btn fw-bold btn-primary",
          }
        });
      } else {
       Swal.fire({
          text: "Error saving note!",
          icon: "error",
          confirmButtonText: "Try Again",
          customClass: {
            confirmButton: "btn fw-bold btn-danger",
          }
        });
      }
    });
});

  

                
            </script>



<?php include('inc/footer.php') ?>