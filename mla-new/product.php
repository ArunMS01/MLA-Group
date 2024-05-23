<?php include('header.php');?>

<style>
    .py-new {
        padding-top: 1rem !important;
        padding-bottom: 2rem !important;
    }

    .col-or {
        color: #FE8F34 !important;
    }

    /* .breadcrumb-row ul li {
        padding: 0;
        margin-right: 3px;
        display: inline-block;
        font-size: 16px;
        font-weight: 400;
        text-transform: capitalize;
        color: !important;
    } */


    .form-label {
        font-size: 16px;
        font-weight: 700;
        color: var(--title);
        margin-bottom: 0px !important;
        background: transparent;
        border-color: #D7D7D7;
        font-family: var(--font-family-title);
    }
</style>
<style>
                                        .dz-tabs .nav-tabs .nav-link.active {
                                            border-color: #FE8F34 !important;
                                            color: var(--secondary);
                                        }




                                        .check-tbl tbody tr td {
                                            padding: 0px !important;
                                            font-weight: 500;
                                            font-size: 19px;
                                            color: var(--secondary);
                                            border: none;
                                            font-family: var(--font-family-title);
                                        }

                                        .bx-new .feature-detail li i {


                                            border: 1px solid #FE8F34 !important;

                                            color: #FE8F34 !important;
                                        }


                                        .bx-new .feature-detail li i {
                                            font-size: 20px;
                                            height: 32px;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            border: 1px solid var(--primary);
                                            border-radius: 50%;
                                            width: 32px;
                                            min-width: 32px;
                                            margin-right: 10px;
                                            color: var(--primary);
                                        }

                                        .bx-new {
                                            padding-left: 0px !important;

                                            padding-right: 0px !important;
                                        }
                                    </style>

<?php
// Assuming you have a database connection established already
include('database.php');

// Function to query product data from the database based on product ID
function query_product_data($product_id, $conn) {
    // SQL query to retrieve product data based on product_id
    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

// Function to query gallery images from the database based on product ID
function query_gallery_images($product_id, $conn) {
    // SQL query to retrieve gallery images based on product_id
    $sql = "SELECT * FROM gallery_images WHERE product_id = $product_id";
    $result = mysqli_query($conn, $sql);
    $gallery_images = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $gallery_images[] = $row['image_url'];
    }
    return $gallery_images;
}

// Check if the "url" parameter exists in the URL
if(isset($_GET['url'])) {
    // Get the URL parameter named "url"
    $product_url = $_GET['url'];

    // Query the database to get the product ID using the URL
    $product_id_query = "SELECT id FROM products WHERE url = '$product_url'";
    $result_product_id = mysqli_query($conn, $product_id_query);

    // Check if the query executed successfully
    if($result_product_id) {
        // Check if the product ID exists in the database
        if(mysqli_num_rows($result_product_id) > 0) {
            // Product ID exists, proceed to fetch product data and gallery images
            $product_id_row = mysqli_fetch_assoc($result_product_id);
            $product_id = $product_id_row['id'];
            $product_data = query_product_data($product_id, $conn);
            $gallery_images = query_gallery_images($product_id, $conn);
        } else {
            // Product ID doesn't exist, handle the error (e.g., redirect to an error page)
         
            exit();
        }
    } else {
        // Query execution failed, handle the error (e.g., display an error message)
        echo "Error: " . mysqli_error($conn);
    }
} else {

    exit();
}

// Use the retrieved product data and gallery images as needed
?>

	<!-- Header End -->

    <div class="page-content">



<div class="d-sm-flex justify-content-between container-fluid py-new">
    <nav aria-label="breadcrumb" class="breadcrumb-row">
        <ul class="breadcrumb mb-0">
            <li class="breadcrumb-item col-or"> Home</li>
            <li class="breadcrumb-item col-or">Products</li>
            <li class="breadcrumb-item ">Hydrated Calcium Silicate</li>
        </ul>
    </nav>
</div>

