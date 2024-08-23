<?php
include('head.php');
?>
<title>Our Products</title>
<meta name="description" content="">
</head>

<body>
    <?php
    include('gtm.php')
    ?>
    <div class="page-wraper">

        <?php
        include('nav.php');
        ?>
        <style>
            .tab-content {
                display: none;
            }

            .tab-content.active {
                display: block;
            }

            .tab-btn.active {
                font-weight: bold;
            }

            .site-filters li.active a {
                color: #f2aa75 !important;
            }

            .shop-card-one ul li {
                width: 22%;
                display: flex;
                gap: 10px;
                border-bottom: 1px solid #ccc;
                padding-bottom: 10px;
                align-items: baseline;
            }

            .shop-card-one ul {
                display: flex;
                gap: 20px;
                /* justify-content: space-between; */
                flex-wrap: wrap;
            }

            .shop-card-one img {
                mix-blend-mode: multiply;
                height: 7rem;
                object-fit: contain;
                display: block;
                margin: 10px auto 10px auto;
                border: none;
                overflow: hidden;

            }

            @media screen and (max-width:768px) {
                .brandimg{
                   width: 164px;
        margin-bottom: 20px !important;
                }
                .shop-card-one ul li {
                    width: 100%;
                }
            }

            .shop-card-one {
                margin-top: 20px;
            }

            .btth {
                border-right: 2px solid #c4c4c4 !important;
            }

            .site-filters li {
                margin-right: 0px !important;
            }

            .filters li a {
                padding: 10px 20px;
                display: inline-block;
                color: #000000;
                text-decoration: none;
                transition: background-color 0.3s;
            }

            .content-inner-1 {
                padding-top: 50px;
                padding-bottom: 50px;
            }

            .content-inner {
                padding-top: 50px;
                padding-bottom: 50px;
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
            
            .ct2{
                    background: linear-gradient(45deg, #ffefbd, #ffffff00), url(https://t3.ftcdn.net/jpg/05/08/74/70/360_F_508747099_jWfjbngzFHhBP9L4AvkFExcmnx0L0eFU.jpg);
    /* background: url(./images/aboutus/banner-about-mla.png); */
    background-position: left !important;
    background-repeat: no-repeat !important;
            }
        </style>

        <section class="content-inner ct2 overflow-hidden bg-light">
            <div class="container">
                <div class="row about-style1 align-items-center zoom-in-up visible">
                    <div class="col-lg-12 text-center">
                        <div class="position-relative">
                            <div class="about-thumb-1 ">

                                <div class="section-head">
                                    <h2 class="title">Our Products </h2>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

      
<?php
include('admin/codes/db.php');
// Fetch brands from the database

 $query = "SELECT id, name, logo FROM brand";
$result = mysqli_query($db, $query);

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
    $result = mysqli_query($db, $query);

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
mysqli_close($db);

// Now $brands array contains all brands with their associated products
?>
           
<!--Recommend Section Start-->
<section class="content-inner-1 ">
<div class="container">
        <!--<h3 class="title text-center mb-4">RANGE OF PRODUCTS</h3>-->
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
            <div class="tab-content tabcontentntew" id="brand-<?php echo $brand['id']; ?>">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <img class="brandimg" style="display: block; margin: auto;" src="admin/codes/<?php echo htmlspecialchars($brand['logo']); ?>" class="mt-4 mb-4">
                    </div>
                    <div class="col-md-9">
                        <div class="row gx-xl-4 g-3">
                            <?php foreach ($brand['products'] as $product): ?>
                                <div class="col-md-3">
                                    <div class="widget widget_categories style-1">
                                        <ul>
                                            <li class="cat-item"><a href="<?php echo htmlspecialchars($product['url']).".html"; ?>"><?php echo htmlspecialchars($product['title']); ?></a></li>
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
            .mySwiperproductpage .f-list-markers {
                border-radius: 13px;
                /* width: 50%; */
                margin: auto;
                /* box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px; */
                padding: 25px 24px 25px 24px;
                background-color: #fff;
                border: 1px solid #FF9800;
            }

            .productstabs ul li {
                display: flex;
                gap: 10px;
                align-items: baseline;
            }

            .productstabs ul li a:hover {
                color: #FF9800;
            }

            .application-tab:before {
                opacity: 0.1;
            }
        </style>


        <!--<section class="content-inner zoom-in-up productstabs application-tab  pbt-100 overlay-black-light" style="background-image:url(images/appit.jpg); background-repeat: no-repeat; background-size: cover;background-position: top;">-->
        <!--    <div class="container">-->
        <!--        <div class="row about-style2 align-items-xl-center align-items-start wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">-->
        <!--            <div class="col-lg-5  mb-3">-->
        <!--                <div class="section-head">-->
        <!--                    <h2 class="title">Pharma Excipients</h2>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-lg-7 mb-3">-->
        <!--                <div class="about-content">-->
        <!--                    <div class="style-1">-->

        <!--                        <div class="pagination-align justify-content-end">-->
        <!--                            <div class="tranding-button-prev btn-prev">-->
        <!--                                <i class="flaticon flaticon-left-chevron"></i>-->
        <!--                            </div>-->
        <!--                            <div class="tranding-button-next btn-next">-->
        <!--                                <i class="flaticon flaticon-chevron"></i>-->
        <!--                            </div>-->
        <!--                        </div>-->



        <!--                    </div>-->

        <!--                </div>-->
        <!--            </div>-->

        <!--            <div class="col-lg-12">-->
        <!--                <div class="swiper mySwiperproductpage">-->
        <!--                    <div class="swiper-wrapper">-->
        <!--                        <div class="swiper-slide">-->
        <!--                            <ul class="b-list-markers f-list-markers">-->
        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/MAGNESIUM STEARATE (1).pdf"> Magnesium stearate</a>-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Magnesium_Stearate_IP_TDS.pdf">IP</a>/-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Magnesium_Sterate_BP_TDS.pdf">BP</a>/-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Magnesium_Sterate_USP_TDS.pdf">USP</a></span>-->

        <!--                                </li>-->
        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/CALCIUM CARBONATE (10).pdf">Calcium carbonate</a>-->

        <!--                                </li>-->
        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/ALUMINIUM STEARATE EP (16).pdf">Aluminium stearate ep</a>-->

        <!--                                </li>-->
        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/PURIFIED SILICIOUS EARTH (21).pdf">Purified silicious earth</a>-->

        <!--                                </li>-->
        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/ALUMINIUM MONOSTERATE (25).pdf">Aluminium monosterate</a>-->

        <!--                                </li>-->
        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/SODIUM  ALUMINIUM SILICATE (30).pdf">Sodium aluminium silicate</a>-->

        <!--                                </li>-->

        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                        <div class="swiper-slide">-->
        <!--                            <ul class="b-list-markers f-list-markers">-->
        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <span> <a href="MLA PDFs/CALCIUM STEARATE (2).pdf">Calcium stearate</a>-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Calcium_Stearate_IP_TDS.pdf">IP</a>/-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Calcium_Sterate_BP_TDS.pdf">BP</a>/-->
        <!--                                    <a href="download/pharmaceuticals_excipients/.pdf">USP</a></span>-->

        <!--                                </li>-->

        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <span><a href="MLA PDFs/ZINC OXIDE (6).pdf">Zinc oxide</a>-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Zinc_Oxide_IP_TDS.pdf">IP</a>/-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Zinc_Oxide_BP_TDS.pdf">BP</a>/-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Zinc_Oxide_USP_TDS.pdf">USP</a></span>-->

        <!--                                </li>-->
        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/PRECIPITATED CALCIUM CARBONATE (11).pdf">Precipitated calcium Carbonate</a><span>-->

        <!--                                </li>-->
        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/STARCH (17).pdf">Starch</a></span>-->

        <!--                                </li>-->

        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/NATURAL ALUMINUM SILICATE (22).pdf">Natural aluminum silicate</a></span>-->

        <!--                                </li>-->
        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/GLYCERYL MONO STERATE (26).pdf">Glyceryl mono sterate</a></span>-->

        <!--                                </li>-->

        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/SORBITAN MONOSTERATE (31).pdf">Sorbitan monosterate</a></span>-->

        <!--                                </li>-->

        <!--                            </ul>-->
        <!--                        </div>-->

        <!--                        <div class="swiper-slide">-->
        <!--                            <ul class="b-list-markers f-list-markers">-->
        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/ZINC STEARATE (3).pdf">Zinc stearate</a>-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Zinc_Sterate_IP_TDS.pdf">IP</a>/-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Zinc_Sterate_BP_TDS.pdf">BP</a>/-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Zinc_Sterate_USP_TDS.pdf">USP</a></span>-->

        <!--                                </li>-->

        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/TALC (7).pdf">Talc</a>-->
        <!--                                    <a href="download/pharmaceuticals-excipients/.pdf">IP</a>/-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Talc_BP_TDS.pdf">BP</a>/-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Talc_IP_TDS.pdf">USP</a></span>-->

        <!--                                </li>-->

        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/CALCIUM HYDROXIDE (12).pdf">Calcium hydroxide</a>-->

        <!--                                </li>-->
        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/BENTONITE (18).pdf">Bentonite</a>-->

        <!--                                </li>-->

        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/SYNTHETIC ALUMINUM SILICATE (23).pdf">Synthetic aluminum silicate</a>-->

        <!--                                </li>-->

        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/MAGNESIUM HYDROXIDE (27).pdf">Magnesium hydroxide</a>-->

        <!--                                </li>-->



        <!--                            </ul>-->
        <!--                        </div>-->

        <!--                        <div class="swiper-slide">-->
        <!--                            <ul class="b-list-markers f-list-markers">-->
        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/SODIUM STERATE (4).pdf">Sodium sterate</a>-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Sodium_Sterate_BP_TDS.pdf">BP</a>/-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Sodium_Sterate_USP_TDS.pdf">USP</a></span>-->

        <!--                                </li>-->

        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/KAOLIN  (8).pdf">Kaolin</a>-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Kaolin_Heavy_IP_TDS.pdf">Heavy-IP</a>/-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Kaolin_Heavy_BP_TDS.pdf">Heavy-BP</a>/-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Kaolin_Heavy_USP_TDS.pdf">Heavy-USP</a>-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Kaolin_Light_IP_TDS.pdf">Light-IP</a>/-->
        <!--                                    <a href="download/pharmaceuticals-excipients/Kaolin_Light_BP_TDS.pdf">Light-BP</a></span>-->

        <!--                                </li>-->

        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/ZINC CARBONATE (15).pdf">Zinc carbonate</a>-->

        <!--                                </li>-->

        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/BARIUM SULFATE (20).pdf">Barium sulfate</a>-->

        <!--                                </li>-->

        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/STEARIC ACID (24).pdf">Stearic acid</a>-->

        <!--                                </li>-->

        <!--                                <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/SILICON DI-OXIDE (28).pdf">Silicon di-oxide</a>-->

        <!--                                </li>-->

        <!--                            </ul>-->
        <!--                        </div>-->

        <!--                    </div>-->
        <!--                    <div class="swiper-pagination"></div>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--        </div>-->

        <!--    </div>-->

        <!--</section>-->





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



    </div>
    <?php include('footer.php') ?>