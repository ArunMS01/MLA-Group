<?php include('header.php')   ?>





<section>
    <style>
        /* Base
----------------------------------*/


        /* Swiper
----------------------------------*/
        .gallery {
            top: -274px;
    width: 100%;
    position: relative;
    padding: 0 100px;
        }

        .sp .gallery {
            padding: 0 80px;
        }

        .swiper {
            width: 100%;
            max-width: 800px;
        }

        .sp .swiper {
            width: 100%;
        }

        .swiper-slide {}

        .swiper-slide img {
            width: 100%;
            height: 100%;
            aspect-ratio: 800 / 600;
            object-fit: cover;
        }


        .swiper-button-prev,
        .swiper-button-next {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            border: 1px solid #222;
            border-radius: 50%;
            z-index: 1;
            cursor: pointer;
        }

        .sp .swiper-button-prev,
        .sp .swiper-button-next {
            width: 40px;
            height: 40px;
        }

        .swiper-button-prev {
            left: 24px;
        }

        .sp .swiper-button-prev {
            left: 20px;
        }

        .swiper-button-next {
            right: 24px;
        }

        .sp .swiper-button-next {
            right: 20px;
        }

        .swiper-button-prev::after,
        .swiper-button-next::after {
            content: "";
            width: 8px;
            height: 8px;
            border: solid #222;
            border-width: 1px 1px 0 0;
        }

        .swiper-button-prev::after {
            margin-left: 3px;
            transform: rotate(-135deg);
        }

        .swiper-button-next::after {
            margin-right: 3px;
            transform: rotate(45deg);
        }

        .swiper-button-disabled {
            pointer-events: none;
            opacity: 0.5;
        }


        .swiper-pagination {
            display: flex;
            justify-content: center;
            gap: 0 6px;
            position: absolute;
            bottom: -20px;
            right: 0;
            left: 0;
            margin: 0 auto;
        }

        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            border: 1px solid #222;
            border-radius: 50%;
            background-color: #fff;
        }

        .swiper-pagination-bullet-active {
            background-color: #222;
        }

        .section-title {
            position: relative;
            text-align: center;
        }

        .margin-bottom-55 {
            margin-bottom: 55px;
        }

        .section-title:before {
            content: '\f275';
            position: absolute;
            top: -40px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
            font-size: 120px;
            font-family: 'fontAwesome';
            color: #eee;
            z-index: -1;
        }

        .section-title .subtitle {
            color: #fff;
          
            font-weight: 600;
            text-transform: uppercase;
            font-size: 16px;
            line-height: 26px;
        }

        .section-title .title {
            color: #fff;
            font-size: 48px;
            line-height: 58px;
            font-weight: 700;
        }

        .section-title .title-paragraph {
        color: white;
        }
        .backg{
            background-color: #a79b9b;
        }
        .paddingbaner{
            padding: 72px 0px 292px 0px;
        }
        .height1234{
            height: 288px;
        }
        @media only screen and (max-width:767px) {
            .gallery {
            top: -117px;
    width: 100%;
    position: relative;
    padding: 0 0px !important;
        }
        .paddingbaner {
    padding: 72px 0px 121px 0px;
}
.section-title {
    padding: 10px;}
        }
        .mobpadding0{
            --bs-gutter-x: 0 !important;
        }
    </style>
    <section class="backg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 paddingbaner">
            <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title margin-bottom-55">
                    <span class="subtitle">who we are</span>
                    <h2 class="title margin-top-10 margin-bottom-10">Research & Development</h2>
                    <p class="title-paragraph">The R&D Department of MLA Group has to its credit the development of some of the most advanced technologies for the Production of Precipitated Chemicals and Processed Minerals, worldover. Intensive research is carried on for continuous process improvement, upgradation, new products and technologies are developed to meet the customer-specific requirements. We work with our clients on their problems, developing new and unique tailor-made solutions.

                        Our R&D Deptt. is headed by Mr.N.N. Kapoor (B.Tech., M.S., University of Minnesotta, USA). It is equipped with full chemical and physical testing facilities and application test equipments. We also get the best technical consultation and state-of-art- infrastructural support from the premier research institutes of the country, Indian Institute of Technology (IIT-Kanpur), Harcourt Butler Technical (HBTI-Kanpur), CSIR (Lucknow) and DMSRDE (Kanpur).
                    </p>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
    </section>
