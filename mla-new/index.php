<?php
include('head.php');
?>
<title>MLA Group Of Industries </title>
<link rel="canonical" href="https://www.mlagroup.com/" />
<meta name="description"
    content="MLA Group is India’s trusted source for high-quality industrial chemicals. Serving 44+ countries, a global leader with certified quality & reliable supply.">


<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "name": "MLA Group",
        "url": "https://www.mlagroup.com/"

    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "MLA Group",
        "image": "https://www.mlagroup.com/img/mlagroup11.jpeg",
        "@id": "",
        "url": "https://www.mlagroup.com/",
        "telephone": "+915122555292",
        "priceRange": "Best Price",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "111/230, Harsh Nagar",
            "addressLocality": "Kanpur",
            "postalCode": "208012",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 26.472690,
            "longitude": 80.319900
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
        }
    }
</script>


<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "MLA Group",
        "url": "https://www.mlagroup.com/",
        "logo": "https://www.mlagroup.com/images/logo-MLA.png"
    }
</script>



<meta property="og:url" content="https://www.mlagroup.com">
<meta property="og:title" content="MLA Group Of Industries" />
<meta property="og:description" content="MLA Group is India’s trusted source for high-quality industrial chemicals. Serving 44+ countries, a global leader with certified quality & reliable supply." />
<meta property="og:image" content="https://www.mlagroup.com/images/logo-MLA.png" />
<meta property="og:type" content="website">

