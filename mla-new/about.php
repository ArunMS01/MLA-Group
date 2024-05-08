<?php include('header.php'); ?>

<style>
    /* Hero section styles */
    .hero {
        position: relative;
        background-image: url('http://localhost/MLA-Group/mla-new/images/background/bg7.jpg');
        /* Replace 'your-image.jpg' with your image URL */
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;

        align-items: center;
        color: white;

    }

    /* Gradient overlay */
    .gradient-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgb(0, 0, 0);
        background: linear-gradient(20deg, rgba(0, 0, 0, 1) 0%, rgba(255, 146, 37, 0.5327380952380952) 35%, rgba(255, 255, 255, 0) 100%);
        /* Adjust the opacity as needed */
    }

    /* Heading style */
    .hero h1 {
        font-size: 3rem;
        /* Adjust the font size as needed */
        margin-bottom: 20px;
        color: white;
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
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
    .pt-100 {
        padding-top: 100px;
    }

    .pb-70 {
        padding-bottom: 70px;
    }


    .what-we-do-title-inner {
        margin-bottom: 70px
    }

    .what-we-do-subtitle {
        color: #f55b14;
        font-size: 14px;
        font-weight: 600
    }

    .what-we-do-title h1 {
        font-size: 28px;
        margin-bottom: 10px;
        line-height: 1.5
    }

    .what-we-do-short-description:before {
        position: absolute;
        content: "";
        background: #909090;
        width: 1px;
        height: 100%;
        left: -30px;
        top: 0px
    }

    .what-we-do-short-description p {
        margin-bottom: 0
    }

    .what-we-do-inner-icon {
        color: #f55b14;
        font-size: 50px;
        margin-bottom: 30px
    }

    .what-we-do-button {
        color: #f55b14;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 14px
    }

    .what-we-do-button i {
        margin-left: 10px;
        font-size: 24px;
        font-weight: 600;
        position: relative;
        top: 3px
    }

    .what-we-do-single-inner {
        border: 1px solid #ddd;
        padding: 30px;
        margin-bottom: 30px;
        position: relative;
        z-index: 2;
        background: #f55b14;
        transition: all .4s ease
    }

    .what-we-do-single-inner:before {
        position: absolute;
        z-index: -1;
        content: "";
        width: 100%;
        height: 100%;
        background: #fff;
        top: 0;
        left: 0;
        transition: all .4s ease
    }

    .what-we-do-single-inner:hover:before {
        width: 0%
    }

    .what-we-do-single-inner:hover {
        border-color: #f55b14;
        color: #fff
    }

    .what-we-do-single-inner:hover .what-we-do-inner-icon,
    .what-we-do-single-inner:hover .what-we-do-inner-desc h2 span,
    .what-we-do-single-inner:hover .what-we-do-inner-desc a.what-we-do-button {
        color: #fff
    }

    .what-we-do-single-inner:hover .what-we-do-inner-desc h2 span:before {
        background: #0f1934
    }

    .what-we-do-single-inner:hover .what-we-do-button {
        color: #0f1934
    }

    .what-we-do-inner-desc h2 a {
        font-size: 20px;
        text-transform: capitalize
    }

    .what-we-do-inner-desc h2 span {
        color: #f55b14;
        position: relative
    }

    .what-we-do-inner-desc h2 span:before {
        position: absolute;
        content: "";
        width: 100%;
        height: 1px;
        background: #f55b14;
        bottom: -2px;
        left: 0
    }
</style>
<section class="what-we-do-crousel-sec  pb-70">
    <div class="container">
        <div class="row what-we-do-title-inner">
            <div class="col-md-6">
                <div class="what-we-do-title"><span class="what-we-do-subtitle">What We Do In here</span>
                    <h1>We provide world best industries &amp; factorial Business Solution</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="what-we-do-short-description">
                    <p>Nibh wisi utamur no vim, ex usu posidonium temporibus. Cu cum fierent vivendum, stet accusam ad qui, mei dicta fuisset salutandi ex. Cetero mandamus eos te. Ad his eripuit ullamcorper, ei fugit mentitum definitiones ius, dolorem dissentiunt sit id. Doctus diceret pro ad, labores adipisci cum ne.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="what-we-do-single-inner">
                    <div class="what-we-do-inner-icon"><i class="icofont-architecture-alt"></i></div>
                    <div class="what-we-do-inner-desc">
                        <h2><a href="/service-details"><span>Mechanical</span> Industry</a></h2>
                        <p>Lorem ipsum dolor sit amet, duo eu dicat elaboraret. Bonorum gubergren ne vis, qui id ponderum gloriatur definitiones.</p><a class="what-we-do-button" href="/service-details">Learn More <i class="icofont-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="what-we-do-single-inner">
                    <div class="what-we-do-inner-icon"><i class="icofont-laboratory"></i></div>
                    <div class="what-we-do-inner-desc">
                        <h2><a href="/service-details"><span>Chemical</span> Research</a></h2>
                        <p>Lorem ipsum dolor sit amet, duo eu dicat elaboraret. Bonorum gubergren ne vis, qui id ponderum gloriatur definitiones.</p><a class="what-we-do-button" href="/service-details">Learn More <i class="icofont-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="what-we-do-single-inner">
                    <div class="what-we-do-inner-icon"><i class="icofont-trolley"></i></div>
                    <div class="what-we-do-inner-desc">
                        <h2><a href="/service-details"><span>Agricultural</span> Process</a></h2>
                        <p>Lorem ipsum dolor sit amet, duo eu dicat elaboraret. Bonorum gubergren ne vis, qui id ponderum gloriatur definitiones.</p><a class="what-we-do-button" href="/service-details">Learn More <i class="icofont-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="what-we-do-single-inner">
                    <div class="what-we-do-inner-icon"><i class="icofont-engineer"></i></div>
                    <div class="what-we-do-inner-desc">
                        <h2><a href="/service-details"><span>Civil</span> Engineering</a></h2>
                        <p>Lorem ipsum dolor sit amet, duo eu dicat elaboraret. Bonorum gubergren ne vis, qui id ponderum gloriatur definitiones.</p><a class="what-we-do-button" href="/service-details">Learn More <i class="icofont-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="what-we-do-single-inner">
                    <div class="what-we-do-inner-icon"><i class="icofont-energy-oil"></i></div>
                    <div class="what-we-do-inner-desc">
                        <h2><a href="/service-details"><span>Oil &amp;</span> Gas Power</a></h2>
                        <p>Lorem ipsum dolor sit amet, duo eu dicat elaboraret. Bonorum gubergren ne vis, qui id ponderum gloriatur definitiones.</p><a class="what-we-do-button" href="/service-details">Learn More <i class="icofont-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="what-we-do-single-inner">
                    <div class="what-we-do-inner-icon"><i class="icofont-light-bulb"></i></div>
                    <div class="what-we-do-inner-desc">
                        <h2><a href="/service-details"><span>Power &amp;</span> Energy</a></h2>
                        <p>Lorem ipsum dolor sit amet, duo eu dicat elaboraret. Bonorum gubergren ne vis, qui id ponderum gloriatur definitiones.</p><a class="what-we-do-button" href="/service-details">Learn More <i class="icofont-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
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
<?php include('footer.php'); ?>