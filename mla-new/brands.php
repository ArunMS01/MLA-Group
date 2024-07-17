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


        <section class="content-inner overflow-hidden bg-light" style="background: url('./images/aboutus/banner-about-mla.png');">
            <div class="container">
                <div class="row about-style1 align-items-center zoom-in-up visible">
                    <div class="col-lg-12 text-center">
                        <div class="position-relative">
                            <div class="about-thumb-1 ">

                                <div class="section-head">
                                    <h2 class="title"> <?php echo isset($_GET['url']) ? strtoupper($_GET['url']) : ""; ?> </h2>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>


        <style>
            .FM6uVc {
                margin: auto;
                position: relative;
                max-width: 302px;
                padding-bottom: 100%;
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
        </style>


        <section class="content-inner-1">
            <div class="container">
                <div class="row gx-xl-4 g-3 mb-xl-0 mb-md-0 mb-3">

                    <?php
                    require('admin/codes/db.php');

                    $brandurl = $_GET['url'];

                    if ($brandurl) {
                        $sql = "SELECT p.title, p.url, p.main_image
                                    FROM products AS p
                                    INNER JOIN brand AS b ON b.id = p.brand
                                    WHERE b.url = '$brandurl'";
                        $result = mysqli_query($db, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                                <div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-4 m-sm-b0 ">
                                    <div class="shop-card">
                                        <div class="dz-media">
                                            <div class="FM6uVc">
                                                <div class="ArOc1c">
                                                    <img src="admin/codes/<?php echo $row['main_image'] ?>" alt="image">
                                                </div>
                                            </div>

                                            <div class="shop-meta">
                                                <a href="<?php echo htmlspecialchars($row['url']) ?>.html" class="btn btn-secondary btn-icon">
                                                    <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                    <span class="d-md-block d-none"> View</span>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="dz-content">
                                            <h5 class="title">
                                                <a href="<?php echo htmlspecialchars($row['url']) ?>.html">
                                                    <?php echo htmlspecialchars($row['title']) ?>
                                                </a>
                                            </h5>


                                        </div>

                                    </div>
                                </div>

                    <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </section>




        <?php include('footer.php'); ?>