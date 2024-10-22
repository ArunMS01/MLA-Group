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
          $sql = "SELECT * FROM brand WHERE url = '$brandurl'";
          $result = mysqli_query($db, $sql);
      
          $description = '';
        //   $imageUrl = 'https://cdn.pixabay.com/photo/2023/06/03/17/15/ai-generated-8038116_1280.jpg'; // Default image
      $imageUrl = '';
          if ($result) {
              if ($row = mysqli_fetch_assoc($result)) {
                  $description = $row['description'];
                  $imageUrl = $row['featuredImage']; // Use the image URL from the database
              }
          }
      
      ?>
      
    


    <style>
        .ribbon-box {
                background-size: contain;
            background-image: linear-gradient(45deg, #ffb882, transparent), url(<?php echo $imageUrl?>);
    position: relative;
            
            /*padding: 40px;*/
            
            overflow: hidden;
        }

   

      

       .postion-and::before{
         content: '';
    position: absolute;
    width: 15px;
    border-radius: 0;
    top: 0px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    /*left: -44px;*/
    /* box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; */
    /*transform: rotate(9deg);*/
    height: 100%;
    z-index: 10000;
    background: #fd8428;
       }

        .text-content {
            margin: auto;
    width: 87%;
            color: #000;
            padding: 20px;
            position: relative;
            /*background: #eb8233;*/
        }
           .postion-and img{
               width:100%;
               position:relative;
               max-height:100vh;
           }
           .postion-and::after{
                content: '';
    position: absolute;
    /*width: 97px;*/
    border-radius: 0;
    bottom:0;
    
    left: 0;
    right:0;
    /* box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; */
    /*transform: rotate(9deg);*/
    width:100%;
    height:15px;
    z-index: 10000;
    background: #fd8428;
           }
        .postion-and{
            max-height:100%;
            /*overflow:hidden;*/
    /*border: 6px solid #fff;*/
    z-index: 1;
    position:relative;
 
        }
        .postion-block{
            position: relative;
        }

        @media (max-width: 768px) {
          .postion-and::before,
          .postion-and::after
          {
              display:none;
          }

            .postion-and {
                position: static;
            }
            .text-content {
                max-width: 100%;
            }
        }
        
        .Descriptionnew ul li::before {
    content: '\f00c';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    color: #fc8328;
    margin-right: 8px;
}
    </style>
<div class=" postion-block" style="background-color:#f3ebeb;">
   

    <div class="ribbon-box" >
        <!-- Image ribbon -->
        <div class="containersr">
        <!-- Text ribbon with extended width -->
       
        <div class="row content align-items-center">
           
            <div class="col-md-6  p-0 zoom-in-up">
                <div class="text-content">
                <h1>
               
                                               
                    <?php echo isset($_GET['url']) ? strtoupper(htmlspecialchars($_GET['url'], ENT_QUOTES, 'UTF-8')) : "Heading Text"; ?>
                </h1>
                <div class="Descriptionnew">
                    <?php echo isset($description) ? $description : ""; ?>
                
                </div>
            </div>
             </div>
            <div class="col-md-6 p-0">
                <div class="postion-and ">
        <img src="admin/codes/<?php echo htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8'); ?>" alt="Image">
    </div>
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
            
            .border-radiust{
               box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
               border-radius:15px;
            }
            .Description ul li{
                display:flex;
            }
            .Description ul li::before{
                 content: '\f00c'; /* Unicode for the Font Awesome check icon */
    font-family: 'Font Awesome 5 Free'; /* Ensure you're using the correct Font Awesome family */
    font-weight: 900; /* Font weight required for Font Awesome icons */
    color: #fc8328; /* Optional: Change the color to green or any other color */
    margin-right: 8px; /* Optional: Add some space between the icon and the text */
            }
            .Description ul{
                   margin-left: 2px;
            }
</style>
<section class="pt-100">
    <div class="container">
        <div class="row align-center">
           
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <!-- Output image URL with a fallback for safety -->
                <img class="border-radiust" src="admin/codes/<?php echo isset($descriptionImage) ? htmlspecialchars($descriptionImage, ENT_QUOTES, 'UTF-8') : ""; ?>" alt="Description Image">
            </div>
             <div class="col-md-6 wow fadeInUp Description" data-wow-delay="0.1s">
                <!-- Output HTML content directly -->
                <p><?php echo isset($longDescription) ? $longDescription : ""; ?></p>
                <a class="btn btn-secondary mt-2" href="contactus.php">Know More</a>
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
@media only screen and (max-width:1300px){
    .text-content{
        width:91%;
    }
}
.shop-card .dz-media{
    background:#e0e0e0;
}
            .FM6uVc {
                margin: auto;
                position: relative;
                max-width: 100%;
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
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-head style-1">
                <h2 class="title">Our Products</h2>
                </div>
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