<?php include('header.php'); ?>

<style>
    /* Hero section styles */
    .hero {
        position: relative;
        background-image: url('./images/aboutus/banner-about-mla.png');
        /* Replace 'your-image.jpg' with your image URL */
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;

        align-items: center;
        

    }

    /* Gradient overlay */
    .gradient-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
       
    }

    /* Heading style */
    .hero h1 {
        font-size: 3rem;
        /* Adjust the font size as needed */
        margin-bottom: 20px;
        
    }

    /* Paragraph style */
    .hero p {
        font-size: 1.2rem;
        /* Adjust the font size as needed */
        max-width: 600px;
        /* Adjust the maximum width as needed */
        margin: 0 auto;
    }

    .hero .content {
        padding-left: 80px;
    }

    .pbt {
        padding-top: 100px;
        padding-bottom: 100px;
    }
</style>





<!-- Hero section -->
<section class="hero">
    <!-- Gradient overlay -->
    <div class="gradient-overlay"></div>

    <!-- Content -->
    <div class="content" style="z-index: 1;">
        <h1>About Us</h1>
        <p>From modest beginnings in 1975 when our first unit for the manufacturing of Aluminium Silicate was set up, MLA Group has grown from strength to strength over the years. We have been expanding and diversifying rapidly and today the group comprises four manufacturing units for various chemicals. We are the largest manufacturers of Aluminium/Calcium Silicates in India having complete vertical integration and unique product properties.</p>
    </div>
</section>


<style>
    /* Night sky background */
    .night-sky {
      background-color: #f0f0f0; /* Light gray background */
      position: relative;
      overflow: hidden;
    }
    .night-sky:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: radial-gradient(white 5%, transparent 5%);
      background-size: 20px 20px;
      z-index: 1;
    }
    /* Content styling */
    .night-sky .container {
      position: relative;
      z-index: 2;
    }
    .night-sky img {
      max-width: 100%;
      height: auto;
    }
    .img-box123{
  height: 30rem;
    }
    .img-box123 img{
      width: 100%;
      height: 100%;
      border-radius: 2%;
    }
  </style>
<section class="night-sky">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <!-- Image side -->
        <div class="img-box123">
        <img src="./images/aboutus/product range.jpeg" alt="Image">
        </div>
      </div>
      <div class="col-md-6">
        <!-- Text side -->
        <h2>Our Product Range</h2>
        <p>Our product range consists of various precipitated chemicals and functional fillers, both synthetic and naturally occurring processed minerals including Precipitated Silica, Hydrated Calcium Silicate, Aluminium Silicate, Zinc Stearate , Calcium Stearate , Calcium Sulphate, Zinc-oxide active/transparent, Levigated / Surface treated China Clays, Micronized Calcite, Dolomite, Talc etc. which find a variety of applications in industries such as rubber / other polymers, paints & coatings, insecticides / pesticides, pharmaceuticals, cosmetics, feedstuff and numerous other industries.</p>
      </div>
    </div>
  </div>
</section>



<style>
    .pt-100 {
        padding-top: 100px;
    }

    .pb-100 {
        padding-bottom: 100px;
    }

    .pb-50 {}

    .small-box {
        z-index: 1;
        top: 50%;
        padding-top: 34px;
        margin: auto;
        right: 0;
        left: 0;
        position: absolute;
        width: 90%;
        height: 90%;
        background: rgba(243, 243, 243, 1);
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        overflow: hidden;
        transform: translateY(-50%);
    }

    .big-box {
        position: relative;
        width: 100%;
        min-height: 301px;
        height: 100%;
        background: rgba(217, 217, 217, 1);
        border: 1px solid rgba(247, 134, 49, 1);
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        overflow: hidden;
    }

    .v20_82 {
        width: 46%;
        opacity: 1;
        text-align: center;
        position: absolute;
        top: 54%;
        left: 30%;
        overflow: hidden;
    }

    .v20_83 {
        width: 69px;
        color: rgba(52, 52, 52, 1);
        position: absolute;
        top: 53px;
        left: 5px;
        font-family: DM Sans;
        font-weight: Bold;
        font-size: 32px;
        opacity: 1;
        text-align: left;

        text-align: center;
    }

    .v20_84 {
        width: 54px;
        color: rgba(114, 114, 114, 1);
        position: absolute;
        top: 98px;
        left: 12px;
        font-family: Roboto;
        font-weight: Regular;
        font-size: 10px;
        opacity: 1;
        text-align: center;
    }

    /* }col-md-3
.v20_85 {
width: 44px;
height: 44px;
background: url(./images/v20_85.png);
background-repeat: no-repeat;
background-position: center center;
background-size: cover;
opacity: 1;
position: absolute;
top: 0px;
left: 17px;
overflow: hidden;
} */
    .imageiconbox {
        width: 100px;
        height: 100px;
    }

    .imageiconbox img {
        width: 100px;
        height: 100px;
        top: 8%;
        position: absolute;
        left: 29%;
    }

    .v20_69 {
        width: 109px;
        height: 108px;
        background: rgba(247, 134, 49, 1);
        opacity: 1;
        position: absolute;
        top: 64%;
        left: 0px;
        border-bottom-left-radius: 11px;
        overflow: hidden;
    }

    .v2344 {
        width: 200px;
        height: 10px;
        border-bottom: 1.25px solid #f78631;
        border-image: linear-gradient(0.49turn,
                rgba(243, 243, 243, 0),
                rgb(247, 134, 49),
                rgba(243, 243, 243, 0)) 1 / 1 / 0 stretch;
    }

    @media only screen and (max-width: 768px) {
        .big-box {
            min-height: 369px !important;
        }

        .imageiconbox img {
            top: 15%;

            left: 36%;
        }

        .v20_69 {
            top: 71%;
        }

        .gap-50 {
            gap: 50px;
        }
    }

    .postion09 {
        margin-top: -20px !important;
        background: white;
        z-index: 13;
    }