<meta name="twitter:url" content="https://www.mlagroup.com">
<meta name="twitter:title" content="MLA Group Of Industries">
<meta name="twitter:image" content="https://www.mlagroup.com/images/logo-MLA.png">
<meta name="twitter:description" content="MLA Group is India’s trusted source for high-quality industrial chemicals. Serving 44+ countries, a global leader with certified quality & reliable supply." />
<meta name="twitter:creator" content="MLA Group">



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

        <div class="page-content">


            <style>
                /*Ipad */

                .companies-inner .col-md-3 {
                    margin-bottom: 10px;
                }

                @media only screen and (min-width:768px) and (max-width:1180px) {
                    footer .footer-logo img {
                        max-width: 156px;
                    }
                }

                html {
                    overflow-x: hidden;
                }

                .py-new {
                    padding-top: 1rem !important;
                    padding-bottom: 2rem !important;
                }

                .col-or {
                    color: #FE8F34 !important;
                }

                /* .breadcrumb-row ul li {
					padding: 0;
					margin-right: 3px;
					display: inline-block;
					font-size: 16px;
					font-weight: 400;
					text-transform: capitalize;
					color: !important;
				} */


                .form-label {
                    font-size: 16px;
                    font-weight: 700;
                    color: var(--title);
                    margin-bottom: 0px !important;
                    background: transparent;
                    border-color: #D7D7D7;
                    font-family: var(--font-family-title);
                }

                .reveal-box ul li {
                    font-size: 15px;
                }

                @media only screen and (max-width:1299px) {

                    /* html{
                    font-size: 72%;
                } */
                    .border-box {
                        min-height: 32rem !important;
                    }

                    .reveal-box ul li {
                        font-size: 14px;
                    }

                    .contentindustry p {
                        font-size: 1.2rem !important;
                    }
                }
            </style>

            <!--Recommend Section End-->





            <!-- Companies End -->



            <!--Swiper Banner Start -->

            <!--Swiper Banner End-->


            <!-- <section class="banner-video">

        <div class="video-background">
            <div class="video-foreground">
              <iframe src="https://www.youtube.com/embed/PISiZKQtq_E?controls=0&showinfo=0&rel=0&autoplay=0&loop=1&mute=1" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>

      </section> -->

            <style>
                .about-banner {
                    position: relative;

                    /* This will make the banner full-height */
                }

                #video-container {
                    position: relative;
                    width: 100%;
                    height: 100%;
                    overflow: hidden;
                }

                #video-backgrounds {
                    width: 100%;
                    height: 88vh;
                    object-fit: cover;
                }

                .text-overlay {
                    position: absolute;
                    top: 0;
                    background: #53545475;
                    width: 100%;
                    /* left: 20px; */
                    height: 88vh;
                    /* transform: translateY(-50%); */

                    font-size: 24px;
                    font-weight: bold;
                    z-index: 1;
                    display: flex;
                    align-items: center;
                }

                .about-banner .innertext h2 {
                    color: #fff;
                    font-size: 2.5rem;
                }

                .about-banner .innertext p {
                    font-size: 1.1rem;
                    font-weight: normal;
                }

                .about-banner .innertext {
                    color: #fff;
                    width: 40%;
                    margin: 0 auto 0 100px;



                }

                #newvideocontainer {
                    display: none;
                }

                @media only screen and (max-width:768px) {
                    .border-box {
                        min-height: auto !important;
                    }

                    .bleft::after {
                        display: none;
                    }

                    .abtsec {
                        padding: 36px 0 22px 0 !important;
                    }

                    .missionv h3 {
                        font-size: 1.2rem;
                    }

                    .contentindustry p {
                        font-size: 1.74rem !important;
                    }

                    .application-tab h3 {
                        font-size: 1.75rem !important;
                    }

                    .abyyt {
                        padding: 0 0 0px 0 !important;
                    }

                    #newvideocontainer {
                        display: block !important;
                        background-image: linear-gradient(45deg, #040404f0, #f5e1b163), url(images/mlagroup.webp);
                        background-size: cover;
                        padding: 100px 20px;
                        background-position: center;
                    }

                    .containermob h2,
                    .containermob p {
                        color: #fff;
                    }

                    .containermob h2 {
                        font-size: 1.6rem;
                    }

                    .containermob p {
                        font-size: 1rem;
                    }



                }
            </style>


            <section class="about-banner ">
                <style>
                    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap");

                    @media screen and (min-width: 42.5rem) {
                        .gallery .content span {
                            margin-bottom: -1.875rem;
                        }

                        .gallery .content p {
                            margin-top: -1.563rem;
                        }
                    }


                    .gallery {
                        width: 100%;
                        position: relative;
                        min-height: 31.25rem;
                        height: 100vh;
                    }

                    .gallery .content {
                        position: absolute;
                        z-index: 50;
                        height: 100%;
                        /* right: 20%; */
                        width: 100%;
                        align-items: center;
                        display: flex;
                        padding: 50px 30px;
                        /*background-color: #00000030;*/
                        bottom: 0;
                        /* text-align: center; */
                        text-transform: uppercase;
                        color: #fff;
                        letter-spacing: 0.175rem;
                    }



                    .gallery .content h1 {
                        font-size: 2rem;
                        font-weight: 600;
                        margin-inline: -0.313rem;
                        color: #000;
                    }

                    .gallery .content p {
                        font-size: clamp(1.2rem, 1.0191rem + 0.6809vw, 1.7rem);
                        margin-top: -0.313rem;
                    }

                    .gallery .content hr {
                        display: block;
                        width: 3rem;
                        border: none;
                        height: 0.125rem;
                        background: #fff;
                        margin-top: 0.938rem;
                        margin-inline: 0.313rem;
                    }

                    .gallery footer {
                        position: absolute;
                        z-index: 50;
                        left: 2rem;
                        bottom: 1rem;
                        transform: translatey(-50%);
                    }

                    .gallery footer ul {
                        list-style: none;
                        display: flex;
                        gap: 1.563rem;
                    }

                    .gallery footer ul li {
                        text-transform: uppercase;
                        color: #fff;
                        letter-spacing: 0.1rem;
                        font-weight: 600;
                        font-size: 1.75rem;
                        color: #1aad8a;
                    }

                    .gallery footer ul li span {
                        font-size: 0.8rem;
                        opacity: 0.4;
                        color: #fff;
                        font-weight: 400;
                        display: inline-block;
                        margin-right: 0.5rem;
                    }

                    .gallery .swiper-container.gallery-slider {
                        width: 100%;
                        height: 100%;
                    }

                    .gallery .swiper-container.gallery-slider .swiper-slide {
                        width: auto;
                        height: 100%;
                    }

                    .gallery .swiper-container.gallery-slider .swiper-slide::after {
                        position: absolute;
                        content: "";
                        height: 100%;
                        width: 100%;
                        top: 0;
                        left: 0;
                        background: linear-gradient(to bottom, rgba(255, 0, 0, 0) 0%, #0000001c 100%);
                    }

                    .gallery .swiper-container.gallery-slider .swiper-slide img {
                        display: block;
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        pointer-events: none;
                    }

                    .gallery .swiper-pagination {
                        position: relative;
                        bottom: -0.313rem;
                        text-align: left;
                    }

                    .gallery .swiper-pagination-bullet {
                        border-radius: 0;
                        width: 1.125rem;
                        height: 0.25rem;
                        background: #fff;
                    }

                    .gallery .swiper-pagination-bullet.swiper-pagination-bullet-active {
                        background: #fff;
                    }

                    .gallery .more {
                        text-transform: uppercase;
                        color: #fff;
                        text-decoration: none;
                        opacity: 0.3;
                        font-size: 0.8rem;
                        transform: translateY(-0.938rem);
                        position: absolute;
                        z-index: 10;
                        right: 1.875rem;
                        letter-spacing: 0.1rem;
                        display: none;
                    }

                    @media screen and (min-width: 37.5rem) {
                        .gallery .more {
                            display: inline-block;
                        }
                    }

                    .gallery .gallery-thumbs {
                        width: 14.375rem;
                        padding: 0;
                        overflow: hidden;
                        position: absolute;
                        bottom: 8rem;
                        right: 0;
                    }

                    @media screen and (min-width: 37.5rem) {
                        .gallery .gallery-thumbs {
                            width: 25rem;
                        }
                    }

                    .gallery .gallery-thumbs .swiper-slide {
                        width: 6.25rem;
                        height: 6.25rem;
                        text-align: center;
                        overflow: hidden;
                        opacity: 0.5;
                    }

                    .gallery .gallery-thumbs .swiper-slide.swiper-slide-active {
                        opacity: 1;
                    }

                    .gallery .gallery-thumbs .swiper-slide img {
                        width: auto;
                        height: 100%;
                    }

                    @media screen and (max-width: 62.188rem) and (max-height: 43.75rem) {
                        .gallery .content {
                            top: 30% !important;
                            transform: translatey(-30%);
                        }
                    }

                    #typing-text {
                        /* overflow: hidden; */
                        /* Ensures the text is hidden initially */
                        /* border-right: .15em solid orange; */
                        /* Creates the typing cursor effect */
                        /* white-space: nowrap; */
                        width: 50%;
                        margin-left: 37px;
                        /* Prevents the text from wrapping */
                        /* animation: typing 3s steps(40, end), fadein 2s 3s forwards; */
                        /* Animation for typing and fade in */
                        opacity: 0;
                        /* Initially hide the element */
                        transform: translateY(50px);
                        /* Move the element down by 50px */
                        animation: fadeInUpFromBottom 1s ease-out forwards;
                        /* Apply animation */
                    }

                    @keyframes fadeInUpFromBottom {
                        from {
                            opacity: 0;
                            transform: translateY(50px);
                            /* Start from 50px below */
                        }

                        to {
                            opacity: 1;
                            transform: translateY(0);
                            /* Move to original position */
                        }
                    }

                    @keyframes typing {
                        from {
                            width: 0
                        }

                        to {
                            width: 100%
                        }
                    }

                    @keyframes fadein {
                        from {
                            opacity: 0
                        }

                        to {
                            opacity: 1
                        }
                    }

                    .bannejr {
                        /* background-image: url('images/abstract-mla.png');
                        background-repeat: no-repeat; */
                    }


                    .line {
                        content: "";
                        display: inline-block;
                        width: 100%;
                        height: 100%;
                        left: 0;
                        top: 0;
                        position: absolute;
                        border: 4px solid #e97f2f;
                        -webkit-clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
                        clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
                    }

                    #typing-text {
                        position: relative;
                        padding: 35px;
                        /*background: #eb823399;*/
                    }
                </style>

                <section>
                    <div class="gallery">
                        <div class="content bannejr">

                            <!-- <h1 class="wow fadeInUp">Chemical Manufacturing Complex Situated In Kanpur</h1> -->
                            <h1 id="typing-text">
                                <div class="line"></div> Welcome to <br> MLA Group of Industries: <br> <span style="color:#e97f2f">Leading Innovators</span> <br> in Chemical Additives Since 1975
                            </h1>

                        </div>

                        <div class="s gallery-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="images/bdhjdj.jpg" alt="Man sitting on a stone on the lake"></div>
                                <!-- <div class="swiper-slide"><img
                                        src="images/p1.jpeg"
                                        alt="Lake"></div> -->

                            </div>

                        </div>

                        <!-- <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="images/p1.jpeg"
                                        alt="Man sitting on a stone on the lake"></div>
                                <div class="swiper-slide"><img
                                        src="images/p6.jpeg"
                                        alt="Lake"></div>
                              
                            </div>
                            <div class="swiper-pagination"></div>
                            <a href="#" class="more">see more</a>
                        </div> -->
                    </div>



                </section>



                <!-- <div id="newvideocontainer">
                    <div class="containermob">
                        <h2>
                            Chemical Manufacturing Plant Situated in Kanpur, India
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sit rerum quae, vero hic
                            labore quasi accusamus, officia autem placeat voluptatibus neque dicta iure mollitia
                            ratione ullam illum in doloribus.
                        </p>
                        <a class="btn btn-outline-light" href="#">Who we are</a>
                        <a id="ytbplay" href="javascript:void(0)" data-url="PISiZKQtq_E" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                </div> -->
            </section>




            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                        </div>

                    </div>
                </div>
            </div>



            <style>
                #ytbplay {
                    font-size: 1.1rem;
                    width: 50px;
                    display: inline-flex;
                    height: 50px;
                    margin-left: 11px;
                    justify-content: center;
                    align-items: center;
                    border: 1px solid #fff;
                    color: #fff;
                    border-radius: 50%;
                }

                .abtsec {
                    z-index: 0;
                    padding: 60px 0;
                }

                .abyyt {
                    padding: 0 0 0px 0;
                }

                .abtsec .about-content {
                    padding: 10px 15px;

                    margin-bottom: 23px;
                    background-color: #fff6ef;
                }

                .gap-10 {
                    gap: 10px;
                }

                .missionv h3 {
                    margin-bottom: 0;
                }

                .missionv {
                    position: relative;
                    border-top: 1px solid #cacaca;
                    padding-top: 30px;
                    margin-top: 30px;
                    z-index: 1;
                }

                .missionv .contents i {
                    position: relative;
                    z-index: 6;
                    color: #5d5d5d;
                    font-size: 1.5rem;
                }

                .missionv .contents {
                    width: 40px;
                    justify-content: center;
                    align-items: end;
                    z-index: 1;
                    align-items: center;
                    display: flex;
                    position: relative;
                    height: 60px;
                    background-color: #FE8F34;
                    background-size: 4px 4px;
                    background-image: linear-gradient(45deg, transparent 45%, #fff 45%, #fff 55%, transparent 0);
                }

                body {
                    overflow-x: hidden;
                }

                @media only screen and (max-width:768px) {
                    .gallery .content {
                        background-size: cover;
                        background-image: url(https://www.mlagroup.com/images/bdhjdj.jpg);
                        padding: 50px 9px;
                    }

                    .gallery .content h1 {
                        font-size: 1.2rem;

                    }

                    #typing-text {
                        width: 100%;
                        padding: 15px;
                        margin-left: 0;
                    }

                    .containervidoes {
                        display: block !important;
                    }

                    .abtsec .about-content {
                        height: 9rem;
                    }

                    .swiper-container-sliding {
                        overflow: hidden;
                    }

                    .swiper-container-sliding p {
                        font-size: 2rem !important;
                        line-height: 2rem !important;
                    }
                }

                .mr-right-content {
                    margin-right: 55px;
                }

                .site-header {
                    background: #b9b9b9 !important;
                    border-bottom: 1px solid #fe8f34 !important;

                }
            </style>



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
                    min-height: 314px;
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
                    width: 66%;
                    margin: auto;
                    opacity: 1;
                    text-align: center;
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


                .imageiconbox img {
                    width: 100px;
                    margin: auto;
                    height: 100px;
                    display: block;

                }

                .v20_69 {
                    width: 109px;
                    height: 108px;
                    background: rgba(247, 134, 49, 1);
                    opacity: 1;
                    position: absolute;
                    top: 66%;
                    left: 0px;
                    border-bottom-left-radius: 11px;
                    overflow: hidden;
                }

                .v2344 {

                    width: 200px;
                    height: 10px;
                    border-bottom: 1.25px solid #f78631;
                    border-image: linear-gradient(0.49turn, rgba(243, 243, 243, 0), rgb(247, 134, 49), rgba(243, 243, 243, 0)) 1 / 1 / 0 stretch;


                }

                .big-box p {
                    font-weight: 500;
                    font-size: 1.4rem;
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
                        gap: 9px;
                    }

                    .counyersection .col-md-3 {
                        width: 48%;
                        padding: 0;
                        margin: auto;
                    }

                    .v20_82 {
                        width: 90%;
                        margin: auto;
                        overflow: auto;
                    }

                    .gallery {
                        height: 70vh;
                    }

                    .counyersection {
                        padding: 0 10px;
                    }
                }
            </style>

            <section id="counter-section" class="section pt-50 counter-section">
                <div class="container">
                    <div class="row gap-50 counyersection">
                        <div class="col-md-3">
                            <div id="counter-box-1" class="big-box wow fadeInUp" data-wow-delay="0.5s">
                                <div class="small-box">
                                    <div class="imageiconbox">
                                        <img src="./images/countries-catered-mla.png" alt="">
                                    </div>
                                    <div class="v20_82">
                                        <div class="d-flex justify-content-center">
                                            <h2 id="counter-1" class="counter" data-target="55">0</h2>
                                            <h2>+</h2>
                                        </div>
                                        <div class="v2344"></div>
                                        <p>Countries Catered</p>
                                        <div class="v20_85"></div>
                                        <div class="name"></div>
                                    </div>
                                </div>
                                <div class="v20_69"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div id="counter-box-2" class="big-box wow fadeInUp" data-wow-delay="0.5s">
                                <div class="small-box">
                                    <div class="imageiconbox">
                                        <img src="./images/total-customer-mla.png" alt="">
                                    </div>
                                    <div class="v20_82">
                                        <div class="d-flex justify-content-center">
                                            <h2 id="counter-2" class="counter" data-target="3000">0</h2>
                                            <h2>+</h2>
                                        </div>
                                        <div class="v2344"></div>
                                        <p>Total Customer</p>
                                        <div class="v20_85"></div>
                                        <div class="name"></div>
                                    </div>
                                </div>
                                <div class="v20_69"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div id="counter-box-3" class="big-box wow fadeInUp" data-wow-delay="0.5s">
                                <div class="small-box">
                                    <div class="imageiconbox">
                                        <img src="./images/products-manufactured-mla.png" alt="">
                                    </div>
                                    <div class="v20_82">
                                        <div class="d-flex justify-content-center">
                                            <h2 id="counter-3" class="counter" data-target="120000">0</h2>
                                            <h2>+</h2>
                                        </div>
                                        <div class="v2344"></div>
                                        <p>Manufacturing Capacity in MT</p>
                                        <div class="v20_85"></div>
                                        <div class="name"></div>
                                    </div>
                                </div>
                                <div class="v20_69"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div id="counter-box-4" class="big-box wow fadeInUp" data-wow-delay="0.5s">
                                <div class="small-box">
                                    <div class="imageiconbox">
                                        <img src="./images/manufacturing-capacity-mla.png" alt="">
                                    </div>
                                    <div class="v20_82">
                                        <div class="d-flex justify-content-center">
                                            <h2 id="counter-4" class="counter" data-target="100">0</h2>
                                            <h2>+</h2>
                                        </div>
                                        <div class="v2344"></div>
                                        <p>Products Manufactured</p>
                                        <div class="v20_85"></div>
                                        <div class="name"></div>
                                    </div>
                                </div>
                                <div class="v20_69"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <section class="content-inner abyyt pbt-100">
                <div class="container">
                    <div class="row about-style2 align-items-xl-center align-items-start">
                        <div class="col-lg-6 col-lg-5 col-sm-5 m-b30 wow fadeInLeft" data-wow-delay="0.8s">
                            <div class="containervidoes">
                                <iframe class="responsive-iframevids" src="https://www.youtube.com/embed/PISiZKQtq_E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-7 col-sm-7">
                            <div class="about-content">
                                <div class="section-head style-1 wow fadeInUp" data-wow-delay="0.5s">
                                    <h2 class="title">About MLA Group</h2>
                                    <p>Since its humble beginnings in 1975, when our first unit was established to manufacture aluminium silicate, MLA Group has continued to expand and thrive. Due to our steady growth and diversification, the business now includes four production facilities producing a wide range of additives. We are today India's largest manufacturers of Zinc Oxide Active and Metallic Stearates and amongst the top 3 in all our eight product verticals.</p>

                                    <a class="btn btn-secondary" href="about" target="_blank">Know More</a>


                                </div>

                            </div>
                        </div>
                    </div>
                    <style>
                        .containervidoes {
                            position: relative;
                            width: 100%;
                            overflow: hidden;
                            padding-top: 56.25%;
                            /* 16:9 Aspect Ratio */
                        }

                        .responsive-iframevids {
                            position: absolute;
                            top: 0;
                            left: 0;
                            bottom: 0;
                            right: 0;
                            width: 100%;
                            height: 100%;
                            border: none;
                        }

                        .border-box {
                            min-height: 29rem;
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
                            padding: 8px 44px 40px 40px;
                            text-align: justify;
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
                            margin: auto;
                            background: rgba(247, 134, 49, 1);
                            opacity: 1;
                            position: absolute;
                            top: -59px;
                            left: 0;
                            right: 0;
                            border-radius: 50%;
                        }

                        .icon-image-box {
                            left: 27px;
                            position: absolute;
                            width: 57px;
                            height: 36px;
                            top: 24px;
                        }

                        @media screen and (max-width:768px) {
                            .imageiconbox img {
                                height: 45px;
                                width: 45px;
                            }

                            .rowgap {
                                gap: 98px;
                            }

                            .border-box .content {
                                padding: 24px;
                            }

                            .big-box p {
                                font-size: 1rem;
                            }

                            .big-box {
                                min-height: 250px !important;
                            }

                            .v423_5 {

                                width: 111%;
                                max-width: 456px;
                                bottom: -20px;


                            }
                        }

                        .vbg-2 {
                            margin-bottom: 20px;
                        }

                        @media only screen and (max-width:768px) {
                            .compnayrows {
                                display: none;
                            }

                            .swipermobvals {
                                display: block !important;
                            }

                            .mttop-20 {
                                margin-top: 65px;
                            }
                        }

                        @media only screen and (min-width:768px) and (max-width:1184px) {
                            .counyersection .col-md-3 {
                                width: 50% !important;
                                margin-bottom: 20px;
                            }

                            #typing-text {
                                width: 80% !important;
                            }

                            .border-box {
                                min-height: auto !important;
                            }

                            .compnayrows .col-md-4 {
                                width: 100% !important;
                            }


                        }

                        .swipermobvals {
                            display: none;
                        }
                    </style>
                    <div class="section pt-100">
                        <div class="container">

                            <div class="swipermobvals swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="border-box">
                                            <div class="v423_8" style="z-index: 1;outline-offset: 20px;">

                                                <div class="icon-image-box">
                                                    <img src="./images/vision-mla.png" alt="" srcset="">

                                                </div>
                                            </div>
                                            <div class="v423_8 " style="outline: 2px solid #f78631;outline-offset: 20px;z-index: -1;"></div>
                                            <h2 class="title">Vision</h2>
                                            <div class="content">Our vision is to be globally acclaimed and renowned across all our 8 product verticals and to expand by building solutions that are sustainable as well as enhance the performance, safety, and environmental compatibility of products across diverse industries.</div>
                                            <div class="v423_5"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class=" border-box">
                                            <div class="v423_8" style="z-index: 1;outline-offset: 20px;">

                                                <div class="icon-image-box">
                                                    <img src="./images/mission-mla.png" alt="" srcset="">

                                                </div>
                                            </div>
                                            <div class="v423_8 " style="outline: 2px solid #f78631;outline-offset: 20px;z-index: -1;"></div>
                                            <h2 class="title">Mission</h2>
                                            <div class="content">We are driven to conduct cutting edge research and development, so that we can build more innovative and high-quality additives. Our goal is to exceed the expectations of our customers by providing them with the best customer service and diverse solutions which are sustainable and improves the product performance. </div>
                                            <div class="v423_5"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class=" border-box">
                                            <div class="v423_8" style="z-index: 1;outline-offset: 20px;">

                                                <div class="icon-image-box">
                                                    <img src="./images/values-mla.png" alt="" srcset="">
                                                </div>
                                            </div>
                                            <div class="v423_8 " style="outline: 2px solid #f78631;outline-offset: 20px;z-index: -1;"></div>

                                            <style>
                                                .lisvalues {
                                                    color: #e0823d;
                                                    margin-top: 10px;
                                                    font-weight: 600;
                                                    text-align: center;
                                                }
                                            </style>
                                            <h2 class="title">Values</h2>
                                            <div class="content">In our organisation, we have certain core values which work as a guiding light for us. The 5 pillars of our value system include:
                                                <ul class="lisvalues">
                                                    <li>Integrity </li>
                                                    <li>Collaboration</li>
                                                    <li>Business ethics</li>
                                                    <li>Innovation</li>
                                                    <li>Excellence</li>

                                                </ul>


                                            </div>
                                            <div class="v423_5"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row swipermobvals">
                                <div class="col-lg-12 mttop-20">
                                    <div class="pagination-align justify-content-center">
                                        <div class="tranding-button-prev1 btn-prev">
                                            <img src="icons/left-chevron.png" alt="">
                                        </div>
                                        <div class="tranding-button-next1 btn-next">
                                            <img src="icons/chevron.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row rowgap compnayrows">

                                <div class="col-md-4 wow fadeInUp vbg-2" data-wow-delay="0.2s">


                                    <div class="border-box">
                                        <div class="v423_8" style="
                                        z-index: 1;
                                        outline-offset: 20px;
                                        
                                    ">

                                            <div class="icon-image-box">
                                                <img src="./images/vision-mla.png" alt="" srcset="">

                                            </div>
                                        </div>
                                        <div class="v423_8 " style="
                                        outline: 2px solid #f78631;
                                        outline-offset: 20px;
                                        z-index: -1;
                                    "></div>
                                        <h2 class="title">Vision</h2>
                                        <div class="content">Our vision is to be globally acclaimed and renowned across all our 8 product verticals and to expand by building solutions that are sustainable as well as enhance the performance, safety, and environmental compatibility of products across diverse industries.</div>
                                        <div class="v423_5"></div>
                                    </div>

                                </div>
                                <div class="col-md-4 wow fadeInUp vbg-2" data-wow-delay="0.2s"">


                                    <div class=" border-box">
                                    <div class="v423_8" style="
                                        z-index: 1;
                                        outline-offset: 20px;
                                        
                                    ">

                                        <div class="icon-image-box">
                                            <img src="./images/mission-mla.png" alt="" srcset="">

                                        </div>
                                    </div>
                                    <div class="v423_8 " style="
                                        outline: 2px solid #f78631;
                                        outline-offset: 20px;
                                        z-index: -1;
                                    "></div>
                                    <h2 class="title">Mission</h2>
                                    <div class="content">We are driven to conduct cutting edge research and development, so that we can build more innovative and high-quality additives. Our goal is to exceed the expectations of our customers by providing them with the best customer service and diverse solutions which are sustainable and improves the product performance. </div>
                                    <div class="v423_5"></div>
                                </div>

                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s"">


                                    <div class=" border-box">
                                <div class="v423_8" style="
                                        z-index: 1;
                                        outline-offset: 20px;
                                        
                                    ">

                                    <div class="icon-image-box">
                                        <img src="./images/values-mla.png" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="v423_8 " style="
                                        outline: 2px solid #f78631;
                                        outline-offset: 20px;
                                        z-index: -1;
                                    "></div>

                                <style>
                                    .lisvalues {
                                        color: #e0823d;
                                        margin-top: 10px;
                                        font-weight: 600;
                                        text-align: center;
                                    }
                                </style>
                                <h2 class="title">Values</h2>
                                <div class="content">In our organisation, we have certain core values which work as a guiding light for us. The 5 pillars of our value system include:
                                    <ul class="lisvalues">
                                        <li>Integrity </li>
                                        <li>Collaboration</li>
                                        <li>Business ethics</li>
                                        <li>Innovation</li>
                                        <li>Excellence</li>

                                    </ul>


                                </div>
                                <div class="v423_5"></div>
                            </div>

                        </div>
                    </div>
                </div>
        </div>



    </div>

    </section>
    <style>
        .swiper-container-sliding p {
            font-size: 4rem;
            line-height: 3rem;
            color: #000;
            font-weight: 600;
            text-transform: uppercase;
        }

        .pt-50 {
            padding-top: 50px;
        }

        .pb-50 {
            padding-bottom: 50px;
        }

        .swiper-container-sliding .swiper-slide {
            width: auto;
        }

        .indyru {
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: #FE8F34;
            -webkit-text-fill-color: transparent;
        }

        .industryimg {
            height: 28rem;
            padding-right: 44px;
            object-fit: cover;
            width: 100%;
        }

        .outside-box-right-25 {
            margin-right: -11vw;
        }

        .application-tab {
            position: relative;
            /* overflow: hidden; */
        }

        .list-style-three {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .list-style-three .list-info {
            border-bottom: 2px solid #e0823d;
            padding: 1rem;
            text-align: center;
            width: 30%;
            color: #e0823d;
            background: #e0e0e0;
        }
    </style>
    <!-- 
            <div class="swiper-container-sliding">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <p class="indyru">Industries</p>
                    </div>
                    <div class="swiper-slide">
                        <p>We Serve</p>
                    </div>
                    <div class="swiper-slide">
                        <p class="indyru">Industries</p>
                    </div>
                    <div class="swiper-slide">
                        <p>We Serve</p>
                    </div>
                    <div class="swiper-slide">
                        <p class="indyru">Industries</p>
                    </div>
                    <div class="swiper-slide">
                        <p>We Serve</p>
                    </div>
                 
                </div>
            </div> -->

    <style>
        .application-tab .about-content p {
            /* color: #fff; */
            color: #000;
        }

        .application-tab h3 {
            color: #000;
            font-size: 2.25rem;
            font-weight: 600;
            line-height: 1.2;
        }

        .appslider .dz-media {
            height: 28rem;
        }

        .appslider img {
            /* height: 30rem; */
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        .contentindustry p {
            color: #fff;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .contentindustry {
            color: #fff;
        }

        .contentindustry {
            position: absolute;
            color: #fff;
            align-items: end;
            display: flex;
            bottom: 0;
            border-radius: 10px;
            height: 21%;
            /* border-radius: inherit; */
            width: 100%;
            background: linear-gradient(358deg, #000000c2, transparent);
            z-index: 10;
            padding: 10px 50px 10px 40px;
        }

        .content-inner-1 {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .mbuiti-6 {
            margin-top: 40px;
        }

        .application-tab:before {
            opacity: 0.1;
        }
    </style>
    <style>
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .application-tab h2 {

            color: #000;
            font-size: 2.25rem;
            font-weight: 600;
            line-height: 1.2;
        }
    </style>
    <section class="content-inner application-tab overlay-black-light pbt-100" style="background-image:url(images/appit.jpg); background-repeat: no-repeat; background-size: cover;background-position: bottom;">
        <div class="container">
            <div class="row about-style2 align-items-xl-center align-items-start wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-lg-3 ">
                    <h2 class="title">Applications</h2>
                </div>
                <div class="col-lg-7 ">
                    <div class="about-content">
                        <div class="style-1">




                        </div>

                    </div>
                </div>


                <style>
                    .reveal-box {
                        position: absolute;
                        bottom: -100%;
                        /* Start from below the container */
                        left: 0;
                        right: 0;
                        border-radius: 10px;
                        background: rgba(255, 255, 255, 0.9);
                        /* White background with some transparency */
                        color: #000;
                        padding: 20px;
                        box-sizing: border-box;
                        transition: bottom 0.5s ease-in-out;
                        overflow-y: auto;
                        /* Optional if content is large */

                    }

                    .dz-media:hover .reveal-box {
                        bottom: 0;
                        /* Move to the top on hover */
                    }

                    .dz-media:hover .contentindustry {
                        opacity: 0;
                        /* Hide contentindustry on hover */
                        display: none;
                    }

                    .reveal-box ul {
                        margin: 0;
                        padding: 0;
                        list-style: none;
                    }

                    .reveal-box ul li {
                        margin-bottom: 10px;
                    }

                    .reveal-box ul li i {
                        color: #e0823d;
                        margin-right: 6px;
                    }

                    .reveal-box ul li {
                        display: flex;
                        align-items: baseline;
                    }

                    .reveal-box p {
                        font-size: 1.5rem;
                    }

                    /* Mobile view styles */
                    @media (max-width: 767px) {


                        .reveal-box {
                            top: 0;
                            background: rgba(0, 0, 0, 0.48);
                            /* Dark background for text visibility */
                            color: #fff;
                            display: flex;
                            align-items: center;

                            height: 100%;
                            padding: 10px;
                        }

                        .reveal-box ul {
                            list-style: none;
                            padding: 0;
                        }

                        .reveal-box ul li {
                            margin-bottom: 10px;
                        }

                        .contentindustry {
                            display: none;
                            /* Hide contentindustry by default */
                        }
                    }

                    .btn-next img {
                        height: 25px;
                    }

                    .btn-prev img {
                        height: 25px;
                    }




                    .contentindustry h3 {
                        color: #fff;
                        font-size: 1.5rem;
                        font-weight: 600;
                    }
                </style>

                <div class="col-lg-2">
                    <div class="pagination-align justify-content-end">
                        <div class="tranding-button-prev btn-prev">
                            <img src="icons/left-chevron.png" alt="">
                        </div>
                        <div class="tranding-button-next btn-next">
                            <img src="icons/chevron.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mbuiti-6" style="overflow: hidden;">

                    <div class="outside-box-right-25">
                        <div class="swiper-btn-center-lr appslider">
                            <div class="swiper swiper-four">
                                <div class="swiper-wrapper">




                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/plasticimg1.jpg" alt="image">
                                                <div class="contentindustry">
                                                    <h3>PVC Pipe Industries</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>PVC Pipe Industries</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Unismart Packs</li>
                                                            <li><i class="fa fa-check"></i> Calcium Zinc Stabilizers</li>
                                                            <li><i class="fa fa-check"></i> Lead Based Stabilizers: One-pack / Hybrid Low-Lead / Singles</li>
                                                            <li><i class="fa fa-check"></i> Calcium Stearate</li>
                                                            <li><i class="fa fa-check"></i> PE Wax, MLA 60, Stearic Acid, Paraffin Flakes, GMS -40</li>
                                                            <!-- <li><i class="fa fa-check"></i> ADC Blowing Agents (AC & NC Both)</li> -->
                                                            <li><i class="fa fa-check"></i> Titanium Dioxide: Rutile & Anatase</li>
                                                            <li><i class="fa fa-check"></i> Onepack lubricants</li>
                                                            <!-- <li><i class="fa fa-check"></i> Calcined Clay</li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>



                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/rubber-transformed.jpeg" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Rubber Industries</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Rubber Industries</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Ppt silica</li>
                                                            <li><i class="fa fa-check"></i> Zinc oxide active</li>

                                                            <li><i class="fa fa-check"></i> China clay</li>
                                                            <li><i class="fa fa-check"></i> Aluminium silicate</li>
                                                            <li><i class="fa fa-check"></i> Zinc stearate</li>
                                                            <li><i class="fa fa-check"></i> Stearic acid</li>
                                                            <li><i class="fa fa-check"></i> PE wax</li>
                                                            <li><i class="fa fa-check"></i> Paraffin wax</li>
                                                            <li><i class="fa fa-check"></i> Titanium dioxide</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/paint-mlagroup.jpg" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Paints Industries</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Paints Industries</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Levigated china clay / kaolin</li>
                                                            <li><i class="fa fa-check"></i> Talc / Barytes / Calcite / Dolomite / Whiting</li>
                                                            <li><i class="fa fa-check"></i> Calcined clay</li>
                                                            <li><i class="fa fa-check"></i> Aluminium Silicate / sodium aluminium silicate</li>
                                                            <li><i class="fa fa-check"></i> Zinc stearate</li>
                                                            <li><i class="fa fa-check"></i> Aluminium Stearate</li>
                                                            <li><i class="fa fa-check"></i> Calcium Stearate</li>
                                                            <li><i class="fa fa-check"></i> Precipitated Silica</li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/masterbatch.jpg" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Plastics Industries</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Plastics Industries</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Zinc stearate</li>
                                                            <li><i class="fa fa-check"></i> Calcium stearate</li>
                                                            <li><i class="fa fa-check"></i> Talc / Calcite / dolomite / clay</li>
                                                            <li><i class="fa fa-check"></i> Precipitated silica</li>
                                                            <li><i class="fa fa-check"></i> EBS / amide wax</li>
                                                            <li><i class="fa fa-check"></i> Aluminium stearate</li>
                                                            <li><i class="fa fa-check"></i> Magnesium stearate</li>
                                                            <li><i class="fa fa-check"></i> Barium Stearate</li>
                                                            <li><i class="fa fa-check"></i> PE wax</li>
                                                            <li><i class="fa fa-check"></i> One pack lubricant against Plastaid-T of fine organics</li>
                                                        </ul>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/Cable.jpg" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Cable compounding</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Cable compounding</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> TBLS,
                                                                DBLS,
                                                                LS,
                                                                DBLpthalate</li>
                                                            <li><i class="fa fa-check"></i> One packs stabilizers (lead based)</li>
                                                            <li><i class="fa fa-check"></i> PE wax</li>
                                                            <li><i class="fa fa-check"></i> Calcium stearate</li>
                                                            <li><i class="fa fa-check"></i> Stearic acid</li>
                                                            <li><i class="fa fa-check"></i> One pack lubricants</li>
                                                            <li><i class="fa fa-check"></i> Paraffin wax in flakes form</li>
                                                            <li><i class="fa fa-check"></i> Calcined clay</li>
                                                            <li><i class="fa fa-check"></i> Titanium dioxide</li>
                                                        </ul>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/formboard.jpeg" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Foamboard /
                                                        WPC</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Foamboard /
                                                            WPC</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Foaming
                                                                agents</li>
                                                            <li><i class="fa fa-check"></i> Stabilizers</li>
                                                            <li><i class="fa fa-check"></i> PE wax
                                                                Calcium
                                                                sterate</li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/SPCflooring.webp" alt="image">
                                                <div class="contentindustry">
                                                    <h3>SPC flooring</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>SPC flooring</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i>CZ stabilizer</li>
                                                            <li><i class="fa fa-check"></i> Lubricant</li>
                                                            <li><i class="fa fa-check"></i> PE wax</li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>



                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/Wall-panels.webp" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Wall panels /
                                                        Roofing
                                                        sheet/
                                                        Laminate /
                                                        Edge bands</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Wall panels /
                                                            Roofing
                                                            sheet/
                                                            Laminate /
                                                            Edge banks</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i>Stabilizers
                                                                and
                                                                lubricants</li>


                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/cosmetics.jfif" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Cosmetics/
                                                        Toothpaste</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Cosmetics/
                                                            Toothpaste</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Levigated clay / kaolin / talc</li>
                                                            <li><i class="fa fa-check"></i> Zinc stearate</li>
                                                            <li><i class="fa fa-check"></i> Precipitated silica</li>
                                                            <li><i class="fa fa-check"></i> Sodium stearate</li>
                                                            <li><i class="fa fa-check"></i> GMS</li>
                                                            <li><i class="fa fa-check"></i> EGMS / EGDS</li>
                                                            <li><i class="fa fa-check"></i> Zinc carbonate</li>
                                                            <li><i class="fa fa-check"></i> Zinc stearate</li>
                                                        </ul>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/detpowder.jpg" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Detergents</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Detergents</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Precipitated
                                                                Silica</li>
                                                            <li><i class="fa fa-check"></i> Levigated
                                                                clay / talcum
                                                                / calcite /
                                                                dolomite</li>

                                                        </ul>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/Pharmaceuticals-and-food.jfif" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Pharmaceuticals and food
                                                        products</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Pharmaceuticals and food
                                                            products</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Levigated clay / kaolin</li>
                                                            <li><i class="fa fa-check"></i> Magnesium stearate</li>
                                                            <li><i class="fa fa-check"></i> Talc Powder</li>
                                                            <li><i class="fa fa-check"></i> Zinc Oxide</li>
                                                            <li><i class="fa fa-check"></i> Other pharma excipients</li>
                                                            <li><i class="fa fa-check"></i> Silicon dioxide or ppt silica</li>
                                                            <li><i class="fa fa-check"></i> SMS / STS</li>
                                                            <li><i class="fa fa-check"></i> GMS -40</li>
                                                        </ul>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>


                                    </div>



                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/Pesticides.jfif" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Pesticides and
                                                        micronutrients
                                                    </h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Pesticides and
                                                            micronutrients
                                                        </p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Precipitated
                                                                silica</li>
                                                            <li><i class="fa fa-check"></i> Hydrated
                                                                calcium
                                                                silicate</li>
                                                            <li><i class="fa fa-check"></i>Levigated
                                                                clay / kaolin</li>
                                                            <li><i class="fa fa-check"></i> Zinc Oxide</li>

                                                        </ul>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/petrochemical.jpg" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Chemicals</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Chemicals</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Precipitated
                                                                silica</li>
                                                            <li><i class="fa fa-check"></i> China clay /
                                                                talc etc</li>


                                                        </ul>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/chemcials.jpg" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Construction
                                                        chemicals</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Construction
                                                            chemicals</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Zinc stearate,
                                                                calcium
                                                                stearate,
                                                                aluminium
                                                                stearate ,
                                                                other stearates</li>



                                                        </ul>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/tablesalt.jpg" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Table salt</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Table salt</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Precipitated
                                                                silica</li>



                                                        </ul>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/ceramics.jpg" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Ceramics</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Ceramics</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Zinc oxide</li>
                                                            <li><i class="fa fa-check"></i> White china
                                                                clay</li>


                                                        </ul>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                                            <div class="dz-media">
                                                <img src="images/animalfeed.jpg" alt="image">
                                                <div class="contentindustry">
                                                    <h3>Animal feed</h3>
                                                </div>
                                                <div class="reveal-box">
                                                    <div>
                                                        <p>Animal feed</p>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i> Zinc oxide</li>
                                                            <li><i class="fa fa-check"></i> Kaolin</li>
                                                            <li><i class="fa fa-check"></i>PPt silica</li>

                                                        </ul>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>






    <section class="content-inner-1 logo-back overlay-white-middle companies border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-lg-b0 p-md-b30 wow fadeInUp text-center mb-lg-20" data-wow-delay="0.5s">
                        <div class="section-head style-1">
                            <h2 class="title">
                                Certifications</h2>
                        </div>

                    </div>
                </div>
            </div>
            <div class="section-inner">

                <div class="row gx-3 companies-inner">
                    <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="javascript:void(0);" class="companies-wrapper">
                            <div class="companies-media">
                                <img src="./img/certifications/dnv.webp" alt="DNV Certification">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="companies-wrapper">
                            <div class="companies-media">
                                <img src="./img/certifications/rohs-compliant.webp" alt="RoHS Compliant
">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.3s">
                        <a href="javascript:void(0);" class="companies-wrapper">
                            <div class="companies-media">
                                <img src="./img/certifications/reach-compliance.webp" alt="Reach Compliance">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="companies-wrapper">
                            <div class="companies-media">
                                <img src="./img/certifications/gmp-logo.webp" alt="Good Manufacturing Practice
">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="javascript:void(0);" class="companies-wrapper">
                            <div class="companies-media">
                                <img src="./img/certifications/fda-certified.webp" alt="FDA Certified">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="companies-wrapper">
                            <div class="companies-media">
                                <img src="./img/certifications/eu-certified.webp" alt="EU Certified
">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="javascript:void(0);" class="companies-wrapper">
                            <div class="companies-media">
                                <img src="./img/certifications/en-seven-one.webp" alt="EN71">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="companies-wrapper">
                            <div class="companies-media">
                                <img src="./img/certifications/sedex-certified.webp" alt="Sedex Certified 
">
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>


    </section>







    <!-- Icon Box Start -->
    <!-- <section class="content-inner py-0">
			<div class="container-fluid px-0">
				<div class="row gx-0">
					<div class="col-xl-3 col-lg-3 col-sm-6">
						<div class="icon-bx-wraper style-2 bg-light">
							<div class="icon-bx">
								<img src="images/svg/icon-bx/password-check.svg" alt="/">
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Filter & Discover</h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
							</div>
							<div class="data-text">01</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-sm-6">
						<div class="icon-bx-wraper style-2">
							<div class="icon-bx">
								<img src="images/svg/icon-bx/cart.svg" alt="/">
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Add to cart</h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
							</div>
							<div class="data-text">02</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-sm-6">
						<div class="icon-bx-wraper style-2 bg-light">
							<div class="icon-bx">
								<img src="images/svg/icon-bx/discovery.svg" alt="/">
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Fast Shipping</h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
							</div>
							<div class="data-text">03</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-sm-6">
						<div class="icon-bx-wraper style-2">
							<div class="icon-bx">
								<img src="images/svg/icon-bx/box-tick.svg" alt="/">
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Enjoy The Product</h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
							</div>
							<div class="data-text">04</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
    <!-- Icon Box End -->
    </div>


    <style>
        .b-1 {
            border-top: 1px solid #FE8F34;
        }

        @media only screen and (max-width:1500px) {
            .gallery .content h1 {
                font-size: 1.5rem;
            }
        }

        @media only screen and (max-width:768px) {
            .border-box {
                min-height: 23rem !important;
            }

            .list-style-three .list-info {
                width: 47%;
            }

            .mbuiti-6 {
                margin-top: 0 !important;
            }

            .application-tab .pagination-align {
                margin-bottom: 30px;
            }

            .outside-box-right-25 {
                margin-right: 0 !important;
            }

            .industryimg {
                height: auto;
                padding-right: 0 !important;
            }


            .shop-card img {
                height: 15rem;
            }

            .about-banner {
                overflow: hidden;
                height: auto;
            }

            .pbt-100 {
                padding: 50px 0px !important;
            }

            .about-banner .innertext {
                width: 88%;
                margin: 0 auto 0 20px;
            }

            .about-banner .innertext h2 {
                color: #fff;
                font-size: 1.5rem;
            }

            .about-sale .about-content .text {
                white-space: pre-wrap;
            }
        }
    </style>
    <!-- Footer -->
    <?php
    include('footer.php')
    ?>