<section class="content-inner py-0">
    <div class="container-fluid">
        <div class="row">
        <div class="col-xl-4 col-md-4">
    <div class="dz-product-detail sticky-top">
        <div class="swiper-btn-center-lr">
            <div class="swiper product-gallery-swiper2">
                <div class="swiper-wrapper" id="lightgallery">
                    <!-- Display main image -->
                    <div class="swiper-slide">
                        <div class="dz-media DZoomImage">
                            <a class="mfp-link lg-item" href="./admin/codes/<?php echo $product_data['main_image']; ?>"
                                data-src="./admin/codes/<?php echo $product_data['main_image']; ?>">
                                <i class="feather icon-maximize dz-maximize top-left"></i>
                            </a>
                            <img src="./admin/codes/<?php echo $product_data['main_image']; ?>" alt="Main Image">
                        </div>
                    </div>
                    <!-- Display gallery images -->
                    <?php foreach ($gallery_images as $image_url): ?>
                        <div class="swiper-slide">
                            <div class="dz-media DZoomImage">
                                <a class="mfp-link lg-item" href="./admin/codes/<?php echo $image_url; ?>"
                                    data-src="<?php echo $image_url; ?>">
                                    <i class="feather icon-maximize dz-maximize top-left"></i>
                                </a>
                                <img src="./admin/codes/<?php echo $image_url; ?>" alt="Gallery Image">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="swiper product-gallery-swiper thumb-swiper-lg">
                <div class="swiper-wrapper">
                    <!-- Display main image in thumbnail slider -->
                    <div class="swiper-slide">
                        <img src="./admin/codes/<?php echo $product_data['main_image']; ?>" alt="Main Image">
                    </div>
                    <!-- Display gallery images in thumbnail slider -->
                    <?php foreach ($gallery_images as $image_url): ?>
                        <div class="swiper-slide">
                            <img src="./admin/codes/<?php echo $image_url; ?>" alt="Gallery Image">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>


            <div class="col-xl-8 col-md-8">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="dz-product-detail style-2  ps-0">
                        <div class="dz-content">
    <div class="dz-content-footer">
        <div class="dz-content-start">
            <!-- <span class="badge bg-purple mb-2">SALE 20% Off</span> -->
            <h4 class="title" style="line-height: 1;"><?php echo $product_data['title']; ?></h4>
        </div>
    </div>
  
    <h5>Applications</h5>
    <p class="para-text">
        <div class="detail-bx bx-new">
        <?php
// Extracted from the database
$application_data = $product_data['applications'];

// Create a DOMDocument object
$doc = new DOMDocument();
// Load the HTML content
$doc->loadHTML($application_data);

// Get all <p> elements
$paragraphs = $doc->getElementsByTagName('p');

// Output the <p> elements as they are
foreach ($paragraphs as $paragraph) {
    echo '<p>' . $doc->saveHTML($paragraph) . '</p>';
}

// Get all <li> elements
$listItems = $doc->getElementsByTagName('li');

// Output the list items with icon prepended
echo '<ul class="feature-detail">';
foreach ($listItems as $item) {
    // Check if the <li> element has non-empty text content
    if (trim($item->textContent) !== '') {
        // Get the text content of the <li> element
        $textContent = trim($item->textContent);
        // Output <li> element with icon prepended to text content
        echo '<li><i class="icon feather icon-check"></i> ' . $textContent . '</li>';
    }
}
echo '</ul>';
?>


        </div>
    </p>
