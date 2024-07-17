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

        <?php
        include('nav.php');
        ?>

        <style>
            .radius img {
                border-radius: 2%;
                height: auto;
                display: block;
                margin-left: auto;
                margin-right: 0;
                width: 88%;
                object-fit: cover;
            }

            .content-inner-1 {
                padding-top: 47px;
                padding-bottom: 47px;
            }

            .content-inner {
                padding-top: 50px;
                padding-bottom: 35px;
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

        <section class="content-inner overflow-hidden bg-light" style="background: url('./images/aboutus/banner-about-mla.png');">
            <div class="container">
                <div class="row about-style1 align-items-center zoom-in-up">
                    <div class="col-lg-6 m-b30 ">
                        <div class="position-relative">
                            <div class="about-thumb-1 ">

                                <div class="section-head">
                                    <h2 class="title">Quality Control </h2>
                                </div>
                                <div class="content">
                                    <p>
                                        All our manufacturing units are ISO 9001:2015 certified by DNV, Netherlands and TUV-R, Germany. Our QA system strives to achieve near-zero batch to batch variation. Tolerance limits are narrow and all non-conformities are strictly deal and corrective actions initiated. Quality Assurance Certificate is provided to customers to ensure conformance to their requirement.

                                    </p>

                                    <p>
                                        We follow three tier quality system and have in-house equipments like AAS Machine, Particle Size Analyzer, Surface Area Analyzer etc and work towards continuous improvement by utilizing feedback, audits, and the latest technologies to enhance QC practices.
                                    </p>

                                    <p>Through our robust QC system, we strive to exceed customer expectations and contribute to a safer, more reliable chemical industry.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 m-b30 ">
                        <!-- <img style="border-radius:15px" src=""> -->
                        <div class="px-lg-4">

                            <div class="swiper swiper-five swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                <div class="swiper-wrapper" id="swiper-wrapper-f6f20a1c51d9b355" aria-live="off" style="transform: translate3d(-1204px, 0px, 0px); transition-duration: 300ms;">
                                    <div class="swiper-slide">
                                        <div class="about-content">
                                            <div class="about-bx-pic radius">
                                                <img src="images/lab3.png" alt="">
                                            </div>
                                            <div class="about-bx-detail">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="about-content">
                                            <div class="about-bx-pic radius">
                                                <img src="images/lab2.png" alt="">
                                            </div>
                                            <div class="about-bx-detail">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="about-content">
                                            <div class="about-bx-pic radius">
                                                <img src="images/lab4.png" alt="">
                                            </div>
                                            <div class="about-bx-detail">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more swiper-slide items for additional images -->
                                </div>
                                <!-- <div class="pagination-align">
                                    <div class="about-button-prev btn-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-f6f20a1c51d9b355">
                                        <i class="flaticon flaticon-left-chevron"></i>
                                    </div>
                                    <div class="about-button-next btn-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-f6f20a1c51d9b355">
                                        <i class="flaticon flaticon-chevron"></i>
                                    </div>
                                </div> -->
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>






        <style>
            :root {}



            ul.infoGraphic {
                font-size: var(--font-size);
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            ul.infoGraphic li {
                position: relative;
                width: 100%;
                max-width: 33%;
                background: #f5f8f7;
                border-radius: 0.5em;
                padding: 0.5em;
                z-index: 1;
                transition: all 0.2s;
                cursor: pointer;
            }

            ul.infoGraphic li .numberWrap {
                position: absolute;
            }

            ul.infoGraphic li .number {
                font-family: "maven pro", sans-serif;
                font-size: 10em;
                font-weight: 900;
                width: 0.9em;
                text-align: center;
            }

            ul.infoGraphic li .number.fontColor1 {
                color: #3498db;
            }

            ul.infoGraphic li .number.fontColor2 {
                color: var(--green);
            }

            ul.infoGraphic li .number.fontColor3 {
                color: var(--purple);
            }

            ul.infoGraphic li .number.fontColor4 {
                color: #ed873b;
            }

            ul.infoGraphic li .number.fontColor5 {
                color: var(--red);
            }

            ul.infoGraphic li .number.fontColor6 {
                color: var(--orange);
            }

            ul.infoGraphic li .coverWrap {
                transform: rotate(130deg);
                position: absolute;
                width: 17em;
                height: 14em;
                left: -3em;
                top: 3rem;
            }

            ul.infoGraphic li .coverWrap .numberCover {
                position: absolute;
                background: #f5f8f7;
                width: 13em;
                height: 6em;
                border-radius: 50% 50% 0 0;
                border-bottom: 3px solid #f5f8f7;
                transition: all 0.4s;
            }

            ul.infoGraphic li:hover .coverWrap .numberCover {
                border-radius: 100%;
            }

            ul.infoGraphic li .coverWrap .numberCover::before {
                position: absolute;
                content: "";
                bottom: 5px;
                left: 4em;
                right: 4em;
                top: 5em;
                box-shadow: 0 0 30px 17px #48668577;
                border-radius: 100px / 10px;
                z-index: -1;
            }

            ul.infoGraphic li .coverWrap .numberCover::after {
                position: absolute;
                bottom: 0;
                content: "";
                left: -10%;
                width: 120%;
                height: 150%;
                background: radial-gradient(at bottom, #48668533, transparent, transparent);
                z-index: 1;
            }

            ul.infoGraphic li .content {
                margin: 7em 1em 1em 7em;
                position: relative;
            }

            ul.infoGraphic li .content h2 {
                font-size: 1.5rem;
                font-weight: 500;
                text-align: center;
                margin-bottom: 36px;
                /* text-transform: uppercase; */
            }

            ul.infoGraphic li .content p {
                line-height: 1.5em;
            }

            .icon {
                position: absolute;
                font-size: 2rem;
                text-align: center;
                top: -1.3em;
                left: 50%;
                transform: translatex(-50%);
            }

            .icon:before {
                color: #666;
                font-family: FontAwesome;
                font-style: normal;
                font-weight: normal;
                text-decoration: inherit;
            }

            .iconCodepen:before {
                content: "\f1cb";
            }

            .iconSocial:before {
                content: "\f08a";
            }

            .iconAirplane:before {
                content: "\f1d9";
            }

            .iconMap:before {
                content: "\f278";
            }

            .iconBulb:before {
                content: "\f0eb";
            }

            .iconPeace:before {
                content: "\f25b";
            }

            html {
                height: 100%;
                box-sizing: border-box;
            }

            *,
            *:before,
            *:after {
                box-sizing: inherit;
            }

            .controls {
                position: fixed;
                z-index: 2;
                bottom: 0;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
                background: #d7d7d7a1;
                padding: 0.5rem 2em;
                border-top-right-radius: 1rem;
                border-top-left-radius: 1rem;
                border: 1px solid #0000004d;
            }

            .sliderBox {
                text-align: center;
            }

            .sliderBox .range-value {
                font-weight: 500;
                font-size: 22px;
            }

            input[type="range"] {
                width: 100%;
                margin: 1em 0;
                -webkit-appearance: none;
            }

            input[type="range"]:focus {
                outline: none;
            }

            input[type="range"]::-webkit-slider-runnable-track {
                background: #00000066;
                border: 0;
                border-radius: 1.3px;
                width: 100%;
                height: 2px;
                cursor: pointer;
            }

            input[type="range"]::-webkit-slider-thumb {
                margin-top: -10px;
                width: 20px;
                height: 20px;
                background: #eee;
                box-shadow: inset 0px 1px 1px #ffffff66, 0px 1px 3px rgba(0, 0, 0, 1);
                border: 1px solid rgba(0, 0, 0, 0);
                border-radius: 50px;
                cursor: pointer;
                -webkit-appearance: none;
            }

            input[type="range"]:focus::-webkit-slider-runnable-track {
                background: #eee;
            }

            input[type="range"]::-moz-range-track {
                background: #000;
                border: 0;
                border-radius: 1.3px;
                width: 100%;
                height: 1px;
                cursor: pointer;
            }


            input[type="range"]::-moz-range-thumb {
                width: 25px;
                height: 25px;
                background: #151728;
                border: 1px solid rgba(0, 0, 0, 0);
                border-radius: 50px;
                cursor: pointer;
            }

            input[type="range"]::-ms-track {
                background: transparent;
                border-color: transparent;
                border-width: 13px 0;
                color: transparent;
                width: 100%;
                height: 1px;
                cursor: pointer;
            }

            input[type="range"]::-ms-fill-lower {
                background: #151728;
                border: 0;
                border-radius: 2.6px;
            }

            input[type="range"]::-ms-fill-upper {
                background: #151728;
                border: 0;
                border-radius: 2.6px;
            }

            input[type="range"]::-ms-thumb {
                width: 25px;
                height: 25px;
                background: #151728;
                border: 1px solid rgba(0, 0, 0, 0);
                border-radius: 50px;
                cursor: pointer;
                margin-top: 0px;
            }

            input[type="range"]:focus::-ms-fill-lower {
                background: #ffffff;
            }

            input[type="range"]:focus::-ms-fill-upper {
                background: #ffffff;
            }

            @media only screen and (max-width: 768px) {
                .about-style1 .section-head .title {
                    font-size: 29px !important;
                }

                ul.infoGraphic li {
                    max-width: 30em !important;
                }

            }

            .pt-100 {
                padding-top: 50px;
            }
        </style>



        <main style="
    background: #f5f8f7;
" class="pt-100">
            <h1 class="text-center">Three Tier Quality Check System</h1> <!-- Adding the heading here -->
            <ul class="infoGraphic">
                <li class="wow fadeInUp" data-wow-delay="0.3s">
                    <div class="numberWrap">
                        <div class="number fontColor3">1</div>
                        <div class="coverWrap">
                            <div class="numberCover"></div>
                        </div>
                    </div>
                    <div class="content">
                        <!-- <div class="icon iconAirplane"></div> -->
                        <h2>Factory Shop Floor Level</h2> <!-- Updated heading here -->
                        <p>Preliminary inspection / testing of Raw Material / PIP / FP by production people at Shop floor level.</p>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="0.3s">
                    <div class="numberWrap">
                        <div class="number fontColor4">2</div>
                        <div class="coverWrap">
                            <div class="numberCover"></div>
                        </div>
                    </div>
                    <div class="content">
                        <!--<div class="icon iconMap"></div>-->
                        <h2>FQC Dept.</h2>
                        <p>FQC responsible for Raw Material Testing, Finish Goods testing and RCA of Non Conformities.</p>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="0.3s">
                    <div class="numberWrap">
                        <div class="number fontColor5">3</div>
                        <div class="coverWrap">
                            <div class="numberCover"></div>
                        </div>
                    </div>
                    <div class="content">
                        <!--<div class="icon iconBulb"></div>-->
                        <h2>CQC Dept.</h2>
                        <p>The central quality control department (CQC dept.) to undertake the conformity, investigative and developmental testing.</p>
                    </div>
                </li>
            </ul>
        </main>


        <style>
            /*    .companies-media img {*/
            /*    height: 99%;*/
            /*    width: 45%;*/
            /*}*/
            .about-style1 .about-thumb-1 {
                text-align: justify !important;
            }

            .about-style1 .section-head .title {
                /* font-size: 41px !important; */
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
                                    <img src="https://www.mlagroup.com/img/certifications/03.jpg" alt="" class="">
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

    </div>

    <?php include('footer.php'); ?>