<section class="height1234">
    <div class="container height1234 mobpadding0">
       
        <div class="gallery">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?q=80&w=3486&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="800" height="600" alt="dummy1"></div>
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1519052537078-e6302a4968d4?q=80&w=3270&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="800" height="600" alt="dummy2"></div>
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1516280030429-27679b3dc9cf?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="800" height="600" alt="dummy3"></div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>
</section>












<style>
    /*
16.About Page
================*/
    .abtdsc-sec p {
        color: #fff;
    }

    .abt-lft h2 {
        color: #020e2a;
    }

    .abt-img img {
        width: 100%;
    }

    .about-desc {
        display: inline-block;
        width: 100%;
        padding-right: 40px;
    }

    .about-text>span {
        font-size: 18px;
        font-weight: 600;
        text-transform: capitalize;
        color: #fc5508;
        display: inline-block;
        width: 100%;
        margin-bottom: 10px;
    }

    .about-text h1 {
        color: #020e2a;
        display: inline-block;
        margin-bottom: 14px;
        font-size: 30px;
        font-weight: bold;
        text-transform: capitalize;
    }

    .about-text h1>span {
        color: #fc5508
    }

    .about-countup {
        margin-top: 50px;
    }

    .counting-inner {
        display: inline-block;
        padding-right: 80px;
    }

    .counting-inner:last-child {
        padding-right: 0px
    }

    .counting-inner h2 {
        font-size: 36px;
        font-weight: bold;
        position: relative
    }

    .counting-inner h4 {
        color: #020e2a;
        text-transform: capitalize;
        font-size: 20px;
    }

    .about-us-img {
        position: relative;
        z-index: 2
    }

    .about-us-img::before {
        position: absolute;
        content: "";
        background: #fc5508;
        width: 100%;
        height: 100%;
        left: -25px;
        top: 30px;
        z-index: -1;
    }

    .pb-70 {
        padding-bottom: 70px;
    }

    .pt-100 {
        padding-top: 100px;
    }
    .about-img-circle{
        display: flex;
        justify-content: center;
    }
</style>


<section class="">
    <div class="about-sec pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-us-v2">
                        <div class="about-desc">
                            <h1>About Our Company</h1>
                            <p>Lorem ipsum dolor sit amet, justo nunc orci donec sagittis metus dapibus, erat ullamcorper odio augue eleifend, consequat enim ullamcorper magnis dignissim nec phasellus, Lorem ipsum dolor sit amet, justo nunc orci donec sagittis metus dapibus, erat ullamcorper odio augue eleifend, consequat enim</p>
                            <p>Lorem ipsum dolor sit amet, justo nunc orci donec sagittis metus dapibus, erat ullamcorper odio augue eleifend, consequat enim .</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-us-thumb">
                        <div class="about-img-circle">
                            <img src="https://themeearth.com/tf/html/indrostiz/img/about.jpg" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="about-sec pt-100 pb-70">
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <div class="about-us-thumb">
                        <div class="about-img-circle">
                            <img src="https://themeearth.com/tf/html/indrostiz/img/about.jpg" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-us-v2">
                        <div class="about-desc">
                            <h1>About Our Company</h1>
                            <p>Lorem ipsum dolor sit amet, justo nunc orci donec sagittis metus dapibus, erat ullamcorper odio augue eleifend, consequat enim ullamcorper magnis dignissim nec phasellus, Lorem ipsum dolor sit amet, justo nunc orci donec sagittis metus dapibus, erat ullamcorper odio augue eleifend, consequat enim</p>
                            <p>Lorem ipsum dolor sit amet, justo nunc orci donec sagittis metus dapibus, erat ullamcorper odio augue eleifend, consequat enim .</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<style>
    .why-choose-us-v1-sec {
        background-color: #fff;
      
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden
    }

    .why-choose-v1-wrap {
        padding: 10px 0 50px 50px
    }

    .why-choose-v1-title {
        margin: 0 0 40px;
        text-align: left
    }

    .why-choose-v1-title span {
        text-transform: capitalize;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
        display: inline-block;
        position: relative;
        color: #f55b14;
        padding-left: 70px
    }

    .why-choose-v1-title span:before {
        position: absolute;
        content: "";
        background: #f55b14;
        width: 60px;
        height: 1px;
        top: 14px;
        left: 0
    }

    .why-choose-v1-title h1 {
        font-size: 36px;
        text-transform: capitalize;
        color: #fff;
        font-weight: 700
    }

    .why-choose-v1 {
        height: 100%;
        position: relative;
        z-index: 2
    }

    .why-choose-v1:before {
    position: absolute;
    content: "";
    top: -103px;
    left: 0;
    height: 120%;
    /* width: 100%; */
    background: #0f1934;
    left: -15px;
    width: 5000px;
    z-index: -1;
  }

    .why-choose-v1-single {
        margin: 20px 0;
        color: #cdcdcd
    }

    .why-choose-v1-single .icon {
        width: 60px;
        height: 60px;
        margin-right: 10px;
        text-align: center;
        line-height: 60px;
        background: #f55b14;
        color: #fff;
        font-size: 28px;
        border-radius: 100%;
        position: relative
    }

    .why-choose-v1-single .media {
        overflow: visible
    }

    .why-choose-v1-single .media-left {
        position: relative;
        margin-right: 15px
    }

    .why-choose-v1-single .media-left:before {
        width: 1px;
        height: 170px;
        position: absolute;
        content: "";
        top: 0;
        left: 30px;
        border-left: 1px dashed #f2f2f2;
        transition: all .4s ease
    }

    .why-choose-v1-single:last-child .media-left:before {
        display: none
    }

    .why-choose-v1-single .media-body h2 {
        font-size: 20px;
        margin-bottom: 10px;
        text-transform: capitalize;
        color: #fff
    }
    .container123{
        width: 100%;
    }