</style>


<section class="content-inner abyyt pbt-100">
    <div class="container">

        <style>
            .border-box {
                margin: auto;
                background: rgba(255, 255, 255, 1);
                border: 2px solid rgba(247, 134, 49, 1);
                border-top-left-radius: 21px;
                border-top-right-radius: 21px;
                border-bottom-left-radius: 21px;
                border-bottom-right-radius: 21px;
            }

            .border-box h2 {
                font-size: 24px;
                margin-top: 60px;
                margin-bottom: 0px;
                text-align: center;
            }

            .border-box .content {
                padding: 40px;
                text-align: center;
            }

            .border-box {
                position: relative;
                width: 83%;
                /* Adjust width as needed */
                height: auto;
                /* Adjust height as needed */
            }

            .v423_5 {
                z-index: -1;
                width: 111%;
                max-width: 365px;
                height: 160px;
                background: rgba(217, 217, 217, 1);
                opacity: 1;
                position: absolute;
                bottom: -12px;
                left: 50%;
                transform: translateX(-50%);
                border-radius: 21px;
                overflow: hidden;
            }

            .pbt-100 {
                padding: 50px 0px;
            }

            .v423_8 {
                width: 110px;
                height: 110px;
                background: rgba(247, 134, 49, 1);
                opacity: 1;
                position: absolute;
                top: -59px;
                left: 33%;
                border-radius: 50%;
            }

            .icon-image-box {
                left: 27px;
                position: absolute;
                width: 57px;
                height: 36px;
                top: 24px;
            }

            @media screen and (max-width: 768px) {
                .rowgap {
                    gap: 98px;
                }

                .v423_8 {
                    left: 33% !important;
                }

                .v423_5 {
                    width: 111%;
                    max-width: 456px;
                    bottom: -20px;
                }
            }
        </style>
     
    </div>
</section>


<style>
    /* Achievement Section 
============== */

.achievement-area {
	background-image: url(./images/achievement.jpg);
	height: 300px;
	background-size: cover;
	background-position: center;
	background-attachment: fixed;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	position: relative;
	z-index: 1;
}

.achievement-area.home2 {
	background-color: #020E28;
}

.fact-icon i:before {
	font-size: 50px;
	line-height: 35px;
	color: #FF5316;
	margin: 25px 0;
	display: inline-block;
}

.single-counter-box {
	text-align: center;
}

.single-counter-box .counter-number span {
	font-size: 60px;
	font-weight: 600;
	line-height: 1;
	color: #fff;
	margin: 10px 0;
}

.single-counter-box p.counter-number {
	font-size: 40px;
	color: #fff;
}

.single-counter-box h6 {
	color: #fff;
	font-weight: 500;
}
</style>
<section>
<div class="achievement-area">
    <div class="overlay-2"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box">
                    <div class="fact-icon"><i class="flaticon-engineer"></i></div>
                    <p class="counter-number"><span class="counter">1037</span></p>
                    <h6>Project Completed</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box">
                    <div class="fact-icon"><i class="flaticon-plumber"></i></div>
                    <p class="counter-number"><span class="counter">156</span></p>
                    <h6>Qualified Contractor</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box">
                    <div class="fact-icon"><i class="flaticon-tow-truck"></i></div>
                    <p class="counter-number"><span class="counter">750</span></p>
                    <h6>Work Order</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box">
                    <div class="fact-icon"><i class="flaticon-factory"></i></div>
                    <p class="counter-number"><span class="counter">30</span></p>
                    <h6>Worldwide Branches</h6>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<section>
