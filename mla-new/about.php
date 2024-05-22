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
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }



  ul {
    list-style: none;
  }

  .tabs {
    justify-content: space-around;
    gap: 10px;
    width: 80%;
    height: 100px;
    margin: auto;
    margin-top: 50px;
    display: flex;
    align-items: center;
    box-shadow: 10px 10px 19px #ffffff, -10px -10px 19px #ffffff;
    overflow: hidden;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
  }

  .tabs li {
    border-radius: 10px;
    font-size: 24px;
    background-color: #e6e6e6;
    width: 25%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #000;

    transition: .5s;
    -webkit-transition: .5s;
    -moz-transition: .5s;
    -ms-transition: .5s;
    -o-transition: .5s;
    cursor: pointer;
  }

  .tabs li:hover {
    background: linear-gradient(145deg, #f58a3a, #f58a3a);
    box-shadow: 10px 10px 19px #ffffff, -10px -10px 19px #ffffff;
    color: #ffffff;
    position: relative;
    z-index: 1;
    border-radius: 10px;
  }

  .active {
    background: linear-gradient(145deg, #f68531, #f28c40);
    box-shadow: 10px 10px 19px #ffffff, -10px -10px 19px #ffffff;
    color: #ffffff !important;
    position: relative;
    z-index: 1;
    border-radius: 10px;
  }

  .contents {
    width: 80%;
    margin: auto;
    margin-top: 50px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 30px;
  }

  .box {
    gap: 20px;
    background: linear-gradient(145deg, #e3e3e3, #e3e3e3);
    box-shadow: 10px 10px 19px #ffffff, -10px -10px 19px #ffffff;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    padding: 20px;
    width: 100%;
    animation: moving 1s ease;
    -webkit-animation: moving 1s ease;

  }

  .box img {
    width: 50%;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
  }

  .box h3 {
    color: #000;

    font-size: 2rem;
    margin-bottom: 20px;
  }

  .box p {
    color: #000;
    opacity: .5;

    font-size: 1rem;
  }

  .show {

    align-items: center;
    display: flex;
  }

  .hide {
    display: none;
  }

  @keyframes moving {
    from {
      transform: translateX(-50px);
      -webkit-transform: translateX(-50px);
      -moz-transform: translateX(-50px);
      -ms-transform: translateX(-50px);
      -o-transform: translateX(-50px);
      opacity: 0;
    }

    to {
      transform: translateX(0px);
      -webkit-transform: translateX(0px);
      -moz-transform: translateX(0px);
      -ms-transform: translateX(0px);
      -o-transform: translateX(0px);
      opacity: 1;
    }
  }

  @media only screen and (max-width: 768px) {
    .show {
      flex-wrap: wrap !important;
    }

    .tabs li {
      padding: 10px !important;
      width: 30%;

    }

    .tabs {
      width: 100% !important;
    }

    .box img {
      width: 100%;
    }
  }
</style>
<ul class="tabs">
  <li class="active" data-id="0">Product Range</li>

  <li data-id="1">Quality Control</li>
  <li data-id="2">R & D</li>
</ul>

<div class="contents">

  <div class="box show" data-content="0">
    <img src="./images/aboutus/p2.jpeg" alt="">
    <div>
      <h3>Our Product Range</h3>
      <p>
        Our product range consists of various precipitated chemicals and functional fillers, both synthetic and naturally occurring processed minerals including Precipitated Silica, Hydrated Calcium Silicate, Aluminium Silicate, Zinc Stearate , Calcium Stearate , Calcium Sulphate, Zinc-oxide active/transparent, Levigated / Surface treated China Clays, Micronized Calcite, Dolomite, Talc etc. which find a variety of applications in industries such as rubber / other polymers, paints & coatings, insecticides / pesticides, pharmaceuticals, cosmetics, feedstuff and numerous other industries.
      </p>
    </div>
  </div>



  <div class="box hide" data-content="1">
    <img src="./images/aboutus/quality-check.jpeg" alt="">
    <div>
      <h3>Quality Control</h3>
      <p>
        Quality of our products is defined as it is perceived by our customers. The major factor behind our success is our market driven approach and our uncompromising attitude with respect to quality. We have well-defined and stringent Quality Assurance Systems wherein all employees of MLA Group are responsible for quality, both of the product and the services.
      </p>
    </div>
  </div>

  <div class="box hide" data-content="2">
    <img src="./images/aboutus/research-nd-d.jpeg" alt="">
    <div>
      <h3>Research And devlopment</h3>
      <p>
        To further exploit our core competencies and compete in the global market, we have laid great emphasis on Research, Improvement and Innovation. Our R & D Division equipped with the most sophisticated labs and testing equipments, carries out intensive research on subjects like precipitation, surface treatment and activation and has developed some of the most advanced technologies world over.
      </p>
    </div>
  </div>

</div>
<script>
  'use strict';
  const tabs = document.querySelectorAll('[data-id]');
  const contents = document.querySelectorAll('[data-content]');
  let id = 0;

  tabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      tabs[id].classList.remove('active');
      tab.classList.add('active');
      id = tab.getAttribute('data-id');
      contents.forEach(function(box) {
        box.classList.add('hide');
        if (box.getAttribute('data-content') == id) {
          box.classList.remove('hide');
          box.classList.add('show');
        }
      });
    });
  });
