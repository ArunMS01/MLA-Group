
        <!-- Header -->
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

                .logo-header img {
                height: 64px;

            }

            .site-header .main-bar {
                background: #f4f4f4 !important;


            }

            .borderlfyfyr {
            position: relative;
        }

        .borderlfyfyr::after {
            position: absolute;
            content: "";
            height: 23px;
            border-right: 1px solid #f2aa75;
            right: -22px;
        }
 .sub-menu li {
    position: relative;
    overflow: hidden; /* Ensure the pseudo-element is contained within the list item */
}

.sub-menu li a.cpappp {
    display: block;
    padding:15px !important;
    position: relative;
    border-bottom:1px solid #f58a3a;
    background-color: white;
    color: black; /* Default text color */
    transition: color 0.4 ease;
    z-index: 1;
}

.sub-menu li a.cpappp:before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -100%;
    width: 100%;
    height: 100%;
    background-color: #f58a3a;
    transition: bottom  0.4 ease;
    z-index: 0;
}

.sub-menu li:hover a.cpappp:before {
    bottom: 0;
}

.sub-menu li:hover a.cpappp {
    color: white; /* Change text color on hover */
}

.sub-menu li a.cpappp span {
    position: relative;
    z-index: 2; /* Ensure the span text is above the background */
    color: inherit; /* Inherit color from the parent */
}