<div class="section pt-100 pb-70">
            <div class="container">
                <div class="row rowgap">
                    <div class="col-md-4">
                        <div class="border-box">
                            <div class="v423_8" style="z-index: 1; outline-offset: 20px">
                                <div class="icon-image-box">
                                    <img src="./images/values-mla.png" alt="" srcset="" />
                                </div>
                            </div>
                            <div class="v423_8" style="
                          outline: 2px solid #f78631;
                          outline-offset: 20px;
                          z-index: -1;
                        "></div>
                            <h2 class="title">values</h2>
                            <div class="content">
                                orem ipsum dolor sit amet consectetur adipisicing elit.
                                Vel officia voluptate doloremque amet enim repudiandae
                                recusandae, corrupti, magnam facere voluptates, eius
                                dolores quas ipsum repellat iusto corporis possimus
                                totam odit?
                            </div>
                            <div class="v423_5"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border-box">
                            <div class="v423_8" style="z-index: 1; outline-offset: 20px">
                                <div class="icon-image-box">
                                    <img src="./images/vision-mla.png" alt="" srcset="" />
                                </div>
                            </div>
                            <div class="v423_8" style="
                          outline: 2px solid #f78631;
                          outline-offset: 20px;
                          z-index: -1;
                        "></div>
                            <h2 class="title">values</h2>
                            <div class="content">
                                orem ipsum dolor sit amet consectetur adipisicing elit.
                                Vel officia voluptate doloremque amet enim repudiandae
                                recusandae, corrupti, magnam facere voluptates, eius
                                dolores quas ipsum repellat iusto corporis possimus
                                totam odit?
                            </div>
                            <div class="v423_5"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border-box">
                            <div class="v423_8" style="z-index: 1; outline-offset: 20px">
                                <div class="icon-image-box">
                                    <img src="./images/mission-mla.png" alt="" srcset="" />
                                </div>
                            </div>
                            <div class="v423_8" style="
                          outline: 2px solid #f78631;
                          outline-offset: 20px;
                          z-index: -1;
                        "></div>
                            <h2 class="title">values</h2>
                            <div class="content">
                                orem ipsum dolor sit amet consectetur adipisicing elit.
                                Vel officia voluptate doloremque amet enim repudiandae
                                recusandae, corrupti, magnam facere voluptates, eius
                                dolores quas ipsum repellat iusto corporis possimus
                                totam odit?
                            </div>
                            <div class="v423_5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>




<style>
    /* Custom styling */
    .organization-section {
      background-image: url('./images/aboutus/map-text-background.png'); /* Replace with your background image path */
      background-size: cover;
      background-position: center;
      padding: 100px 0;
    }
    .organization-section .container {
      position: relative;
      z-index: 1;
    }
    .organization-section h2,
    .organization-section p {
      color: black;
    }
    .organization-section img {
      max-width: 100%;
      height: auto;
    }
  </style>




<section class="organization-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <!-- Image side -->
        <img src="./images/aboutus/map-mla.png" alt="Image"> <!-- Replace with your image path -->
      </div>
      <div class="col-md-6">
        <!-- Text side -->
        <h2>Our Footprint</h2>
        <p>We have an extensive marketing network with branch offices at Delhi and Calcutta and marketing associates in almost all industrial cities in India. Our sales and technical services personnel visit customers regularly to provide before and after sales services. The exports have been increasing sharply, mainly to neighbouring countries including Sri Lanka, Nepal, Bangladesh, and also to Middle East, South East Asia and Europe.</p>
      </div>
    </div>
  </div>
</section>