</script>
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
        height: 30rem;
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

      .pb-100 {
        padding-bottom: 100px;
      }
    </style>

  </div>
</section>




<section>
  <div class="section pt-100 pb-100">
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
            <h2 class="title">Vision</h2>
            <div class="content">
              To be the global leader in all our 8 product verticals, driving sustainable solutions that enhance the performance, safety, and environmental compatibility of products across diverse industries.
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
            <h2 class="title">Mission</h2>
            <div class="content">
              Our mission is to deliver high-quality additives through cutting-edge research and development, superior customer service, and a commitment to environmental stewardship. We aim to exceed our customers' expectations by providing tailored solutions that improve product performance and sustainability, fostering a culture of continuous improvement and innovation.
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
            <h2 class="title">Values</h2>
            <div class="content">
              At MLA Group , integrity, business ethics, innovation, collaboration, and excellence are our guiding values. We're committed to delivering consistent quality products sustainably, nurturing partnerships, and exceeding expectations every step of the way.
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
    background-image: url('./images/aboutus/map-text-background-new.png');
    /* Replace with your background image path */
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
    left: 47%;
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
    color: #f68b3a;
  }

  .main-timeline .timeline:nth-child(5n+1) .timeline-year {
    color: #f68b3a;
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
    color: #f68b3a;
  }

  .main-timeline .timeline:nth-child(5n+2) .timeline-year {
    color: #f68b3a;
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

  .main-timeline .timeline:nth-child(5n+3) .timeline-icon {
    color: #f68b3a;
  }

  .main-timeline .timeline:nth-child(5n+3) .timeline-year {
    color: #f68b3a;
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
    color: #f68b3a;
  }

  .main-timeline .timeline:nth-child(5n+4) .timeline-year {
    color: #f68b3a;
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
    color: #f68b3a;
  }

  .main-timeline .timeline:nth-child(5n+5) .timeline-year {
    color: #f68b3a;
  }

  .main-timeline .timeline:nth-child(5n+5) .title {
    color: #0071BD;
  }


  @media screen and (max-width:1200px) {
    .main-timeline .timeline:after {
      border-radius: 88px 0 0 88px;
    }

    .main-timeline .timeline:nth-child(even):after {
      border-radius: 0 88px 88px 0;
    }
  }

  @media screen and (max-width:767px) {
    .main-timeline .timeline {
      margin-top: -19px;
    }

    .main-timeline .timeline:before {
      border-radius: 50px 0 0 50px;
      border-width: 10px;
    }

    .main-timeline .timeline:after {
      height: calc(100% - 18px);
      width: calc(50% - 9px);
      border-radius: 43px 0 0 43px;
      border-width: 10px;
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

    .main-timeline .timeline-icon {
      font-size: 60px;
    }

    .main-timeline .timeline-year {
      font-size: 40px;
    }
  }

  @media screen and (max-width:479px) {
    .main-timeline .timeline-icon {
      font-size: 50px;
      transform: translateY(0);
      top: 25%;
      left: 10%;
    }

    .main-timeline .timeline-year {
      font-size: 25px;
      transform: translateY(0);
      top: 65%;
      left: 9%;
    }

    .main-timeline .content {
      width: 68%;

      margin-left: 10px;
    }

    .main-timeline .title {
      font-size: 18px;
    }

    .main-timeline .timeline:nth-child(even) .timeline-icon {
      right: 10%;
    }

    .main-timeline .timeline:nth-child(even) .timeline-year {
      right: 9%;
    }
  }

  .fa-arrow-down:before {
    content: "\f063";

  }
</style>

<section class="pt-100 pb-100">
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
              <span class="timeline-year">1975</span>
              <div class="timeline-icon">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="content">

                <p class="description">
                  First unit established for manufacturing of White china clay by CMD, Mr ML Agarwal

                </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content">
              <span class="timeline-year">1978</span>
              <div class="timeline-icon">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
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
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
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
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
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
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
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
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="content">
                <h3 class="title"></h3>
                <p class="description">
                  Mr Sumit Agarwal, MTech- IIT Kanpur joins business full time, Zinc oxide Active and PVC stabilizers manufacturing started in unit 4 </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content">
              <span class="timeline-year">2002</span>
              <div class="timeline-icon">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="content">

                <p class="description">
                  All units are ISO 9001 certified </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content">
              <span class="timeline-year">2004</span>
              <div class="timeline-icon">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="content">

                <p class="description">
                  All units brought under the Group name of MLA Group of Industries </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content">
              <span class="timeline-year">2006</span>
              <div class="timeline-icon">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="content">

                <p class="description">
                  ADC foaming agents unit established </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content">
              <span class="timeline-year">2008</span>
              <div class="timeline-icon">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="content">

                <p class="description">
                  Unilever endorses and patronizes UNISIL NK-7, world's highest absorption silica </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content">
              <span class="timeline-year">2009</span>
              <div class="timeline-icon">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="content">

                <p class="description">
                  Manufacturing of Zinc Oxide American process and Arc furnace process started </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content">
              <span class="timeline-year">2009</span>
              <div class="timeline-icon">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="content">

                <p class="description">
                  Manufacturing of Zinc Oxide American process and Arc furnace process started </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content">
              <span class="timeline-year">2014</span>
              <div class="timeline-icon">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="content">

                <p class="description">
                  New unit for manufacturing of Active Zinc Oxide and Metallic stearates with 5 times capacity started </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content">
              <span class="timeline-year">2016</span>
              <div class="timeline-icon">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="content">

                <p class="description">
                  Wax and ester unit established </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content">
              <span class="timeline-year">2018</span>
              <div class="timeline-icon">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="content">

                <p class="description">
                  Pharma excipients unit established </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content">
              <span class="timeline-year">2020</span>
              <div class="timeline-icon">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="content">

                <p class="description">
                  Mr Abhishek Kanodia, B Tech, IIT Kanpur ( ex Unilever) joins the family business as Factory Director </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content">
              <span class="timeline-year">2022</span>
              <div class="timeline-icon">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="content">

                <p class="description">
                  All non mineral units brought under MLA Industries Pvt Ltd </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content">
              <span class="timeline-year">2023</span>
              <div class="timeline-icon">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="content">

                <p class="description">
                  Company moves to Product Owner based model for all its eight product verticals </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<style>
  /* Custom styling */
  .quotation-section {
    background-color: #f8f9fa;
    /* Light gray background */
    padding: 0px 0px 40px;
  }

  .quotation-box {
    border: 4px double #000;
    /* Double thick border */
    padding: 20px;
    text-align: center;
    font-style: italic;
  }

  .quotation-text {
    font-size: 24px;
    color: #333;
    /* Dark text color */
  }

  .container234 {
    width: 98%;
    margin: auto;
  }
</style>


<section class="quotation-section">
  <div class="container234">
    <div class="row">
      <div class="col-md-12">
        <!-- Quotation box -->
        <div class="quotation-box">
          <p class="quotation-text">"Our group's philosophy regarding human-resource can be summarized in Mr. Lester Thurow's words - "The comparative advantage is now human-made. Anybody having brain power can compete in the future market." We have a flexible and adaptive culture and impart continuous on-the-job learning-by-doing trainings and organizing seminars, workshops and lectures by experts."</p>
        </div>
      </div>
    </div>
  </div>
</section>



<style>
  .companies-media img {
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
    -webkit-text-stroke-color: #fe8f34;
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
    font-size: 2rem;
    font-weight: 600;
  }

  .contentindustry {
    color: #fff;
  }

  .gradient-overlay1 {
    position: relative;
  }

  .gradient-overlay1:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(358deg, #000000c2, transparent);
  }

  .contentindustry p {
    color: #fff;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 10px;
    /* Added margin bottom */
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


  .contentindustry {}

  .content-inner-1 {
    padding-top: 50px;
    padding-bottom: 50px;
  }

  .mbuiti-6 {
    margin-top: 40px;
  }

  .application-tab:before {
    opacity: 0.2;
  }
  .contentindustry span{
    font-size: 13px;
  }
</style>
<section class="content-inner application-tab overlay-black-light pbt-100" style="
            background-image: linear-gradient(45deg, #e1e1e1cc, #f4f4f4e0),
              url(https://images.unsplash.com/photo-1546185058-592ead754d27?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
            background-repeat: no-repeat;
            background-size: cover;
          ">
  <div class="container">
    <div class="row about-style2 align-items-xl-center align-items-start">
      <div class="col-lg-3">
        <h3 class="title">COMMUNITY INVOLVEMENT</h3>
      </div>
      <div class="col-lg-7">
        <div class="about-content">
          <div class="style-1">
            <p>
            The MLA Group itself is a well-established industrial entity with a significant economic footprint, boasting a turnover of INR 400 crores and operating several ISO-certified manufacturing facilities. Their broad CSR strategy reflects their holistic approach to business, which integrates economic success with social and environmental responsibility.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="pagination-align justify-content-end">
          <div class="tranding-button-prev btn-prev">
            <i class="flaticon flaticon-left-chevron"></i>
          </div>
          <div class="tranding-button-next btn-next">
            <i class="flaticon flaticon-chevron"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-12 mbuiti-6" style="overflow: hidden">
        <div class="outside-box-right-25">
          <div class="swiper-btn-center-lr appslider">
            <div class="swiper swiper-four">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <div class="dz-media gradient-overlay1">
                      <img src="./images/aboutus/mla-green.jpg" alt="image" />
                      <div class="contentindustry">
                        <p>The MLA Green Kanpur initiative, launched by the MLA Group, is a significant environmental project aimed at enhancing urban greenery in Kanpur. This initiative focuses on planting trees along roadsides, providing much-needed shade for pedestrians, and contributing to the reduction of air pollution in the city. By increasing the green cover, the project not only beautifies urban areas but also plays a crucial role in improving air quality and combating the urban heat island effect.</p>
                        
                      </div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <div class="dz-media gradient-overlay1">
                      <img src="./images/aboutus/satvik-roti.jpg" alt="image" />
                      <div class="contentindustry">
                        <p>Satvik Roti Rolls program provides nutritious and affordable food to those in need, demonstrating their commitment to addressing food insecurity.​.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <div class="dz-media gradient-overlay1">
                      <img src="./images/aboutus/sumit-agarwal-altruist.webp" alt="image" />
                      <div class="contentindustry">
                        <p>The group supports educational advancements through the PRERNA NGO, which works to improve the quality of education in government schools across the region. These efforts include infrastructural improvements, teacher training, and student support programs, aimed at creating a more conducive learning environment</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <div class="dz-media gradient-overlay1">
                      <img src="https://t4.ftcdn.net/jpg/02/28/64/73/360_F_228647361_d4UdgsUUb0AZoGebmPpGt6HL1QPbCpzf.jpg" alt="image" />
                      <div class="contentindustry">
                        <p>Ceramics</p>
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