</style>
<section class="why-choose-us-v1-sec pt-100 pb-70">
    <div class="container123">
       
        <div class="row">
        <h2 class="text-white text-center" style="z-index: 5;">We Provide The Best Service For Your Business</h2>
              <div class="col-lg-6 col-md-12">
                <div class="why-choose-v1">
               
                    <div class="why-choose-v1-wrap">
                       
                        <div class="why-choose-v1-single">
                            <div class="media d-flex">
                                <div class="media-left">
                                    <div class="icon"><i class="icofont-industries-2"></i></div>
                                </div>
                                <div class="media-body">
                                    <h2>Great Business Advices</h2>
                                    <p>Atomorum principes eu mea, at nec insolens dissentiet, no vis nulla lucilius. Nam veritus pericula id.</p>
                                </div>
                            </div>
                        </div>
                        <div class="why-choose-v1-single">
                            <div class="media d-flex">
                                <div class="media-left">
                                    <div class="icon"><i class="icofont-rocket-alt-2"></i></div>
                                </div>
                                <div class="media-body">
                                    <h2>Secure, Verifying, Fast Solution</h2>
                                    <p>Atomorum principes eu mea, at nec insolens dissentiet, no vis nulla lucilius. Nam veritus pericula id.</p>
                                </div>
                            </div>
                        </div>
                        <div class="why-choose-v1-single">
                            <div class="media d-flex">
                                <div class="media-left">
                                    <div class="icon"><i class="icofont-live-support"></i></div>
                                </div>
                                <div class="media-body">
                                    <h2>Life Time Support</h2>
                                    <p>Atomorum principes eu mea, at nec insolens dissentiet, no vis nulla lucilius. Nam veritus pericula id.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="why-choose-v1">
                    <div class="why-choose-v1-wrap">
                       
                        <div class="why-choose-v1-single">
                            <div class="media d-flex">
                                <div class="media-left">
                                    <div class="icon"><i class="icofont-industries-2"></i></div>
                                </div>
                                <div class="media-body">
                                    <h2>Great Business Advices</h2>
                                    <p>Atomorum principes eu mea, at nec insolens dissentiet, no vis nulla lucilius. Nam veritus pericula id.</p>
                                </div>
                            </div>
                        </div>
                        <div class="why-choose-v1-single">
                            <div class="media d-flex">
                                <div class="media-left">
                                    <div class="icon"><i class="icofont-rocket-alt-2"></i></div>
                                </div>
                                <div class="media-body">
                                    <h2>Secure, Verifying, Fast Solution</h2>
                                    <p>Atomorum principes eu mea, at nec insolens dissentiet, no vis nulla lucilius. Nam veritus pericula id.</p>
                                </div>
                            </div>
                        </div>
                        <div class="why-choose-v1-single">
                            <div class="media d-flex">
                                <div class="media-left">
                                    <div class="icon"><i class="icofont-live-support"></i></div>
                                </div>
                                <div class="media-body">
                                    <h2>Life Time Support</h2>
                                    <p>Atomorum principes eu mea, at nec insolens dissentiet, no vis nulla lucilius. Nam veritus pericula id.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<style>
    /*** 
=============================================
    Working Process Area Style      
=============================================
***/
    .working-process-area {
        position: relative;
        display: block;
        padding: 100px 0 60px;
    }

    .working-process {}

    .working-process ul {}

    .working-process ul li {
        position: relative;
        display: block;
        float: left;
        width: 270px;
        text-align: center;
        margin-right: 30px;
        margin-bottom: 40px;
    }

    .working-process ul li.martop50 {
        margin-top: 50px;
    }

    .working-process ul li.arrow:before {
        position: absolute;
        top: 38px;
        right: -68px;
        width: 109px;
        height: 44px;
        background: url(https://st.ourhtmldemo.com/new/Enduz/images/icon/arrow-bottom.png);
        background-repeat: no-repeat;
        content: "";
    }

    .working-process ul li.arrow.top:before {
        position: absolute;
        top: -12px;
        right: -68px;
        width: 109px;
        height: 44px;
        background: url(https://st.ourhtmldemo.com/new/Enduz/images/icon/arrow-top.png);
        background-repeat: no-repeat;
        content: "";
    }

    .working-process ul li:last-child {
        margin-right: 0;
    }

    .working-process ul li .single-item {}

    .working-process ul li .single-item .icon-holder {
        position: relative;
        display: block;
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        padding: 24px 0 15px;
        border: 1px solid #f3f3f3;
        transition: all 0.3s ease-in-out 0s;
    }

    .working-process ul li:hover .single-item .icon-holder {
        background: #fec144;
        border-color: #fec144;
    }

    .working-process ul li .single-item .icon-holder span:before {
        color: #222222;
        font-size: 30px;
        line-height: 30px;
    }

    .working-process ul li .single-item .icon-holder .count-box {
        position: absolute;
        top: -1px;
        left: -11px;
        width: 30px;
        height: 30px;
        border: 1px solid #f5f5f4;
        background: #f5f5f4;
        border-radius: 50%;
        transition: all 0.7s ease-in-out 0s;
    }

    .working-process ul li:hover .single-item .icon-holder .count-box {
        background: #ffffff;
    }

    .working-process ul li .single-item .icon-holder .count-box h4 {
        color: #222222;
        font-size: 16px;
        font-weight: 400;
        line-height: 30px;
    }

    .working-process ul li .single-item .text-holder {
        position: relative;
        display: block;
        margin-top: 40px;
        border: 1px solid #f2f2f2;
        padding: 45px 15px 43px;
        border-radius: 4px;
        -webkit-box-shadow: 0px 2px 8px 0px rgba(242, 242, 242, 1);
        -moz-box-shadow: 0px 2px 8px 0px rgba(242, 242, 242, 1);
        box-shadow: 0px 2px 8px 0px rgba(242, 242, 242, 1);
    }

    .working-process ul li .single-item .text-holder h3 {
        color: #222222;
        font-size: 18px;
        margin: 0 0 1px;
    }

    .working-process ul li .single-item .text-holder span {
        color: #fec144;
        font-size: 15px;
    }

    .working-process ul li .single-item .text-holder p {
        margin: 13px 0 0;
    }
</style>




<section class="working-process-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="title">Working Process</div>
            <div class="inner">
                <div class="border1"></div>
                <span>Way for Solution</span>
                <div class="border2"></div>
            </div>
            <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to enjoy a pleasure that has no annoying consequences.</p>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="working-process">
                    <ul class="clearfix">
                        <li class="arrow wow fadeInDown animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInDown;">
                            <div class="single-item">
                                <div class="icon-holder">
                                    <span class="icon-molding-machine"></span>
                                    <div class="count-box counted">
                                        <h4>1</h4>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3>Cold Rolling</h3>
                                    <span>Shaping</span>
                                    <p>Safety and innovation are the everything together.</p>
                                </div>
                            </div>
                        </li>
                        <li class="arrow top martop50 wow fadeInUp animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                            <div class="single-item">
                                <div class="icon-holder">
                                    <span class="icon-conveyor"></span>
                                    <div class="count-box counted">
                                        <h4>2</h4>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3>Machining</h3>
                                    <span>Drilling</span>
                                    <p>How this mistaken denouncing pleasure praisings.</p>
                                </div>
                            </div>
                        </li>
                        <li class="arrow wow fadeInDown animated" data-wow-delay="900ms" style="visibility: visible; animation-delay: 900ms; animation-name: fadeInDown;">
                            <div class="single-item">
                                <div class="icon-holder">
                                    <span class="icon-conveyor-1"></span>
                                    <div class="count-box counted">
                                        <h4>3</h4>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3>Heat Treatment</h3>
                                    <span>Tempering</span>
                                    <p>Idea of pleasure praisings was complete system.</p>
                                </div>
                            </div>
                        </li>
                        <li class="martop50 wow fadeInUp animated" data-wow-delay="1200ms" style="visibility: visible; animation-delay: 1200ms; animation-name: fadeInUp;">
                            <div class="single-item">
                                <div class="icon-holder">
                                    <span class="icon-miscellaneous"></span>
                                    <div class="count-box counted">
                                        <h4>4</h4>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3>Surface Treatment</h3>
                                    <span>Carburizing</span>
                                    <p>Know how too pursue pleasures encounter consences.</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>










<style>
    .specialization {
        position: relative;
        z-index: 0;
        background: #ffffff;
        padding: 150px 0 100px;
    }

    .specialization .specialization_single {
        padding-bottom: 50px;
    }

    .specialization .specialization_single .info_icon {
        padding-bottom: 45px;
    }

    .specialization .specialization_single .info_icon i:before {
        display: block;
        text-align: center;
        line-height: 90px;
        height: 90px;
        width: 90px;
        border-radius: 20px;
        background: linear-gradient(-125deg, #4ca2ff 0%, #092ace 100%);
        font-size: 50px;
        margin: 0;
        color: #ffffff;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        -webkit-box-shadow: 0 0 90px 0 rgba(47, 47, 47, 0.1);
        box-shadow: 0 0 90px 0 rgba(47, 47, 47, 0.1);
    }

    .specialization .specialization_single h3 {
        position: relative;
        font-size: 20px;
    }

    .specialization .specialization_single p {
        margin: 0;
        padding: 20px 0 0;
    }
</style>
<section class="specialization">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Our Industrial <span>Specialization</span></h2>
                    <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="specialization_single">
                    <div class="info_icon">
                        <i class="flaticon-team"></i>
                    </div>
                    <h3>Professional <span>Team</span></h3>
                    <p>Minimum viable product sticky note concordances prototype creative lab quantitative is qualitative concordances grok integrate Waterfall is so and late user story prototype.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="specialization_single">
                    <div class="info_icon">
                        <i class="flaticon-research"></i>
                    </div>
                    <h3>Market <span>Research</span></h3>
                    <p>Minimum viable product sticky note concordances prototype creative lab quantitative is qualitative concordances grok integrate Waterfall is so and late user story prototype.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="specialization_single">
                    <div class="info_icon">
                        <i class="flaticon-customer-service"></i>
                    </div>
                    <h3>Great <span>Support</span></h3>
                    <p>Minimum viable product sticky note concordances prototype creative lab quantitative is qualitative concordances grok integrate Waterfall is so and late user story prototype.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="specialization_single">
                    <div class="info_icon">
                        <i class="flaticon-home"></i>
                    </div>
                    <h3>Smart <span>Technology</span></h3>
                    <p>Minimum viable product sticky note concordances prototype creative lab quantitative is qualitative concordances grok integrate Waterfall is so and late user story prototype.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="specialization_single">
                    <div class="info_icon">
                        <i class="flaticon-service"></i>
                    </div>
                    <h3>Full Of <span>Services</span></h3>
                    <p>Minimum viable product sticky note concordances prototype creative lab quantitative is qualitative concordances grok integrate Waterfall is so and late user story prototype.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="specialization_single">
                    <div class="info_icon">
                        <i class="flaticon-shield"></i>
                    </div>
                    <h3>Super <span>Safety</span></h3>
                    <p>Minimum viable product sticky note concordances prototype creative lab quantitative is qualitative concordances grok integrate Waterfall is so and late user story prototype.</p>
                </div>
            </div>
        </div>
    </div>
</section>





<?php include('footer.php') ?>
<script>
    new Swiper(".gallery .swiper", {
        loop: true,
        loopAdditionalSlides: 1,
        centeredSlides: true,
        speed: 400,
        // autoplay: {
        // 	delay: 5000,
        // 	disableOnInteraction: false,
        // },
        pagination: {
            el: ".gallery .swiper-pagination",
            clickable: true
        },
        navigation: {
            nextEl: ".gallery .swiper-button-next",
            prevEl: ".gallery .swiper-button-prev"
        },
        slidesPerView: 1,
        spaceBetween: 0,
        breakpoints: {
            // 768px 以上の場合
            768: {
                spaceBetween: 0
            }
        }
    });
</script>