<style>
    .team-sec-image {
        background: #0f1934 none repeat scroll 0 0;
        padding: 110px 0;
        background-image: url(/img/background/why-us-bg.jpg);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        position: relative
    }

    .team-sec-image:before {
        position: absolute;
        content: "";
        background-color: #0f1934f2;
        top: 0;
        width: 100%;
        height: 100%
    }

    .team-sec {
        position: relative;
        z-index: 99;
        margin-top: -110px
    }

    .team-member {
        background: #0f1934 none repeat scroll 0 0;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
        transition: all .4s ease-in-out;
        z-index: 2;
        text-align: center;
        padding: 30px 20px;
        border-bottom: 2px solid #f55b14;
        border-left: 1px solid #f2f2f2;
        border-right: 1px solid #f2f2f2;
        border-top: 1px solid #f2f2f2
    }

    .team-member:before {
        position: absolute;
        content: "";
        height: 100%;
        width: 100%;
        top: 0;
        z-index: -1;
        left: 0;
        background: #fff;
        transition: all .4s ease-in-out 0s
    }

    .team-member:hover:before {
        height: 0px
    }

    .team-member:hover,
    .team-member:hover.team-member h2,
    .team-member:hover.team-member h3,
    .team-member:hover .team-social-profile li a {
        color: #fff
    }

    .team-member-thumb {
        width: 150px;
        height: 150px;
        border-radius: 100%;
        margin: 0 auto
    }

    .team-social-profile li {
        display: inline-block;
        margin: 0 6px
    }

    .team-header-sec .sec-title {
        text-align: center;
        margin: 0 150px 50px;
        color: #ddd;
        position: relative
    }

    .team-header-sec .sec-title h1 {
        color: #fff
    }

    .team-header-sec .border-shape:before {
        background: #f55b14
    }

    .team-header-sec .sec-title .border-shape {
        background: #fff
    }

    .team-member-thumb {
        position: relative;
        overflow: hidden;
        transition: all .4s ease-in-out 0s
    }

    .team-member:hover .team-overlay ul {
        visibility: visible;
        bottom: 0px
    }

    .team-overlay ul {
        position: absolute;
        width: 100%;
        bottom: -50%;
        background: #0f1934;
        text-align: left;
        padding-left: 10px;
        visibility: hidden;
        transition: all .4s ease-in-out 0s
    }

    .team-member img {
        width: 100%
    }

    .team-member h2 {
        font-size: 18px;
        font-weight: 700;
        margin-top: 15px;
        text-transform: uppercase;
        transition: all .4s ease-in-out 0s;
        color: #0f1934
    }

    .team-member h3 {
        font-size: 14px;
        text-transform: capitalize;
        transition: all .4s ease-in-out 0s;
        color: #f55b14
    }

    .team-overlay li a {
        display: inline-block;
        color: #0f1934;
        text-align: left;
        line-height: 30px;
        margin-right: 14px
    }

    .team-overlay li {
        display: inline-block;
        text-align: left;
        padding: 5px 0
    }

    .team-social li a {
        display: inline-block;
        text-align: left;
        line-height: 30px;
        margin-right: 2px;
        width: 30px;
        height: 30px;
        background: transparent;
        border-radius: 100%;
        text-align: center;
        border: 1px solid #0f1934
    }

    .team-social li {
        display: inline-block
    }

    .team-social li i {
        color: #0f1934
    }

    .team-social li a:hover {
        background: #0f1934
    }

    .team-social li a:hover i {
        color: #fff
    }

    .all-team .team-member {
        text-align: center;
        background: #0f1934;
        padding-bottom: 30px
    }

    .team-support-inner {
        margin-top: 200px
    }

    .team-support-inner span {
        text-transform: capitalize;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
        display: inline-block;
        position: relative;
        color: #f55b14;
        padding-left: 70px
    }

    .team-support-inner span:before {
        position: absolute;
        content: "";
        background: #f55b14;
        width: 60px;
        height: 1px;
        top: 14px;
        left: 0
    }

    .team-support-inner h1 {
        font-size: 36px;
        text-transform: capitalize;
        font-weight: 700;
        line-height: 55px
    }

    .team-support-inner ul li {
        display: inline-block;
        margin-right: 5px
    }

    .team-support-inner ul li a {
        background: #f55b14;
        color: #fff;
        display: inline-block;
        padding: 10px 18px;
        text-transform: capitalize;
        position: relative;
        z-index: 5;
        font-weight: 600;
        position: related;
        transition: all .4s ease
    }

    .team-support-inner ul li a i {
        margin-left: 10px;
        margin-right: 10px;
        color: #fff;
        font-size: 20px;
        font-weight: 700
    }

    .team-support-inner ul li:last-child a {
        background: #0f1934
    }
</style>



<section class="team-header-sec">
    <div class="team-sec-image">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title">
                        <h1>Expert Stuff</h1>
                        <p>Lorem ipsum dolor sit amet, lorem nibh lectus urna arcu, lorem erat semper, auctor suspendisse quisque molestie ut. Elit massa dui, leo enim magna. Cursus maecenas cubilia, ac nonummy, egestas mauris .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-sec pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-member">
                    <div class="team-member-thumb"><img src="./images/girl.png" alt="teamMember"></div>
                    <h2>Sweety</h2>
                    <h3>Virtual Assistant</h3>
                    <div class="team-social-profile">
                        <ul>
                            <li><a href="https://www.facebook.com/" target="_blank" class="facebook" rel="noreferrer"><i class="icofont-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/" target="_blank" class="twitter" rel="noreferrer"><i class="icofont-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/" target="_blank" class="linkedin" rel="noreferrer"><i class="icofont-linkedin"></i></a></li>
                            <li><a href="https://www.skype.com/" target="_blank" class="skype" rel="noreferrer"><i class="icofont-skype"></i></a></li>
                            <li><a href="https://www.pinterest.com/" target="_blank" class="pinterest" rel="noreferrer"><i class="icofont-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-member">
                    <div class="team-member-thumb"><img src="./images/men.png" alt="teamMember"></div>
                    <h2>Shiddik</h2>
                    <h3>Repair Technology</h3>
                    <div class="team-social-profile">
                        <ul>
                            <li><a href="https://www.facebook.com/" target="_blank" class="facebook" rel="noreferrer"><i class="icofont-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/" target="_blank" class="twitter" rel="noreferrer"><i class="icofont-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/" target="_blank" class="linkedin" rel="noreferrer"><i class="icofont-linkedin"></i></a></li>
                            <li><a href="https://www.skype.com/" target="_blank" class="skype" rel="noreferrer"><i class="icofont-skype"></i></a></li>
                            <li><a href="https://www.pinterest.com/" target="_blank" class="pinterest" rel="noreferrer"><i class="icofont-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-member">
                    <div class="team-member-thumb"><img src="./images/girl.png" alt="teamMember"></div>
                    <h2>Istiak</h2>
                    <h3>Mechanical Engineer</h3>
                    <div class="team-social-profile">
                        <ul>
                            <li><a href="https://www.facebook.com/" target="_blank" class="facebook" rel="noreferrer"><i class="icofont-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/" target="_blank" class="twitter" rel="noreferrer"><i class="icofont-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/" target="_blank" class="linkedin" rel="noreferrer"><i class="icofont-linkedin"></i></a></li>
                            <li><a href="https://www.skype.com/" target="_blank" class="skype" rel="noreferrer"><i class="icofont-skype"></i></a></li>
                            <li><a href="https://www.pinterest.com/" target="_blank" class="pinterest" rel="noreferrer"><i class="icofont-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-member">
                    <div class="team-member-thumb"><img src="./images/men.png" alt="teamMember"></div>
                    <h2>Michael</h2>
                    <h3>Refinery Petroleum</h3>
                    <div class="team-social-profile">
                        <ul>
                            <li><a href="https://www.facebook.com/" target="_blank" class="facebook" rel="noreferrer"><i class="icofont-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/" target="_blank" class="twitter" rel="noreferrer"><i class="icofont-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/" target="_blank" class="linkedin" rel="noreferrer"><i class="icofont-linkedin"></i></a></li>
                            <li><a href="https://www.skype.com/" target="_blank" class="skype" rel="noreferrer"><i class="icofont-skype"></i></a></li>
                            <li><a href="https://www.pinterest.com/" target="_blank" class="pinterest" rel="noreferrer"><i class="icofont-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .companies-media img{
        height: 99%;
    width: 45%;
     
    }
    @media only screen and (max-width: 768px) {
        .team-header-sec .sec-title {
  
    margin: 0 0px 50px !important;
 
}
.achievement-area {
    
    height: 646px !important;
   
}
.hero .content {
    padding-left: 18px;
}


    }
        
    