</div>

                            <div class="banner-social-media">
                                <ul>
                                    <li class="linkdin1">
                                        <a href="javascript:void(0);"><i class="fab fa-linkedin-in"
                                                style="color: #ffffff;"></i></a>
                                    </li>
                                    <li class="tube1">
                                        <a href="javascript:void(0);"><i class="fab fa-youtube"
                                                style="color: #ffffff;"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <style>
                            .logo-back .col-md-3{
                                padding: 4px 4px;
                            }
                            .site-header{
                                border-bottom: 1px solid #fe8f34 !important;
                                padding-bottom: 10px;
                            }
                            .tube1 i{
                                color: red;
                            }
                            .tube1{
                                background: red;
                            }
                            .banner-social-media a {
                                opacity: 1 !important;
                            }

                            .banner-social-media {
                                position: fixed;
                                right: 0;
                                z-index: 100;
                                top: unset;
                            }

                            .banner-social-media i {
                                color: #fff;
                                opacity: 1;
                            }

                            .banner-social-media ul li {
                                /* background: #e5e5e5; */
                                margin: 2px 0;
                                /* padding: 20px 0; */
                                width: 47px;
                                display: flex;
                                /* writing-mode: tb-rl; */
                                height: 47px;
                                align-items: center;
                                justify-content: center;
                            }

                            

                            .facebook1 {
                                background: #0965fe !important;
                            }

                            .linkdin1 {
                                background: #0966c4 !important;
                            }

                            .contact-area1new {
                                /*padding: 28px 33px 60px;*/
                                padding: 13px 19px;

                            }

                            .cart-detail {
                                background: white;
                                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

                            }

                            .quotes {
                                font-size: 1rem;
                                font-weight: 700;
                                background-color: #FE8F34;
                                text-align: center;
                                color: #fff;
                                border: 1px solid;
                                padding: 10px 0;
                                text-transform: uppercase;
                            }

                            .inputuiriir {
                                padding: 10px 32px 10px 9px;
                                width: 108px;
                                border: none;
                                border-radius: 0;
                                font-size: 15px;
                                margin-right: 3px;
                            }


                            /* .cart-detail .form-control {
                                background: white;

                            } */
                            .mb-negative {
                                margin-bottom: -2px;

                                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                            }

                            .margin-top {
                                margin-top: -11px !important;
                            }
                        </style>
                        <div class=" style-1 m-r20 m-md-r0 wow fadeInUp" data-wow-delay="0.5s"
                            bis_skin_checked="1"
                            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="row">
                                <div class="col-md-12">
                                    <img style="display: block; margin: auto;"
                                        src="./images//UNISIL6_logo.png"
                                        class="mt-4 mb-4 margin-top mix-blend-mode">


                                </div>
                            </div>
                            <p class="mb-negative quotes">Request Quote/Information <i
                                    class="fa fa-file-text" aria-hidden="true"></i> </p>
                            <div class="div contact-area1new cart-detail">
                            <form class="dz-form dzForm">
    <input type="hidden" class="form-control" name="dzToDo" value="Contact">
    <input type="hidden" class="form-control" name="reCaptchaEnable" value="0">
    <div class="dzFormMsg"></div>
    
    <label class="form-label">Your Name</label>
    <div class="input-group">
        <input required type="text" class="form-control" name="dzName">
        <div class="error-msg" id="name-error"></div>
    </div>

    <label class="form-label">Email Address</label>
    <div class="input-group">
        <input required type="email" class="form-control" name="dzEmail">
        <div class="error-msg" id="email-error"></div>
    </div>

    <label class="form-label">Phone Number</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <select class="form-select inputuiriir">
                <option value="+91">+91 (IND)</option>
                <option value="+1">+1 (USA)</option>
                <option value="+44">+44 (UK)</option>
                <!-- Add more options for other countries as needed -->
            </select>
        </div>
        <input required type="text" class="form-control" name="dzPhoneNumber">
        <div class="error-msg" id="phone-error"></div>
    </div>

    <label class="form-label">Company Name</label>
    <div class="input-group">
        <input required type="text" class="form-control" name="dzCompanyName">
        <div class="error-msg" id="company-error"></div>
    </div>

    <label class="form-label">Message</label>
    <div class="input-group m-b30">
        <textarea name="dzMessage" rows="4" required class="form-control m-b10"></textarea>
        <div class="error-msg" id="message-error"></div>
    </div>

    <button name="submit" type="submit" value="submit" class="btn w-100 btn-secondary btnhover">SUBMIT</button>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .check-tbl tbody tr td:first-child,
    .check-tbl tbody tr td:last-child {
        padding: 0px 0;
    }

    .detail-bx {
        padding: 0;
    }

    .pb-sm {
        padding-bottom: 40px;
    }
