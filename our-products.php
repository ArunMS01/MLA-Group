<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
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
                    background: linear-gradient(45deg, #ffb882, #ffffff00), url(https://t3.ftcdn.net/jpg/05/08/74/70/360_F_508747099_jWfjbngzFHhBP9L4AvkFExcmnx0L0eFU.jpg);
    /* background: url(./images/aboutus/banner-about-mla.png); */
    background-position: left !important;
    background-repeat: no-repeat !important;
            }
            
            .breadcrumb-row li a{
                font-size:20px;
            }
            .breadcrumb-row ul .breadcrumb-item + .breadcrumb-item::before{
                font-size:20px;
            }
        </style>

        <section class="content-inner ct2 overflow-hidden bg-light">
            <div class="container">
                <div class="row about-style1 align-items-center zoom-in-up visible">
                    <div class="col-lg-12 text-center">
                        <div class="position-relative">
                            <div class="about-thumb-1 ">

                                <div class="section-head">
                                    <h1 class="title">Our Products </h1>
                                    <!--<p>Mla</p>-->
                                    <div class="d-sm-flex justify-content-center container-fluid py-new">
    <nav aria-label="breadcrumb" class="breadcrumb-row">
        <ul class="breadcrumb mb-0">
            <li class="breadcrumb-item col-or"> <a style="color:#FE8F34" href="/">Home</a> </li>
            <li class="breadcrumb-item col-or"> <a style="color:#000" href="#">Our Products </a> </li>
           
        </ul>
    </nav>
</div>
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

 $query = "SELECT id, name, logo,description,url FROM brand ORDER BY seq ASC";
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
// mysqli_close($db);

// Now $brands array contains all brands with their associated products
?>


<?php
function truncateText($text, $charLimit = 180) {
    // Check if the text exceeds the character limit
    if (strlen($text) > $charLimit) {
        // Return the truncated text with ellipsis
        return substr($text, 0, $charLimit) . '...';
    } else {
        // Return the original text if it's within the character limit
        return $text;
    }
}
?>
           