</style>
<section class="content-inner-1 logo-back overlay-white-middle companies border-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="p-lg-b0 p-md-b30 wow fadeInUp text-center mb-lg-20" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                  <div class="section-head style-1">
                    <h2 class="title">Certifications</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-inner">
              <div class="row gx-3 companies-inner">
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img src="https://www.mlagroup.com/img/certifications/dnv.png" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img src="https://www.mlagroup.com/img/certifications/02.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img src="https://www.mlagroup.com/img/certifications/03.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img src="https://www.mlagroup.com/img/certifications/04.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img src="https://www.mlagroup.com/img/certifications/05.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img src="https://www.mlagroup.com/img/certifications/06.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                  <a href="javascript:void(0);" class="companies-wrapper">
                    <div class="companies-media">
                      <img src="https://www.mlagroup.com/img/certifications/07.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
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
    .main-timeline {
  font-family: tahoma;
  padding: 20px 0;
  position: relative;
}

.main-timeline::before,
.main-timeline::after {
  content: "";
  height: 40px;
  width: 40px;
  background-color: #e7e7e7;
  border-radius: 50%;
  border: 10px solid #303334;
  transform: translatex(-50%);
  position: absolute;
  left: 50%;
  top: -15px;
  z-index: 2;
}

.main-timeline::after {
  top: auto;
  bottom: 15px;
}

.main-timeline .timeline {
  padding: 35px 0;
  margin-top: -30px;
  position: relative;
  z-index: 1;
}

.main-timeline .timeline::before,
.main-timeline .timeline::after {
  content: "";
  height: 100%;
  width: 50%;
  border-radius: 110px 0 0 110px;
  border: 15px solid #46b2bc;
  border-right: none;
  position: absolute;
  left: 0;
  top: 0;
  z-index: -1;
}

.main-timeline .timeline::after {
  height: calc(100% - 30px);
  width: calc(50% - 12px);
  border-color: #65c7d0;
  left: 12px;
  top: 15px;
}

.main-timeline .timeline-content {
  display: inline-block;
}

.main-timeline .timeline-content:hover {
  text-decoration: none;
}

.main-timeline .timeline-year {
  color: #65c7d0;
  font-size: 50px;
  font-weight: 600;
  display: inline-block;
  transform: translatey(-50%);
  position: absolute;
  top: 50%;
  left: 10%;
}

.main-timeline .timeline-icon {
    color: #65c7d0;
    font-size: 70px;
    display: inline-block;
    transform: translateY(-50%);
    position: absolute;
    left: 34%;
    top: 50%;
}

.main-timeline .content {

 margin-left: 1000px;
    color: #909090;
    width: 50%;
    padding: 21px;
    display: inline-block;
    float: inline-end;
}

.main-timeline .title {
  color: #65c7d0;
  font-size: 20px;
  font-weight: 600;
  text-transform: uppercase;
  margin: 0 0 5px 0;
}

.main-timeline .description {
  font-size: 16px;
  margin: 0;
}

.main-timeline .timeline:nth-child(even)::before {
  left: auto;
  right: 0;
  border-radius: 0 110px 110px 0;
  border: 15px solid red;
  border-left: none;
}