</style>
<section class="content-inner-3 pb-sm">
    <div class="container">
        <div class="product-description">
            <div class="dz-tabs">
                <!-- <ul class="nav nav-tabs center" id="myTab1" role="tablist">
                    
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                            aria-controls="profile-tab-pane" aria-selected="false">Description</button>
                    </li>
                </ul> -->
                <div class="tab-content" id="myTabContent">

                    <h3 class="title mb-4 descheading">Description</h3>


                    <style>
                        .descheading {
                            padding-bottom: 17px;
                            border-bottom: 1px solid #cacaca;
                        }

                        .mt-40 {
                            margin-bottom: 40px;
                        }

                        .desc-new .para-text {
                            margin-bottom: 0px;
                        }
                    </style>

                    <div class="tab-pane fade desc-new show active" id="profile-tab-pane" role="tabpanel"
                        aria-labelledby="profile-tab" tabindex="0">
                        <div class="detail-bx mt-40">
                    <?php echo $product_data['long_description'];?>
                        </div>

                       







                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// Step 1: Retrieve related product IDs
$related_product_ids = explode(',', $product_data['related_products']);

// Step 2: Initialize an array to store related product details
$related_products = array();

// Step 3: Query the product table for each related product
foreach ($related_product_ids as $product_id) {
    $query = "SELECT id, title, url FROM products WHERE id = $product_id";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful and fetch the product details
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Add the product details to the array
        $related_products[] = $row;
    }
}

?>

<section class="content-inner-1 overlay-white-middle overflow-hidden padding-top-0">
    <div class="container">
        <div class="">
            <div class="">
                <h2 class="title mb-4">Related products</h2>
            </div>
        </div>
        <div class="widget widget_categories style-1">
            <ul class="row">
                <?php
                $column_count = 0;
                foreach ($related_products as $product):
                    if ($column_count % 6 == 0) {
                        // Start a new column
                        echo '<div class="col-md-4"><ul class="cat-list">';
                    }
                    ?>
                    <li class="cat-item">
                      
                        <a href="<?php echo $product['url'] ?>" title="<?php echo $product['title'] ?>">
                            <?php echo $product['title'] ?>
                        </a>
                    </li>
                    <?php
                    $column_count++;
                    if ($column_count % 6 == 0) {
                        // Close the column
                        echo '</ul></div>';
                    }
                endforeach;
                // Close the column if not already closed
                if ($column_count % 6 != 0) {
                    echo '</ul></div>';
                }
                ?>
            </ul>
        </div>
    </div>
</section>




<style>
    .get-in-touch {
        padding: 5px 5px;
        display: flex;
        align-items: center;
        justify-content: center;


    }

    .get-in-touch h3 {
        font-size: 19px;
    }
</style>
<section class="get-in-touch wow fadeIn" data-wow-delay="0.3s"
    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
    <div class="m-r100 m-md-r0 m-sm-r0">
        <p class="dz-title mb-lg-0 mb-3">Customization available.
            Contact our product team for details.
        </p>
    </div>
    <a href="#" class="btn btn-light">Get In Touch</a>
</section>

