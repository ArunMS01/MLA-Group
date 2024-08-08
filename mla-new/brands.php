<?php
include('head.php');
?>
<title>MLA</title>
<meta name="description" content="">
</head>

<body>
    <?php
    include('gtm.php')
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
                                     $brandurl = $_GET['url'];

                    if ($brandurl) {
    ?>
        <section class="content-inner overflow-hidden bg-light bannernew" style="background: linear-gradient(97deg, black, transparent), url('https://cdn.pixabay.com/photo/2023/06/03/17/15/ai-generated-8038116_1280.jpg'); background-repeat:no-repeat; background-size:cover; background-position: center;">
            <div class="container">
                <div class="row about-style1 align-items-center zoom-in-up visible">
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <div class="about-thumb-1 ">

                                <div class="section-head">
                                    <?php
                                   
                                        $sql = "SELECT p.title, p.url, p.main_image, b.description
                                    FROM products AS p
                                    INNER JOIN brand AS b ON b.id = p.brand
                                    WHERE b.url = '$brandurl'";
                        $result = mysqli_query($db, $sql);
                        
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $description = $row['description'];
                            }
                        }
                                    ?>
                                    <h2 class="title"> <?php echo isset($_GET['url']) ? strtoupper($_GET['url']) : ""; ?> </h2>
                                    <p><?php echo isset($description) ? $description : ""  ;?></p>
                                  
                                </div>

                            </div>

                        </div>
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
                <div class="row gx-xl-4 g-3 mb-xl-0 mb-md-0 mb-3">

                    <?php
                 
                    // print_r($result);
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