.main-timeline .timeline:nth-child(even)::after {
  left: auto;
  right: 12px;
  border-radius: 0 100px 100px 0;
  border: 15px solid green;
  border-left: none;
}
.main-timeline .timeline:nth-child(5n+1)::before {
  border-color: #f68b3a;
}

.main-timeline .timeline:nth-child(5n+1)::after {
  border-color: #343434;
}

.main-timeline .timeline:nth-child(5n+1) .timeline-icon {
  color: #65c7d0;
}

.main-timeline .timeline:nth-child(5n+1) .timeline-year {
  color: #65c7d0;
}

.main-timeline .timeline:nth-child(5n+1) .title {
  color: #65c7d0;
}

.main-timeline .timeline:nth-child(5n+2)::before {
  border-color: #f68b3a;
}

.main-timeline .timeline:nth-child(5n+2)::after {
  border-color: #343434;
}

.main-timeline .timeline:nth-child(5n+2) .timeline-icon {
  color: #EA3C14;
}

.main-timeline .timeline:nth-child(5n+2) .timeline-year {
  color: #EA3C14;
}

.main-timeline .timeline:nth-child(5n+2) .title {
  color: #EA3C14;
}

.main-timeline .timeline:nth-child(5n+3)::before {
   border-color: #f68b3a;
}

.main-timeline .timeline:nth-child(5n+3)::after {

  border-color: #343434;
}

.main-timeline .timeline:nth-child(5n+3) .timeline-icon
{
  color: #8CC63E;
}

.main-timeline .timeline:nth-child(5n+3) .timeline-year {
  color: #8CC63E;
}

.main-timeline .timeline:nth-child(5n+3) .title {
  color: #8CC63E;
}

.main-timeline .timeline:nth-child(5n+4)::before {
  border-color: #f68b3a;
}

.main-timeline .timeline:nth-child(5n+4)::after {
  border-color: #343434;
}

.main-timeline .timeline:nth-child(5n+4) .timeline-icon {
  color: #F99324;
}

.main-timeline .timeline:nth-child(5n+4) .timeline-year {
  color: #F99324;
}

.main-timeline .timeline:nth-child(5n+4) .title {
  color: #F99324;
}

.main-timeline .timeline:nth-child(5n+5)::before {
  border-color: #f68b3a;
}

.main-timeline .timeline:nth-child(5n+5)::after {
  border-color: #343434;
}

.main-timeline .timeline:nth-child(5n+5) .timeline-icon {
  color: #0071BD;
}

.main-timeline .timeline:nth-child(5n+5) .timeline-year {
  color: #0071BD;
}

.main-timeline .timeline:nth-child(5n+5) .title {
  color: #0071BD;
}