<!-- Companies -->
<section class="content-inner-1 logo-back overlay-white-middle companies border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-lg-b0 p-md-b30 wow fadeInUp text-center mb-lg-20" data-wow-delay="0.1s">
                    <h2 class="title">
                        Certifications</h2>

                </div>
            </div>
        </div>
        <div class="section-inner">

            <div class="row gx-3 companies-inner">
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="javascript:void(0);" class="companies-wrapper">
                        <div class="companies-media">
                            <img src="https://www.mlagroup.com/img/certifications/dnv.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="javascript:void(0);" class="companies-wrapper">
                        <div class="companies-media">
                            <img src="https://www.mlagroup.com/img/certifications/02.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="javascript:void(0);" class="companies-wrapper">
                        <div class="companies-media">
                            <img src="https://www.mlagroup.com/img/certifications/03.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.4s">
                    <a href="javascript:void(0);" class="companies-wrapper">
                        <div class="companies-media">
                            <img src="https://www.mlagroup.com/img/certifications/04.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="javascript:void(0);" class="companies-wrapper">
                        <div class="companies-media">
                            <img src="https://www.mlagroup.com/img/certifications/05.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.6s">
                    <a href="javascript:void(0);" class="companies-wrapper">
                        <div class="companies-media">
                            <img src="https://www.mlagroup.com/img/certifications/06.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="javascript:void(0);" class="companies-wrapper">
                        <div class="companies-media">
                            <img src="https://www.mlagroup.com/img/certifications/07.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.6s">
                    <a href="javascript:void(0);" class="companies-wrapper">
                        <div class="companies-media">
                            <img src="https://www.mlagroup.com/img/certifications/08.jpg" alt="">
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>


</section>


<style>
    .btth{
        border-right: 2px solid #c4c4c4 !important;
    }
</style>
<style>
                .site-filters li.active a {
                    color: #FE8F34;
                }

                a:hover {

                    color: #FE8F34 !important;

                }

                .dz-tabs .tab-content {
                    padding-top: 0;
                }

                .content-inner-1 {
                    padding-top: 50px;
                    padding-bottom: 50px;
                }

                .shop-card {
                    padding-bottom: 8px;
                    /* position: relative;
                    overflow: hidden;
                    background-color: #ffffff;
                    height: 4rem;
                    min-height: 4rem;
                    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; */
                }

                .mix-blend-mode {
                    mix-blend-mode: multiply;
                }


                .shop-card .dz-content {
                    text-align: center;
                    background-color: #fff;
                    padding: 15px 15px 15px 15px;
                    display: ruby-text;


                }

                .ArOc1c {
                    background-color: #fff;
                    bottom: 0;
                    left: 0;
                    position: absolute;
                    right: 0;
                    text-align: center;
                    top: 0;
                }

                .ArOc1c img {
                    max-height: 100%;
                    max-width: 100%;
                    vertical-align: middle;
                }

                .FM6uVc {
                    max-width: 302px;
                    padding-bottom: 100%;
                    margin: auto;
                    position: relative;
                }

                .filters {
                    display: flex;
                    gap: 2px;
                    /* Adjust the gap between tabs */
                }

                .filters li {
                
                    /* Add a border between tabs */
                }

                .filters li:last-child {
                    border-right: none;
                    /* Remove the border from the last tab */
                }

                .filters li.active a {
                    color: #FE8F34;
                }


                .filters li a {
                    padding: 10px 20px;
                    /* Adjust the padding */
                    display: inline-block;
                    color: #000000;
                    text-decoration: none;
                    transition: background-color 0.3s;
                }


                .site-filters li {
                    margin-right: 0px !important;
                }

                .wlist-80 {
                    width: 80%;
                    margin: auto;
                }

                .content-inner-3 {
                    padding-top: 40px;
                }
                .detail-bx .feature-detail{
                    flex-wrap: wrap;
                    align-items: normal !important;
                    flex-direction: column;
                }
            </style>

<?php
// Fetch brands from the database

 $query = "SELECT id, name, logo FROM brand";
$result = mysqli_query($conn, $query);

// Initialize an array to store the brands
$brands = [];

// Check if the query was successful and fetch the brand details
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Add the brand details to the array
        $brands[$row['id']] = $row;
    }
}

// Fetch products for each brand
foreach ($brands as $brandId => $brand) {
$query = "SELECT id, title, url FROM products WHERE brand = $brandId";
    $result = mysqli_query($conn, $query);

    // Initialize an array to store products for this brand
    $products = [];

    // Check if the query was successful and fetch the product details
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Add the product details to the array
            $products[] = $row;
        }
    }

    // Assign the products to the corresponding brand in the $brands array
    $brands[$brandId]['products'] = $products;
}

