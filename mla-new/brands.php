<?php
include('head.php');
?>
<title>MLA</title>
<meta name="description" content="">
</head>

<body>
    <?php
    include('gtm.php');
    ?>
    <div class="page-wraper">
        <!-- <div id="loading-area" class="preloader-wrapper-1">
		<div>
			<span class="loader-2"></span>
			<img src="images/logo.png" alt="/">
			<span class="loader"></span>
		</div>
	</div> -->


        <style>
        @media only screen and (max-width:768px){
            .FM6uVc {
                padding-bottom:121% !important;
            }
            .bannernew::before{
                transform: unset !important;
            }
        }
        .section-head p{
            color:#000;
        }
            @keyframes zoomInUp {
                0% {
                    transform: translateY(100%);
                    opacity: 0;
                }



                100% {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            .zoom-in-up {
                animation: zoomInUp 2s ease forwards;
            }
        </style>

        <?php
        include('nav.php');
        ?>

    <?php
      require('admin/codes/db.php');
   
      // Get the brand URL from the GET request
      $brandurl = isset($_GET['url']) ? $_GET['url'] : '';
      
      if ($brandurl) {
          // Query to get the image URL and description based on the brand URL
          $sql = "SELECT p.title, p.url, b.featuredImage, b.description
                  FROM products AS p
                  INNER JOIN brand AS b ON b.id = p.brand
                  WHERE b.url = '$brandurl'";
          $result = mysqli_query($db, $sql);
      
          $description = '';
          $imageUrl = 'https://cdn.pixabay.com/photo/2023/06/03/17/15/ai-generated-8038116_1280.jpg'; // Default image
      
          if ($result) {
              if ($row = mysqli_fetch_assoc($result)) {
                  $description = $row['description'];
                  $imageUrl = $row['featuredImage']; // Use the image URL from the database
              }
          }
      
      ?>
      
    


    <style>
        .ribbon-box {
            position: relative;
            background: #eb8233;
            
            padding: 40px;
            
            overflow: hidden;
        }

        .ribbon-background {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            background-color:#eb8233;
            width: 83%;
            height: 100px;
            z-index: 1;
            border-radius: 10px;
        }

        /* Additional ribbon background for the text section */
        .ribbon-background.text-ribbon {
            width: 120%; /* Extend the ribbon width on the text side */
            right: 0;
            left: auto;
            transform: translateX(-10%) translateY(-50%); /* Offset to adjust position */
        }

        .content {
            position: relative;
            z-index: 2;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .content img {
            width: 100%;
            height: auto;
            max-width: 100%;
            border-radius: 8px;
            padding: 10px;
            background: #ffffff;
        }

        .text-content {
            color: white;
            padding: 20px;
            position: relative;
            background: #eb8233;
        }
        .postion-and{
            position: absolute;
    right: 4%;
    top: 9%;
    z-index: 1;
    height: 20rem;
    border-radius: 8px;
        }
        .postion-block{
            position: relative;
        }

        @media (max-width: 768px) {
            .content img {
                max-width: 50%;
            }

            .postion-and {
                position: static;
            }
            .text-content {
                max-width: 100%;
            }
        }
    </style>
<div class=" postion-block" style="background-color:#f3ebeb;;padding:60px 0">
<img   class="postion-and" src="admin/codes/<?php echo htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8'); ?>" alt="Image">
    <div class="ribbon-box" >
        <!-- Image ribbon -->
        <div class="container">
        <!-- Text ribbon with extended width -->
       
        <div class="row content">
           
            <div class="col-md-6 text-content p-0">
                <h2 class="title">
               
                                               
                    <?php echo isset($_GET['url']) ? strtoupper(htmlspecialchars($_GET['url'], ENT_QUOTES, 'UTF-8')) : "Heading Text"; ?>
                </h2>
                <p>
                    <?php echo isset($description) ? htmlspecialchars($description, ENT_QUOTES, 'UTF-8') : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."; ?>
                </p>
            </div>
            <div class="col-md-6 p-0 ">
               
            </div>
        </div>
    </div>
    </div>
</div>









      
      <?php
// Get the brand URL from the GET request
$brandurl = isset($_GET['url']) ? $_GET['url'] : '';

if ($brandurl) {
    // Query to get the data based on the brand URL
    $sql = "SELECT b.description, b.longDescription, b.descriptionImage
            FROM brand AS b
            WHERE b.url = '$brandurl'";
    $result = mysqli_query($db, $sql);

    $description = '';
    $longDescription = '';
    $descriptionImage = '';

    if ($result) {
        if ($row = mysqli_fetch_assoc($result)) {
            $description = $row['description'];
            $longDescription = $row['longDescription'];
            $descriptionImage = $row['descriptionImage']; // Fetch the image URL
        }
    }
}
?>
<style>
    .pt-100{
        padding-top:50px;
        
    }
    .pb-100{
        padding-bottom:50px;
    }
    .align-center{
       
        align-items: center;
    }
    .border-radius{
        border-radius: 20px;
    }
</style>
<section class="pt-100 pb-100">
    <div class="container">
        <div class="row align-center">
            <div class="col-md-6">
                <!-- Output HTML content directly -->
                <p><?php echo isset($longDescription) ? $longDescription : ""; ?></p>
            </div>
            <div class="col-md-6">
                <!-- Output image URL with a fallback for safety -->
                <img class="border-radius" src="admin/codes/<?php echo isset($descriptionImage) ? htmlspecialchars($descriptionImage, ENT_QUOTES, 'UTF-8') : ""; ?>" alt="Description Image">
            </div>
        </div>
    </div>
</section>

        <style>
        .shop-card:hover{
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        }
        .shop-card {
    border-radius: 10px;
    transition: 0.5s cubic-bezier(0.25, 0.1, 0.25, 1);

    border: 1px solid #FF9800;
  
}
.shop-card .dz-media{
    background:#e0e0e0;
}
            .FM6uVc {
                margin: auto;
                position: relative;
                max-width: 256px;
                padding-bottom: 100%;
            }

            .ArOc1c {
                /*background-color: #fff;*/
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
                height:100%;
                vertical-align: middle;
            }
            
            .bannernew {
    position: relative;
    /*width: 54vw;*/
    margin: auto;
    padding: 20px;
    /*background: white;*/
    z-index: 1;
}

.bannernew::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #ffffffc2;
    z-index: -1;
    transform: skew(112deg);
    transform-origin: top left;
}

        </style>


<section class="content-inner-1">
    <div class="container">
        <!-- Big Heading -->
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center">
                <h2 class="display-4 fw-bold">Our Products</h2>
            </div>
        </div>

        <div class="row gx-xl-4 g-3 mb-xl-0 mb-md-0 mb-3">
            <?php
                // Fetch products from the database
                $sqls = "SELECT p.title, p.url, p.main_image, b.description
                         FROM products AS p
                         INNER JOIN brand AS b ON b.id = p.brand
                         WHERE b.url = '$brandurl'";
                $results = mysqli_query($db, $sqls);
                if ($results) {
                    while ($rown = mysqli_fetch_assoc($results)) {
            ?>
                <div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-4 m-sm-b0 ">
                    <div class="shop-card">
                        <div class="dz-media">
                            <div class="FM6uVc">
                                <div class="ArOc1c">
                                    <img src="admin/codes/<?php echo $rown['main_image'] ?>" alt="image">
                                </div>
                            </div>

                            <div class="shop-meta">
                                <a href="<?php echo htmlspecialchars($rown['url']) ?>.html" class="btn btn-secondary btn-icon">
                                    <i class="fa-solid fa-eye d-md-none d-block"></i>
                                    <span class="d-md-block d-none"> View</span>
                                </a>
                            </div>
                        </div>
                        <div class="dz-content">
                            <h5 class="title">
                                <a href="<?php echo htmlspecialchars($rown['url']) ?>.html">
                                    <?php echo htmlspecialchars($rown['title']) ?>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</section>


<?php
}
?>


        <?php include('footer.php'); ?>