.sub-menu li:hover a.cpappp span {
    color: white; /* Ensure span text remains white on hover */
}



            </style>
        <header class="site-header mo-left header border-bottom">
            <!-- Main Header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix">
                    <div class="container-fluid clearfix">
                        <!-- Website Logo -->
                        <div class="logo-header logo-dark me-md-5">
                            <a href="/"><img src="images/logo-MLA.png" alt="logo"></a>
                        </div>

                        <!-- Nav Toggle Button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>



                        <!-- Main Nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <div class="logo-header">
                                <a href="/"><img src="images/logo-MLA.png" alt="/"></a>
                            </div>
                            <ul class="nav navbar-nav dark-nav">
                                <li class="has-mega-menu ">
                                    <a  href="/"><span class="bleft borderlfyfyr">Home</span></a>

                                </li>

                                <li class="has-mega-menu ">
                                    <a  href="about.php"><span class="bleft borderlfyfyr">About Us</span></a>

                                </li>

                                <li class="has-mega-menu ">
                                    <a  href="r-and-d.php"><span class="bleft borderlfyfyr">R & D</span></a>

                                </li>

                                <li class="has-mega-menu ">
                                    <a  href="qc.php"><span class="bleft borderlfyfyr">quality</span></a>

                                </li>

                                <li class="has-mega-menu ">
                                    <a  href="manufacturing.php"><span  class="bleft borderlfyfyr">Manufacturing</span></a>

                                </li>





                                <li class="has-mega-menu">
                                    <!-- <a  href="#"><span class="bleft borderlfyfyr">Our Services</span></a> -->
                                    <!--<div class="mega-menu shop-menu">-->
                                    <!--	<div class="row">-->
                                    <!--		<div class="col-lg-12 col-md-12 col-sm-12">-->
                                    <!--			<div class="row">-->
                                    <!--				<div class="col-md-4 col-sm-6 col-6">-->
                                    <!--					<a href="javascript:;" class="menu-title">Shop Structure</a>-->
                                    <!--					<ul>-->
                                    <!--						<li><a href="shop-standard.html">Shop Standard</a></li>-->
                                    <!--						<li><a href="shop-list.html">Shop List</a></li>-->
                                    <!--						<li><a href="shop-with-category.html">Shop With Category</a>-->
                                    <!--						</li>-->
                                    <!--						<li><a href="shop-filters-top-bar.html">Shop Filters Top-->
                                    <!--								Bar</a></li>-->
                                    <!--						<li><a href="shop-sidebar.html">Shop Sidebar</a></li>-->
                                    <!--						<li><a href="shop-style-1.html">Shop Style 1</a></li>-->
                                    <!--					</ul>-->
                                    <!--					<a href="javascript:;" class="menu-title">Product Structure</a>-->
                                    <!--					<ul>-->
                                    <!--						<li><a href="product-default.html">Default</a></li>-->
                                    <!--						<li><a href="product-thumbnail.html">Thumbnail</a></li>-->
                                    <!--					</ul>-->
                                    <!--				</div>-->
                                    <!--				<div class="col-md-3 col-sm-6 col-12">-->
                                    <!--					<a href="javascript:;" class="menu-title">Shop Pages</a>-->
                                    <!--					<ul>-->
                                    <!--						<li><a href="shop-wishlist.html">Wishlist</a></li>-->
                                    <!--						<li><a href="shop-cart.html">Cart</a></li>-->
                                    <!--						<li><a href="shop-checkout.html">Checkout</a></li>-->
                                    <!--						<li><a href="shop-order-tracking.html">Order Tracking</a>-->
                                    <!--						</li>-->
                                    <!--						<li><a href="shop-my-account.html">My Account</a></li>-->
                                    <!--						<li><a href="shop-registration.html">Registration</a></li>-->
                                    <!--					</ul>-->
                                    <!--				</div>-->
                                    <!--				<div class="col-md-5 col-sm-4 col-6 d-none d-md-block">-->
                                    <!--					<div class="adv-media"><img src="images/adv-1.png" alt="/">-->
                                    <!--					</div>-->
                                    <!--				</div>-->
                                    <!--			</div>-->
                                    <!--			<div class="row">-->
                                    <!--				<div class="col-md-12">-->
                                    <!--					<div class="month-deal">-->
                                    <!--						<div>-->
                                    <!--							<h3>Deal of the month</h3>-->
                                    <!--							<p class="mb-0">Yes! Send me exclusive offers,-->
                                    <!--								personalised, and unique gift ideas, tips for-->
                                    <!--								shopping on MoonCart <a href="shop-standard.html"-->
                                    <!--									class="dz-link-2">View All Products</a></p>-->
                                    <!--						</div>-->
                                    <!--						<div class="sale-countdown">-->
                                    <!--							<div class="countdown text-center">-->
                                    <!--								<div class="date"><span-->
                                    <!--										class="time days text-primary"></span>-->
                                    <!--									<span class="work-time">Days</span>-->
                                    <!--								</div>-->
                                    <!--								<div class="date"><span-->
                                    <!--										class="time hours text-primary"></span>-->
                                    <!--									<span class="work-time">Hours</span>-->
                                    <!--								</div>-->
                                    <!--								<div class="date"><span-->
                                    <!--										class="time mins text-primary"></span>-->
                                    <!--									<span class="work-time">Minutess</span>-->
                                    <!--								</div>-->
                                    <!--								<div class="date"><span-->
                                    <!--										class="time secs text-primary"></span>-->
                                    <!--									<span class="work-time">Second</span>-->
                                    <!--								</div>-->
                                    <!--							</div>-->
                                    <!--						</div>-->
                                    <!--					</div>-->
                                    <!--				</div>-->
                                    <!--			</div>-->
                                    <!--		</div>-->
                                    <!--	</div>-->
                                    <!--</div>-->
                                </li>
                                <li class="sub-menu sub-menu-down"><a href="our-products.php"><span class="bleft borderlfyfyr">Products</span></a>
								<ul class="sub-menu">
                                    <?php
                                    require('admin/codes/db.php');
                                    $sql = "SELECT id, name, logo,description,url FROM brand ORDER BY seq ASC";
                                    $resutl = mysqli_query($db, $sql);
                                    if($resutl){
                                        while($row = mysqli_fetch_assoc($resutl)){
                                    ?>
									<li><a class="cpappp" href="brands.php?url=<?php echo $row['url']?>">
									    
				<?php
			
if ($row['name'] == 'Uniflow: Metallic Stearates') {
   
    echo "<span style='text-transform: uppercase;'>UNIFLOW: METALLIC STEARATES</span>";
}
if ($row['name'] == 'Unicell: Foaming Agents') {
    echo "<span style='text-transform: uppercase;'>UNICELL: FOAMING AGENTS</span>";
}
if ($row['name'] == 'Unistab: PVC Heat Stabilizers') {
    echo "<span style='text-transform: uppercase;'>UNISTAB: PVC HEAT STABILIZERS</span>";
}
if ($row['name'] == 'Zincosil:  Active Zinc Oxide') {
    echo "<span style='text-transform: uppercase;'>ZINCOSIL: ACTIVE ZINC OXIDE</span>";
}
if ($row['name'] == 'Tulsi: Micronized Mineral Fillers / Extenders') {
    echo "<span style='text-transform: uppercase;'>TULSI: MICRONIZED MINERAL FILLERS / EXTENDERS</span>";
}
if ($row['name'] == 'Unilub: Plastic Lubricants') {
    echo "<span style='text-transform: uppercase;'>UNILUB: PLASTIC LUBRICANTS</span>";
}
if ($row['name'] == 'Unisil: PPT Silica and Silicates') {
    echo "<span style='text-transform: uppercase;'>UNISIL: PPT SILICA AND SILICATES</span>";
}
if ($row['name'] == 'Pharma-Excipients') {
    echo "<span style='text-transform: uppercase;'>PHARMA-EXCIPIENTS</span>";
}
?>




									    
									</a></li>

                                    <?php
                                        }
                                    }
                                    ?>
									
								</ul>
							</li>
                                <!--<li class="has-mega-menu"><a  href="our-products.php"><span class="bleft borderlfyfyr">Products</span></a>-->

                                <!--</li>-->

                                <li><a  href="contactus.php">Contact Us</a></li>
                            </ul>
                            <div class="dz-social-icon">
                                <ul>
                                    <li><a class="fab fa-facebook-f" target="_blank" href="javascript:void(0);"></a>
                                    </li>
                                    <li><a class="fab fa-twitter" target="_blank" href="javascript:void(0);"></a></li>
                                    <li><a class="fab fa-linkedin-in" target="_blank"
                                            href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
                                    <li><a class="fab fa-instagram" target="_blank" href="javascript:void(0);"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Header End -->


            <!-- SearchBar -->
            <div class="dz-search-area dz-offcanvas offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    &times;
                </button>

            </div>
            <!-- SearchBar -->

            <!-- Sidebar cart -->

            <!-- Sidebar cart -->
        </header>
        <!-- Header End -->