// Close the database connectio
mysqli_close($conn);

// Now $brands array contains all brands with their associated products
?>
           
<!--Recommend Section Start-->
<section class="content-inner-1 bg-light">
<div class="container">
        <h3 class="title text-center mb-4">RANGE OF PRODUCTS</h3>
        <div class="site-filters clearfix d-flex align-items-center justify-content-center">
            <ul class="filters" data-bs-toggle="buttons">
                <?php foreach ($brands as $brand): ?>
                    <li class="btn btth" data-brand="brand-<?php echo $brand['id']; ?>">
                        <input type="radio" name="brand">
                        <a href="javascript:void(0);"><?php echo htmlspecialchars($brand['name']); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <?php foreach ($brands as $brand): ?>
            <div class="tab-content" id="brand-<?php echo $brand['id']; ?>">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <img style="display: block; margin: auto;" src="<?php echo htmlspecialchars($brand['logo']); ?>" class="mt-4 mb-4">
                    </div>
                    <div class="col-md-9">
                        <div class="row gx-xl-4 g-3">
                            <?php foreach ($brand['products'] as $product): ?>
                                <div class="col-md-3">
                                    <div class="widget widget_categories style-1">
                                        <ul>
                                            <li class="cat-item"><a href="<?php echo htmlspecialchars($product['url']); ?>"><?php echo htmlspecialchars($product['title']); ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

  
    </section>
    <style>
        .product-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .product-item {
            flex: 0 0 calc(25% - 20px);
            margin: 10px;
        }

        .shop-card {
            border: 1px solid #ccc;
            padding: 15px;
        }

        .shop-card .title {
            margin-bottom: 10px;
        }

        .shop-card .btn {
            width: 100%;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
    </style>


<style>
                            /* Add your custom CSS here */
                            .product-list {
                                list-style: none;
                                /* Remove bullet points from the list */
                                padding: 0;
                                margin: 0;
                                display: flex;
                                flex-wrap: wrap;
                                /* Allow list items to wrap to the next line */
                                justify-content: center;
                                flex-direction: column;
                            }

                            .product-item {
                                flex: 0 0 calc(25% - 20px);
                                /* Set each product item to occupy 25% width with margin */
                                margin: 10px;
                                /* Add margin between each product item */
                            }

                            .shop-card {
                                border: 1px solid #ccc;
                                /* Add border around each product card */
                                padding: 15px;
                                /* Add padding to the product card */
                            }

                            .shop-card .title {
                                margin-bottom: 10px;
                                /* Add margin below the title */
                            }

                            .shop-card .btn {
                                width: 100%;
                                /* Make the button full width */
                            }
                        </style>
<!--Recommend Section End-->

<style>
.logo-back img {
    width: 37%;
}


.companies-media img {
    width: 37%;
    mix-blend-mode: multiply;
}

.logo-foot {
    width: 75% !important;
}

.mb-lg-20 {
    margin-bottom: 1.6rem;
}
</style>








<style>
.padding-top-0 {
    padding-top: 0;
}

@media only screen and (max-width: 575px) {
    .wlist-80 {
        width: 95%;
        margin: auto;
    }

    .banner-social-media {
        display: block;
    }

    .related-swiper .btn-prev,
    .swiper-btn-center-lr .btn-next {
        display: flex;
        bottom: -31px;
        top: unset;
    }

    .related-swiper .btn-prev {
        left: 34%;
    }

    .related-swiper .btn-next {
        right: 34%;
    }

    .filters {
        flex-wrap: wrap;
    }

    .filters li {}

    .get-in-touch {
        padding: 20px 0px !important;
    }

}
</style>



<!-- Companies End -->



<!-- Icon Box Start -->
<!-- <section class="content-inner py-0">
<div class="container-fluid px-0">
    <div class="row gx-0">
        <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="icon-bx-wraper style-2 bg-light">
                <div class="icon-bx">
                    <img src="images/svg/icon-bx/password-check.svg" alt="/">
                </div>
                <div class="icon-content">
                    <h5 class="dz-title m-b10">Filter & Discover</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
                <div class="data-text">01</div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="icon-bx-wraper style-2">
                <div class="icon-bx">
                    <img src="images/svg/icon-bx/cart.svg" alt="/">
                </div>
                <div class="icon-content">
                    <h5 class="dz-title m-b10">Add to cart</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
                <div class="data-text">02</div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="icon-bx-wraper style-2 bg-light">
                <div class="icon-bx">
                    <img src="images/svg/icon-bx/discovery.svg" alt="/">
                </div>
                <div class="icon-content">
                    <h5 class="dz-title m-b10">Fast Shipping</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
                <div class="data-text">03</div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="icon-bx-wraper style-2">
                <div class="icon-bx">
                    <img src="images/svg/icon-bx/box-tick.svg" alt="/">
                </div>
                <div class="icon-content">
                    <h5 class="dz-title m-b10">Enjoy The Product</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
                <div class="data-text">04</div>
            </div>
        </div>
    </div>
</div>
</section> -->
<!-- Icon Box End -->
</div>


<style>
.b-1 {
border-top: 1px solid #FE8F34;
}

@media only screen and (max-width:768px) {}
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to validate form fields
        function validateForm() {
            var isValid = true;

            // Reset error messages
            document.querySelectorAll('.error-msg').forEach(function(errorMsg) {
                errorMsg.textContent = '';
            });

            // Validate Name
            var nameInput = document.querySelector("input[name='dzName']");
            if (nameInput.value.trim() === '') {
                document.getElementById('name-error').textContent = 'Name is required.';
                isValid = false;
            }

            // Validate Email
            var emailInput = document.querySelector("input[name='dzEmail']");
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(emailInput.value.trim())) {
                document.getElementById('email-error').textContent = 'Invalid email format.';
                isValid = false;
            }

            // Validate Phone Number
            var phoneInput = document.querySelector("input[name='dzPhoneNumber']");
            var phonePattern = /^\+?\d{10,}$/;
            if (!phonePattern.test(phoneInput.value.trim())) {
                document.getElementById('phone-error').textContent = 'Invalid phone number format.';
                isValid = false;
            }

            // Validate Company Name
            var companyInput = document.querySelector("input[name='dzCompanyName']");
            if (companyInput.value.trim() === '') {
                document.getElementById('company-error').textContent = 'Company name is required.';
                isValid = false;
            }

            // Validate Message
            var messageInput = document.querySelector("textarea[name='dzMessage']");
            if (messageInput.value.trim() === '') {
                document.getElementById('message-error').textContent = 'Message is required.';
                isValid = false;
            }

            return isValid;
        }

        // Function to handle form submission
        function submitForm(event) {
            event.preventDefault();

            if (!validateForm()) {
                return;
            }

            var formData = new FormData(document.querySelector(".dzForm"));

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "submit_form.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.success) {
                            // Form submitted successfully
                            alert("Form submitted successfully.");
                            document.querySelector(".dzForm").reset();
                        } else {
                            // Error submitting form
                            alert("Error submitting the form.");
                        }
                    } else {
                        // Error in AJAX request
                        alert("Error in AJAX request.");
                    }
                }
            };
            xhr.send(formData);
        }

        // Add event listener for form submission
        document.querySelector(".dzForm").addEventListener("submit", submitForm);
    });
</script>

<?php include('footer.php');?>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.filters .btn');
            const contents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    tabs.forEach(item => item.classList.remove('active'));
                    this.classList.add('active');

                    const brand = this.getAttribute('data-brand');
                    contents.forEach(content => {
                        if (content.id === brand) {
                            content.classList.add('active');
                        } else {
                            content.classList.remove('active');
                        }
                    });
                });
            });

            // Initialize the first tab as active
            if (tabs.length > 0) {
                tabs[0].click();
            }
        });
    </script>