@media screen and (max-width:1200px){
    .main-timeline .timeline:after{ border-radius: 88px 0 0 88px; }
    .main-timeline .timeline:nth-child(even):after{ border-radius: 0 88px 88px 0; }
}
@media screen and (max-width:767px){
    .main-timeline .timeline{ margin-top: -19px; }
    .main-timeline .timeline:before {
        border-radius: 50px 0 0 50px;
        border-width: 10px;
    }
    .main-timeline .timeline:after {
        height: calc(100% - 18px);
        width: calc(50% - 9px);
        border-radius: 43px 0 0 43px;
        border-width:10px;
        top: 9px;
        left: 9px;
    }
    .main-timeline .timeline:nth-child(even):before {
        border-radius: 0 50px 50px 0;
        border-width: 10px;
    }
    .main-timeline .timeline:nth-child(even):after {
        height: calc(100% - 18px);
        width: calc(50% - 9px);
        border-radius: 0 43px 43px 0;
        border-width: 10px;
        top: 9px;
        right: 9px;
    }
    .main-timeline .timeline-icon{ font-size: 60px; }
    .main-timeline .timeline-year{ font-size: 40px; }
}
@media screen and (max-width:479px){
    .main-timeline .timeline-icon{
        font-size: 50px;
        transform:translateY(0);
        top: 25%;
        left: 10%;
    }
    .main-timeline .timeline-year{
        font-size: 25px;
        transform:translateY(0);
        top: 65%;
        left: 9%;
    }
    .main-timeline .content{
        width: 68%;
        
        margin-left: 10px;
    }
    .main-timeline .title{ font-size: 18px; }
    .main-timeline .timeline:nth-child(even) .timeline-icon{
        right: 10%;
    }
    .main-timeline .timeline:nth-child(even) .timeline-year{
        right: 9%;
    }
}
</style>

        <section>
        <div class="container">
        <div class="row">
              <div class="col-lg-12">
                <div class="p-lg-b0 p-md-b30 wow fadeInUp text-center mb-lg-20" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                  <div class="section-head style-1">
                    <h2 class="title">Our Timeline</h2>
                  </div>
                </div>
              </div>
            </div>
  <div class="row">
    <div class="col">
      <div class="main-timeline">
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2018</span>
            <div class="timeline-icon">
              <i class="fa fa-rocket" aria-hidden="true"></i>
            </div>
            <div class="content">
             
              <p class="description">
              First unit established for manufacturing of  White china clay by CMD, Mr ML Agarwal 

              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">1978</span>
            <div class="timeline-icon">
              <i class="fa fa-users" aria-hidden="true"></i>
            </div>
            <div class="content">
     
              <p class="description">
              2nd unit established for manufacturing of White clay and Aluminium Silicate 
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">1985</span>
            <div class="timeline-icon">
              <i class="fa fa-cog" aria-hidden="true"></i>
            </div>
            <div class="content">
             
              <p class="description">
              3rd unit started for manufacturing of Precipitated Silica
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">1992</span>
            <div class="timeline-icon">
              <i class="fa fa-heart" aria-hidden="true"></i>
            </div>
            <div class="content">
            
              <p class="description">
              4th unit started for manufacturing of Zinc Oxide and Metallic stearates 
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">1997</span>
            <div class="timeline-icon">
              <i class="fa fa-globe" aria-hidden="true"></i>
            </div>
            <div class="content">
             
              <p class="description">
              In house fabrication unit established for rapid expansion
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2017</span>
            <div class="timeline-icon">
              <i class="fa fa-apple" aria-hidden="true"></i>
            </div>
            <div class="content">
              <h3 class="title">1998</h3>
              <p class="description">
              Mr Sumit Agarwal, MTech- IIT Kanpur joins business full time, Zinc oxide Active and PVC stabilizers manufacturing started in unit 4              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2002</span>
            <div class="timeline-icon">
              <i class="fa fa-edit" aria-hidden="true"></i>
            </div>
            <div class="content">
            
              <p class="description">
              All units are ISO 9001 certified               </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2004</span>
            <div class="timeline-icon">
              <i class="fa fa-edit" aria-hidden="true"></i>
            </div>
            <div class="content">
            
              <p class="description">
              All units brought under the Group name of MLA Group of Industries                </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2006</span>
            <div class="timeline-icon">
              <i class="fa fa-edit" aria-hidden="true"></i>
            </div>
            <div class="content">
            
              <p class="description">
              ADC foaming agents unit established               </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2008</span>
            <div class="timeline-icon">
              <i class="fa fa-edit" aria-hidden="true"></i>
            </div>
            <div class="content">
            
              <p class="description">
              Unilever endorses and patronizes UNISIL NK-7, world's highest absorption silica              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2009</span>
            <div class="timeline-icon">
              <i class="fa fa-edit" aria-hidden="true"></i>
            </div>
            <div class="content">
            
              <p class="description">
              Manufacturing of Zinc Oxide American process and Arc furnace process started            </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2009</span>
            <div class="timeline-icon">
              <i class="fa fa-edit" aria-hidden="true"></i>
            </div>
            <div class="content">
            
              <p class="description">
              Manufacturing of Zinc Oxide American process and Arc furnace process started            </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2014</span>
            <div class="timeline-icon">
              <i class="fa fa-edit" aria-hidden="true"></i>
            </div>
            <div class="content">
            
              <p class="description">
              New unit for manufacturing of Active Zinc Oxide and Metallic stearates with 5 times capacity started        </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2016</span>
            <div class="timeline-icon">
              <i class="fa fa-edit" aria-hidden="true"></i>
            </div>
            <div class="content">
            
              <p class="description">
              Wax and ester unit established        </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2018</span>
            <div class="timeline-icon">
              <i class="fa fa-edit" aria-hidden="true"></i>
            </div>
            <div class="content">
            
              <p class="description">
              Pharma excipients unit established     </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2020</span>
            <div class="timeline-icon">
              <i class="fa fa-edit" aria-hidden="true"></i>
            </div>
            <div class="content">
            
              <p class="description">
              Mr Abhishek Kanodia, B Tech, IIT Kanpur ( ex Unilever) joins the family business as Factory Director    </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2022</span>
            <div class="timeline-icon">
              <i class="fa fa-edit" aria-hidden="true"></i>
            </div>
            <div class="content">
            
              <p class="description">
              All non mineral units brought under MLA Industries Pvt Ltd     </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2023</span>
            <div class="timeline-icon">
              <i class="fa fa-edit" aria-hidden="true"></i>
            </div>
            <div class="content">
            
              <p class="description">
              Company moves to Product Owner based model for all its eight product verticals     </p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>    
        </section>



        <section class="content-inner">
			<div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="p-lg-b0 p-md-b30 wow fadeInUp text-center mb-lg-20" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                  <div class="section-head style-1">
                    <h2 class="title">Community Involvement</h2>
                  </div>
                </div>
              </div>
            </div>
				<div class="row g-3 g-xl-4">
					
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
						<div class="dz-team style-1 m-md-b0 m-sm-b0 m-b30">
							<div class="dz-media">
								<a href="javascript:void(0);"><img src="images/team/pic2.jpg" alt=""></a>
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="our-team.html">Ivan Mathews</a></h5>
								<span>iOS Developer</span>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
						<div class="dz-team style-1 m-md-b0 m-sm-b0 m-b30">
							<div class="dz-media">
								<a href="javascript:void(0);"><img src="images/team/pic3.jpg" alt=""></a>
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="our-team.html">Macauley Herring </a></h5>
								<span>Customer Success</span>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
						<div class="dz-team style-1 m-md-b0 m-sm-b0 m-b30">
							<div class="dz-media">
								<a href="javascript:void(0);"><img src="images/team/pic4.jpg" alt=""></a>
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="our-team.html">Alya Levine</a></h5>
								<span>CTO </span>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
						<div class="dz-team style-1 m-md-b0 m-sm-b0 m-b30">
							<div class="dz-media">
								<a href="javascript:void(0);"><img src="images/team/pic5.jpg" alt=""></a>
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="our-team.html">Rose Hernandez </a></h5>
								<span>Backend Developer</span>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
						<div class="dz-team style-1 m-md-b0 m-sm-b0 m-b30">
							<div class="dz-media">
								<a href="javascript:void(0);"><img src="images/team/pic6.jpg" alt=""></a>
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="our-team.html">Elen Benitez </a></h5>
								<span>Designer</span>
							</div>
						</div>
					</div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
						<div class="dz-team style-1 m-md-b0 m-sm-b0 m-b30">
							<div class="dz-media">
								<a href="javascript:void(0);"><img src="images/team/pic6.jpg" alt=""></a>
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="our-team.html">Elen Benitez </a></h5>
								<span>Designer</span>
							</div>
						</div>
					</div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
						<div class="dz-team style-1 m-md-b0 m-sm-b0 m-b30">
							<div class="dz-media">
								<a href="javascript:void(0);"><img src="images/team/pic6.jpg" alt=""></a>
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="our-team.html">Elen Benitez </a></h5>
								<span>Designer</span>
							</div>
						</div>
					</div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
						<div class="dz-team style-1 m-md-b0 m-sm-b0 m-b30">
							<div class="dz-media">
								<a href="javascript:void(0);"><img src="images/team/pic6.jpg" alt=""></a>
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="our-team.html">Elen Benitez </a></h5>
								<span>Designer</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        <section class="content-inner overlay-white-dark overflow-hidden" style="background-image: url('images/background/bg1.jpg'); background-repeat: no-repeat; background-size: cover;">
			<div class="container">
				<div class="row about-style1 align-items-center">
					<div class="col-lg-6 m-b30">
						<div class="position-relative">
							<div class="about-thumb wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
								<img src="images/girl.png" alt="">
							</div>
							<div class="our-customer wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
								<h6>Our Satisfied User</h6>
								<ul>
									<li class="customer-image">
										<img src="images/testimonial/pic1.png" alt="">
									</li>
									<li class="customer-image">
										<img src="images/testimonial/pic2.png" alt="">
									</li>
									<li class="total-customer">
										<span class="font-14">+12K</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
						<div class="px-lg-4">
							<div class="section-head">
								<h2 class="title">What our clients say <br> about us</h2>
							</div>
							<div class="swiper swiper-five swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
								<div class="swiper-wrapper" id="swiper-wrapper-5410c06e1957510d23" aria-live="off" style="transform: translate3d(-1806px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 2" style="width: 582px; margin-right: 20px;">
										<div class="about-content">
											<p class="para-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
											<div class="about-bx-detail">
												<div class="about-bx-pic radius">
													<img src="images/testimonial/testimonial4.jpg" alt="">
												</div>
												<div>
													<h6 class="name">Joe Do</h6> 
													<span class="position">Undergraduate Student</span> 
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 2" style="width: 582px; margin-right: 20px;">
										<div class="about-content">
											<p class="para-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
											<div class="about-bx-detail">
												<div class="about-bx-pic radius">
													<img src="images/testimonial/testimonial4.jpg" alt="">
												</div>
												<div>
													<h6 class="name">Kenneth Fong</h6> 
													<span class="position">Postgraduate Student</span> 
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 2" style="width: 582px; margin-right: 20px;">
										<div class="about-content">
											<p class="para-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
											<div class="about-bx-detail">
												<div class="about-bx-pic radius">
													<img src="images/testimonial/testimonial4.jpg" alt="">
												</div>
												<div>
													<h6 class="name">Joe Do</h6> 
													<span class="position">Undergraduate Student</span> 
												</div>
											</div>
										</div>
									</div>
								<div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 2" style="width: 582px; margin-right: 20px;">
										<div class="about-content">
											<p class="para-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
											<div class="about-bx-detail">
												<div class="about-bx-pic radius">
													<img src="images/testimonial/testimonial4.jpg" alt="">
												</div>
												<div>
													<h6 class="name">Kenneth Fong</h6> 
													<span class="position">Postgraduate Student</span> 
												</div>
											</div>
										</div>
									</div></div>
								<div class="pagination-align">
									<div class="about-button-prev btn-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-5410c06e1957510d23">
										<i class="flaticon flaticon-left-chevron"></i>
									</div>
									<div class="about-button-next btn-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-5410c06e1957510d23">
										<i class="flaticon flaticon-chevron"></i>
									</div>
								</div>
							<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php include('footer.php'); ?>