<!--Recommend Section Start-->


    <style>
              .teamWrapper {
                /*margin-top: 50px;*/
              }

              .teamGrid {
    display: grid;
    grid-template-columns: 30% 30% 30%;
    column-gap: 1.5%;
    justify-content: space-around;
  
}

              .avatar {
                margin-top: 25px;
    
                text-align: center;
              }

           

              .avatar>img {
               width: 200px;
    margin: auto;
    height: 99px;
    object-fit: contain !important;
    /* border-radius: 50%; */
    border: 1px solid rgb(170 170 173 / 1);
    box-shadow: 0px 3px 10px 3px rgb(170 170 173 / 0.5);
}
              

              .teamcolinner {
                position: relative;
                border: 1px dashed #ddd;
                min-height: 100px;
                background: #fff;
                z-index: 9;
                padding: 30px;
                min-height:28rem;
              }

              .teamcol {
                padding: 15px;
                background: #f4f4f4;
                border-radius: 10px;
                position: relative;
                transition: transform 1s ease-in-out;
              }

              .teamcol:hover {
                transform: translateY(-10px);
                box-shadow: 0px 3px 10px 3px rgb(170 170 173 / 0.5);
                transition: transform 1s ease-in-out;
              }

              .teamcol:before {
                content: "";
                width: 50%;
                height: 50%;
                position: absolute;
                right: 0;
                top: 0;
                background: linear-gradient(145deg, #f58a3a, #f58a3a);
                border-top-right-radius: 10px;
                transition: width 1s ease-in-out;
              }

              .teamcol:after {
                content: "";
                width: 50%;
                height: 50%;
                position: absolute;
                left: 0;
                bottom: 0;
                background: -webkit-linear-gradient(#343434, #424242);
                border-bottom-left-radius: 10px;
                transition: width 1s ease-in-out;
              }

              .teamcol:hover::before,
              .teamcol:hover::after {
                width: 100%;
                transition: width 1s ease-in-out;
              }
              
              
              
               .teamcolss {
                padding: 15px;
                background: #fff;
                border-radius: 10px;
                position: relative;
                transition: transform 1s ease-in-out;
              }

              

              .teamcolss:before {
                content: "";
                width: 50%;
                height: 50%;
                position: absolute;
                right: 0;
                top: 0;
                background: linear-gradient(145deg, #f58a3a, #f58a3a);
                border-top-right-radius: 10px;
                transition: width 1s ease-in-out;
              }

              .teamcolss:after {
                content: "";
                width: 50%;
                height: 50%;
                position: absolute;
                left: 0;
                bottom: 0;
                background: -webkit-linear-gradient(#343434, #424242);
                border-bottom-left-radius: 10px;
                transition: width 1s ease-in-out;
              }

             

              .member-name {
                  text-align:center;
                margin-top: 20px;
              }
              .member-name h2:nth-of-type(1) {
    text-transform: uppercase;
}
              .member-name h2{
                  margin-bottom:0;
                  font-size:22px;
              }

              .member-info {
                   text-align: center;
    margin-top: 10px;
              }

              .social-listing {
                align-items: center;
                justify-content: center;
                display: flex;
                list-style: none;
                padding: 0;
              }

              .social-listing>li {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 30px;
                height: 30px;
                background: #f4f5f7;
                border-radius: 50%;
                margin: 5px;
              }
              
              .hideerm{
                  display:none;
              }
              
              #showmore{
                  text-align: center;
                display: inline-block;
                color: #fff;
                background: rgba(247, 134, 49, 1);
                padding: 10px;
                border-radius: 5px;
                cursor:pointer;
                        }
              
              .mt-2222{
                  margin-top:50px;
              }
              .pb-100{
              padding-bottom: 50px;
              }
              .btn-primary{
                background: #f58a3a;
                border-radius: 10px;
              }
              .btn.btn-primary:hover{
                background: #000;
              }
              .containerssss{
                padding: 20px;
              }

              /* Responsive Layout */
@media (max-width: 1024px) {
    .teamGrid {
        grid-template-columns: 45% 45%;
        column-gap: 5%;
    }
}

@media (max-width: 768px) {
    .teamGrid {
        grid-template-columns: 100%;
    }
    .mt-2222 {
    margin-top: 30px;
}
.containerssss{
padding: 1px;
}
}



            </style>
<section>
<div class=" pb-100 container">


<div class="teamWrapper">
        <div class="containerssss">
            <div class="teamGrid">
                <?php foreach ($brands as $brand): ?>
                    <div class="colmun mbcolteam mt-2222 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar">
                                    <img src="admin/codes/<?php echo $brand['logo']; ?>" alt="<?php echo $brand['name']; ?>">
                                </div>
                                <div class="member-name">
                                    <!--<h2 ><?php echo $brand['name']; ?></h2>-->
                                    <?php
                                    if($brand['name'] == 'Uniflow: Metallic Stearates'){
                                        echo "<h2>Uniflow</h2><h2>Metallic Stearates</h2>";
                                    }
                                    if($brand['name'] == 'Unicell: Foaming Agents'){
                                        echo "<h2>Unicell</h2><h2>Foaming Agents</h2>";
                                    }
                                    if($brand['name'] == 'Unistab: PVC Heat Stabilizers'){
                                        echo "<h2>Unistab </h2><h2>PVC Heat Stabilizers</h2>";
                                    }
                                    if($brand['name'] == 'Zincosil:  Active Zinc Oxide'){
                                        echo "<h2>Zincosil</h2><h2>Active Zinc Oxide</h2>";
                                    }
                                    if($brand['name'] == 'Tulsi: Micronized Mineral Fillers / Extenders'){
                                        echo "<h2>Tulsi</h2><h2>Micronized Mineral Fillers / Extenders</h2>";
                                    }
                                    if($brand['name'] == 'Unilub: Plastic Lubricants'){
                                        echo "<h2>Unilub</h2><h2>Plastic Lubricants</h2>";
                                    }
                                    if($brand['name'] == 'Unisil: PPT Silica and Silicates'){
                                        echo "<h2>Unisil</h2><h2>PPT Silica and Silicates</h2>";
                                    }
                                    if($brand['name'] == 'Pharma-Excipients'){
                                        echo "<h2>Pharma</h2><h2>Excipients</h2>";
                                    }
                                    ?>
                                </div>
                                <div class="member-info">
                                    <?php
                                     if($brand['name'] == 'Tulsi: Micronized Mineral Fillers / Extenders'){
                                         
                                     
                                    ?>
                                    <p >
                                    <?php echo truncateText($brand['description'], 90); ?>
                                    </p>
                                    <?php
                                    }
                                    else{
                                    ?>
                                     <p >
                                     <?php echo truncateText($brand['description'], 120); ?>
                                      </p>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="member-social">
                                    <p class="text-center" style="margin-bottom:0">
                                        <a href="brands?url=<?php echo $brand['url']; ?>" class="badge  badge-primary  read-more-btn text-center">
                                            Read More
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

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