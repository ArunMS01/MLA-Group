<?php
include('head.php');
?>
<title>MLA</title>
<meta name="description" content="">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
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
      .counternew{
          margin-top:40px;
      }
            @media only screen and (min-width:768px) and (max-width:1180px){
                .main-timeline .timeline-icon{
                    display:none !important;
                }
                .tabs li{
                    width:35% !important;
                }
                .main-timeline .content {
    margin-left: 34vw !important;
    color: #909090;
    width: 42vw !important;
                }
               .counternew .col-md-3{
                   width:50% !important;
               }
            }
        /* Hero section styles */
        .hero {
          position: relative;
          background-image: url('./images/aboutus/banner-about-mla.png');
          /* Replace 'your-image.jpg' with your image URL */
          background-size: cover;
          background-position: center;
          height: 72vh;
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
          /*color:#000;*/
          /*font-size: 1.2rem;*/
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





      <!-- Hero section -->
      <section class="hero">
        <!-- Gradient overlay -->
        <div class="gradient-overlay"></div>

        <!-- Content -->
        <div class="content zoom-in-up" style="z-index: 1;">
          <h1>About Us</h1>
          <p>
            Since its humble beginnings in 1975, when our first unit was established to manufacture aluminium silicate, MLA Group has continued to expand and thrive. Due to our steady growth and diversification, the business now includes four production facilities producing a wide range of additives. We are today India's largest manufacturers of Zinc Oxide Active and Metallic Stearates and amongst the top 3 in all our eight product verticals.
          </p>
        </div>
      </section>









      <style>
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          /*overflow-x:hidden;*/
        }



        ul {
          list-style: none;
        }

        .tabs {
          justify-content: center;
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
          /*border-radius: 10px;*/
          transform: skew(-9deg);
          font-size: 24px;
          background-color: #e6e6e6;
          width: 25%;
          height: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
          color: #000;
border: 1px solid #fff;
          transition: .5s;
          -webkit-transition: .5s;
          -moz-transition: .5s;
          -ms-transition: .5s;
          -o-transition: .5s;
          cursor: pointer;
        }

        .tabs li::before,
        .tabs li::after {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            background: none;
        }

        .tabs li::before {
            top: 0;
            left: 0;
            border-top: 2px solid black;
            border-left: 2px solid black;
        }

        .tabs li::after {
            bottom: 0;
            right: 0;
            border-bottom: 2px solid black;
            border-right: 2px solid black;
        }

        .tabs li:hover::before,
        .tabs li:hover::after {
            animation: borderAnimation 0.5s forwards;
        }

        @keyframes borderAnimation {
            0% {
                width: 0;
                height: 0;
            }
            50% {
                width: 100%;
                height: 0;
            }
            100% {
                width: 100%;
                height: 100%;
            }
        }

        .active {
          background: linear-gradient(145deg, #f68531, #f28c40);
          box-shadow: 10px 10px 19px #ffffff, -10px -10px 19px #ffffff;
          color: #ffffff !important;
          position: relative;
          z-index: 1;
          /*border-radius: 10px;*/
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
        
        @media only screen and (max-width:768px){
               .mt-involement {
    margin-top: 10px !important;
}
        }
        
        @media only screen and (max-width:1300px){
         
            .teamcolinner{
                min-height:37rem !important;
            }
        }

        .box img {
          /*height: 20rem;*/
          /* width: 50%; */
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
.teamGrid p{
    text-align:justify;
}
        .box p {
          color: #000;
          opacity: 1;
            /*text-align:justify;*/
          font-size: 1rem;
        }

        .showboxes {
            justify-content:center;
          align-items: center;
          /*display: flex;*/
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
          :root {
            overflow-x: hidden;
          }

          body {
            overflow-x: hidden;
          }

          .showboxes {
            flex-wrap: wrap !important;
          }

          .tabs li {
            padding: 10px !important;
            width: 30%;
                    min-height: 62px;
            font-size: 13px;
            text-align:center;

          }

          .contents {
            margin-top: 24px;
            width: 95%;
          }

          .tabs {
            width: 100% !important;
            height: auto;
          }

          .box img {
            width: 100%;
            height: auto;
          }
        }


        .counter-product {
          color: #EC721F;
          background: #EC721F;
          font-family: 'Poppins', sans-serif;
          text-align: center;
          width: 200px;
          height: 200px;
          padding: 70px 12px 40px;
          margin: 0 auto;
          border-radius: 50% 0;
          position: relative;
          z-index: 1;
        }

        .counter-product:before {
          content: "";
          background: #fff;
          width: calc(100% - 10px);
          height: calc(100% - 10px);
          border-radius: 50% 50%;
          transform: translateX(-50%) translateY(-50%);
          position: absolute;
          top: 50%;
          left: 50%;
          z-index: -1;
        }

        .counter-product .counter-value {
          font-size: 30px;
          font-weight: 600;
        }

        .counter-product .counter-icon {
          content: "";
          color: #fff;
          background: #EC721F;
          font-size: 25px;
          font-weight: 600;
          width: 50px;
          height: 50px;
          line-height: 50px;
          box-shadow: 6px 6px 10px rgba(0, 0, 0, 0.5);
          border-radius: 0 0 30px 30px;
          position: absolute;
          top: -10px;
          right: 8px;
        }

        .counter-product .counter-icon:before {
          content: "";
          background: linear-gradient(to top left, #cccaca 49%, transparent 50%);
          width: 10px;
          height: 10px;
          position: absolute;
          top: 0;
          left: -10px;
        }

        .counter-product h3 {
          font-size: 13px;
          font-weight: 600;
          text-transform: uppercase;
          margin: 0 0 10px;
        }

        .counter-product.green {
          background: #048006;
          color: #048006;
        }

        .counter-product.purple {
          background: #BE2EDD;
          color: #BE2EDD;
        }

        @media screen and (max-width: 990px) {
          .counter-product {
            margin-bottom: 50px;
          }
        }

        .pluasymbolcounter{
          font-size: 2rem;
        }
        
        .mt-involement{
            margin-top:100px;
        }
        
        .styleonew{
            margin-bottom:15px;
        }
         .mapmy {
            width: 100%;
            height: 100%;
        }
        
        .mapmy svg{
            
        }
      </style>
      <ul class="tabs">
        <li class="active" data-id="0">Company Overview</li>

        <li data-id="1">Leadership</li>
        <li data-id="2">History</li>
      </ul>

      <div class="contents">

        <div class="box showboxes" data-content="0">
          <div>

            <div>

              <p>
              <p>
              Our product line includes Metallic Stearates , PVC Heat Stabilizers , Precipitated Silica , Aluminium Silicates , ADC ( Blowing Agents ) , Ester Lubricants , Active Zinc Oxide , Snow white China Clay , PE waxes, One pack Lubricants and Pharmaceutical Excipients. These products are used in a wide range of industries, including plastic ,paints, rubber, detergents, pharma etc
              </p>

              <p>
              Our products' quality is defined by our customers' perception. Our success stems from a customer-centric approach and an uncompromising commitment to quality. Every MLA Group employee is responsible for ensuring product and service quality through our stringent Quality Assurance Systems , both of the product and services. 
              </p>

              <p>To emerge as global leaders and innovators, we prioritise Research, Improvement, and Invention. Our R&D Division, with advanced application labs and testing equipment, conducts intensive research on precipitation, surface treatment and activation and application testing, developing cutting-edge technologies.</p>



            </div>

            <div>
              <div class="row align-items-center">
                <div class="col-md-6 map-container">
                      <div class="mapmy"></div>
                  <!-- Image side -->
                  <!--<img src="./images/aboutus/map-mla.png" alt="Image"> <!-- Replace with your image path -->
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
                  <!-- Text side -->
                  <div class="section-head styleonew style-1 ">
                    <h2>Our Footprint</h2>
                  </div>
                 <p>
                 We have an extensive marketing network with head office at Kanpur and marketing associates in almost all industrial cities/hubs in India. Our sales and technical services personnel visit customers regularly to provide excellent before and after sales services. The exports have been increasing sharply and we now cater to 55+ countries including Sri Lanka, Nepal, Bangladesh, and also to Africa, Middle East, South East Asia ,USA and Europe.
                 </p>
                </div>
              </div>
            </div>

            <div class="">
              <div class="overlay-2"></div>
              <div class="container counternew">
                <div class="row">
                  <div class="col-md-3 col-sm-6">
                    <div class="counter-product wow fadeInRight" data-wow-delay="0.6s">
                   <span><span class="counter-value">55 </span> <span class="pluasymbolcounter">+</span> </span>    
                      <h3>Countries Catered</h3>
                      <div class="counter-icon"><i class="fa fa-check"></i></div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="counter-product wow fadeInRight" data-wow-delay="0.6s">
                    <span> <span class="counter-value">3000 </span> <span class="pluasymbolcounter">+</span> </span>
                      <h3>Total Customer</h3>
                      <div class="counter-icon"><i class="fa fa-check"></i></div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="counter-product wow fadeInRight" data-wow-delay="0.6s">
                    <span> <span class="counter-value">10000 </span> <span class="pluasymbolcounter">+</span> </span>
                      <h3>Manufacturing Capacity in MT</h3>
                      <div class="counter-icon"><i class="fa fa-check"></i></div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="counter-product wow fadeInRight" data-wow-delay="0.6s">
                    <span><span class="counter-value">100 </span>  <span class="pluasymbolcounter">+</span> </span>
                      <h3>Products Manufactured</h3>
                      <div class="counter-icon"><i class="fa fa-check"></i></div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
             <div class="row about-style2 align-items-xl-center mt-involement align-items-start">
            <div class="col-lg-3">
              <h2 class="title">Community Involvement</h2>
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
                  <div class="swiper swiper-blog-post">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                          <div class="dz-media gradient-overlay1">
                            <img src="./images/aboutus/mla-green.jpg" alt="image" />
                            <div class="contentindustry">
                              <div>
                                <h4 class="text-whote">MLA Green Kanpur</h4>
                                <p>We have 2 dedicated vehicles with a target to carry out 30-40 subsidized plantations everyday along roadsides outside people’s homes and they are entrusted the responsbility to take care of these plants, hence ensuring community involvement</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="swiper-slide">
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                          <div class="dz-media gradient-overlay1">
                            <img src="./images/aboutus/satvik-roti.jpg" alt="image" />
                            <div class="contentindustry">
                              <div>
                                <h4 class="text-whote">Satvik Roti Rolls</h4>
                                <p> We have one e rickshaw and 7 e bikes with a target to distribute 3000-4000 roti rolls / burgers / kadi chawal bowls to the poor every day, at a subsidized price </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="swiper-slide">
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                          <div class="dz-media gradient-overlay1">
                            <img src="./images/scholarship.jpg" alt="image" />
                            <div class="contentindustry">
                              <div>
                                <h4 class="text-whote">Scholarships</h4>
                                <p>Scholarship programme for meritorious staff wards </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>




                      <div class="swiper-slide">
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                          <div class="dz-media gradient-overlay1">
                            <img src="./images/food.webp" alt="image" />
                            <div class="contentindustry">
                              <div>
                                <h4 class="text-whote">Food parcels distribution</h4>
                                <p>Food parcels distribution to 20 old aged helpless people everyday totally free of cost </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>





                      <div class="swiper-slide">
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                          <div class="dz-media gradient-overlay1">
                            <img src="./images/reconstructionimages.jpg" alt="image" />
                            <div class="contentindustry">
                              <div>
                                <h4 class="text-whote">Reconsruction of temples</h4>
                                <p>Reconsruction of temples in kanpur and nearby areas </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="swiper-slide">
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                          <div class="dz-media gradient-overlay1">
                            <img src="./images/cultural.jpg" alt="image" />
                            <div class="contentindustry">
                              <div>
                                <h4 class="text-whote">Programmes</h4>
                                <p>Organization of religious and cultural programmes on a regular basis </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="swiper-slide">
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                          <div class="dz-media gradient-overlay1">
                            <img src="./images/blanket.webp" alt="image" />
                            <div class="contentindustry">
                              <div>
                                <h4 class="text-whote">Distribution Programmes</h4>
                                <p>Distributor of blankets, food and sweets to the poor totally free of cost from time to time in co-ordination with various ngos and administration. </p>
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

        </div>



        <div class="box hide" data-content="1">

          <div>
            <style>
              .teamWrapper {
                margin-top: 50px;
              }

              .teamGrid {
                display: grid;
    grid-template-columns: 42% 42%;
    column-gap: 1.5%;
    justify-content: space-around;
    margin-top: 100px;
              }

              .avatar {
                position: absolute;
                left: 0;
                right: 0;
                top: -80px;
                text-align: center;
              }

           

              .avatar>img {
                width: 150px;
                margin: auto;
                height: 150px;
                object-fit:contain;
                border-radius: 50%;
                border: 1px solid rgb(170 170 173/ 1);
                box-shadow: 0px 3px 10px 3px rgb(170 170 173 / 0.5);
              }

              .teamcolinner {
                position: relative;
                border: 1px dashed #ddd;
                min-height: 100px;
                background: #fff;
                z-index: 9;
                min-height:30rem;
              }

              .teamcol {
                padding: 15px;
                background: #fff;
                border-radius: 10px;
                position: relative;
                transition: transform 1s ease-in-out;
              }

              .teamcol:hover {
                transform: translateY(-30px);
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
                margin-top: 80px;
              }

              .member-info {
                padding: 10px 20px;
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
                  margin-top:120px;
              }
            </style>
            <div>
            <div class="teamWrapper">
              <div class="containerssss">
              
                <div class="teamGrid">
                
                  <div class="colmun mbcolteam">
                    <div class="teamcol">
                      <div class="teamcolinner">
                        <div class="avatar"><img src="images/Mr_Murari_Lal_Agarwal_-removebg-preview.png" alt="Member"></div>
                        <div class="member-name">
                          <h2 align="center">Mr. Murari Lal Agarwal
                          </h2>
                        </div>
                        <div class="member-info">
                          <p align="center">Mr. Murari Lal Agarwal, the visionary behind M.L.A. Group of Industries, established a global enterprise in 1975, MLA Group , which is currently exporting to 55+ countries. A chemistry graduate, he expanded his business through innovation, dedication, and hard work. Known for his cheerful personality and philanthropy, He holds key positions in organizations such as PIA, FITA, and the Kanpur Merchants Association. He is a patron of various community organizations, actively supporting social initiatives and contributing to numerous charitable causes, making a significant impact on both industry and society.</p>
                        </div>
                        <!--<div class="member-mail">-->
                        <!--  <p align="center"> <a href="mailto:@gmail.com">mailto:@gmail.com</a> </p>-->
                        <!--</div>-->
                        <div class="member-social">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="colmun">
                    <div class="teamcol">
                      <div class="teamcolinner">
                        <div class="avatar"><img src="images/Mr._Sumit_Agarwal-removebg-preview.png" alt="Member"></div>
                        <div class="member-name">
                          <h2 align="center">Mr. Sumit Agarwal
                          </h2>
                        </div>
                        <div class="member-info">
                          <p align="center">Mr. Sumit Agarwal, the Managing Director of MLA Group, with Masters in Chemistry from IIT Kanpur , brings extensive expertise in leading strategic initiatives and fostering innovation and R&D. With a proven track record in business development and operational excellence, he spearheads the company's growth across diverse sectors, ensuring a commitment to quality and customer satisfaction. His visionary leadership and dedication drive MLA Group towards sustained success and global prominence.</p>
                        </div>
                        <!--<div class="member-mail">-->
                        <!--  <p align="center"> <a href="mailto:@gmail.com">mailto:@gmail.com</a> </p>-->
                        <!--</div>-->
                        <div class="member-social">
                         
                        </div>
                      </div>
                    </div>
                  </div>
                       <div class="colmun mt-2222">
                    <div class="teamcol">
                      <div class="teamcolinner">
                        <div class="avatar"><img src="images/Mr_Saurabh_Agarwal_-removebg-preview.png" alt="Member"></div>
                        <div class="member-name">
                          <h2 align="center">Mr. Saurabh Agarwal
                          </h2>
                        </div>
                        <div class="member-info">
                          <p align="center">Mr. Saurabh Agarwal, Director – Admin at MLA Industries Pvt Ltd, boasts over 34 years of extensive experience in chemical industry. His expertise spans operations management, process optimization, and safety compliance.Mr. Saurabh currently spearheads logistics, ensuring seamless operations at MLA Industries Pvt Ltd. His profound knowledge of industry regulations and unwavering dedication to operational excellence uphold the company's high standards of quality and reliability in product delivery.</p>
                        </div>
                        <!--<div class="member-mail">-->
                        <!--  <p align="center"> <a href="mailto:@gmail.com">mailto:@gmail.com</a> </p>-->
                        <!--</div>-->
                        <div class="member-social">
                         
                        </div>
                      </div>
                    </div>
                  </div>
                       <div class="colmun mt-2222">
                    <div class="teamcol">
                      <div class="teamcolinner">
                        <div class="avatar"><img src="images/Mr_Abhishek_Kanodia-removebg-preview.png" alt="Member"></div>
                        <div class="member-name">
                          <h2 align="center">Mr. Abhishek Kanodia
                          </h2>
                        </div>
                        <div class="member-info">
                          <p align="center">Mr. Abhishek Kanodia, Director at MLA Group of Industries, brings over 13 years of expertise in Supply Chain Management and advanced manufacturing standards. With a B.Tech in Chemical Engineering from IIT Kanpur, his career highlights include pivotal roles at Hindustan Unilever Limited, where he excelled as Factory Manager and Senior Innovation & Technology Manager. Mr. Abhishek integrates cutting-edge manufacturing practices into MLA Group, ensuring operational excellence across various sectors. His strategic leadership drives innovation and efficiency in manufacturing , setting benchmarks in quality and reliability.</p>
                        </div>
                        <!--<div class="member-mail">-->
                        <!--  <p align="center"> <a href="mailto:@gmail.com">mailto:@gmail.com</a> </p>-->
                        <!--</div>-->
                        <div class="member-social">
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          
            <style>
                .ytupper{
                    margin-top:50px;
                }
                .ytupper .dz-yte{
                    z-index:10;
                    text-align:center;
                    position:relative;
                }
                 .ytupper .dz-yte img{
                     margin:auto;
                 }
                 
                 .mainshow{
                     display:none;
                 }
                 
                 @media only screen and (max-width:768px){
                     .mbbhide{
                         display:none;
                     }
                      .mainshow{
                         display:block !important;
                     }
                 }
                 .ytupper .btn-prev:hover i{
                     color:#000;
                 }
                  .ytupper .btn-next:hover i{
                     color:#000;
                 }
                  .ytupper .btn-next{
                      right: 58px;
                  }
                   .ytupper .btn-prev{
                       left: 58px;
                   }
                   
                 .ytupper .btn-next,
                 .ytupper .btn-prev{
                     background:#ffffff;
                     width:40px;
                     height:40px;
                     z-index:10;
                     font-size:10px
                 }
                 
                 .frame {
  background-color: #ddc;
  border: solid 20px #333;
  border-bottom-color: #333;
  border-left-color: #333;
  border-radius: 2px;
  border-right-color: #333;
  border-top-color: #333;
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, .25) inset, 0 5px 10px 5px rgba(0, 0, 0, .25);
  box-sizing: border-box;
  display: inline-block;
  /*margin: 100px 100px;*/
  /*height: 600px;*/
  padding: 12px;
  position: relative;
  text-align: center;
}

.frame:before {
  border-radius: 2px;
  bottom: -8px;
  box-shadow: 0 2px 5px 0 #FF9800 inset;
  content: "";
  left: -8px;
  position: absolute;
  right: -8px;
  top: -8px;
}

.frame:after {
  border-radius: 2px;
  bottom: -10px;
  box-shadow: 0 2px 5px 0 #FF9800;
  content: "";
  left: -10px;
  position: absolute;
  right: -10px;
  top: -10px;
}

                 
            </style>
            <div class="ytupper">
                <div class="section-head styleonew style-1 text-center">
                    <h2>Meet Our Team</h2>
                  </div>
                  <div class="row align-items-center">
                      <div class="col-md-2 mbbhide">
                          <div class="pagination-align justify-content-end">
                <div class="tranding-button-prev btn-prev">
                  <i class="flaticon flaticon-left-chevron"></i>
                </div>
            
              </div>
                      </div>
                      <div class="col-md-8">
                            <div class="swiper-btn-center-lr">
                  <div class="swiper swiper-blog-post-sliderss">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="teamcolss">
                          <div class="dz-yte ">
                            <img src="images/team23.webp">
                          </div>
                        </div>
                      </div>

                      <div class="swiper-slide">
                        <div class="teamcolss">
                          <div class="dz-yte ">
                             <img src="images/ourteam3 (1).webp">
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                  </div>
                      </div>
                      <div class="col-md-2 mbbhide">
                           <div class="pagination-align justify-content-start">

                <div class="tranding-button-next btn-next">
                  <i class="flaticon flaticon-chevron"></i>
                </div>
              </div>
                      </div>
                  </div>
                  
          
                 
                </div>
                <div class="row mt-3 mainshow">
            <div class="col-lg-12">
              <div class="pagination-align justify-content-center">
                <div class="tranding-button-prev btn-prev">
                  <i class="flaticon flaticon-left-chevron"></i>
                </div>
                <div class="tranding-button-next btn-next">
                  <i class="flaticon flaticon-chevron"></i>
                </div>
              </div>
            </div>
            </div>
          </div>
          
          
          
          
        </div>

        <div class="box hide" data-content="2">

          <div>
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
                
                  <div class="timeline hideerm">
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
                  <div class="timeline hideerm">
                    <a href="#" class="timeline-content">
                      <span class="timeline-year">1998</span>
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
                  <div class="timeline hideerm">
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
                  <div class="timeline hideerm">
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
                  <div class="timeline hideerm">
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
                  <div class="timeline hideerm">
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
                  <div class="timeline hideerm">
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
                  <div class="timeline hideerm">
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
                  <div class="timeline hideerm">
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
                  <div class="timeline hideerm">
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
                  <div class="timeline hideerm">
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
                  <div class="timeline hideerm">
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
                  <div class="timeline hideerm">
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
                  <div class="timeline hideerm">
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
               <div class="col-md-12 text-center"> <a id="showmore">Show More</a></div>
            </div>
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
                box.classList.add('showboxes');
              }
            });
          });
        });
        
        document.getElementById('showmore').addEventListener('click', function() {
    var elements = document.querySelectorAll('.hideerm');
    elements.forEach(function(element) {
        element.style.display = (element.style.display === 'none' || element.style.display === '') ? 'block' : 'none';
    });
    this.textContent = (this.textContent === 'Show More') ? 'Show Less' : 'Show More';
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
            .mt-2222 {
    margin-top: 85px !important;
}
          .hero h1{
            font-size: 2rem;
          }
          .mbcolteam{
            margin-bottom: 5rem;
          }
          .teamGrid{
            grid-template-columns: auto !important;

          }
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

          .border-box {
            height: auto;
          }

          .rowgap {
            gap: 122px;
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







      <style>
        /* Achievement Section 
============== */

        .achievement-area {
          background-image: url(./images/aboutus/counter-image.jpeg);
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
          margin-left: 57px;
          color: #65c7d0;
          font-size: 32px;
          font-weight: 600;
          display: inline-block;
          transform: translatey(-50%);
          position: absolute;
          top: 50%;
          left: 10%;
        }

        .main-timeline .timeline-icon {
          color: #65c7d0;
          font-size: 49px;
          display: inline-block;
          transform: translateY(-50%);
          position: absolute;
          left: 49%;
          top: 50%;
        }

        .main-timeline .content {

          margin-left: 42vw;
          color: #909090;
          width: 33vw;
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
            display: none;
            transform: translateY(0);
            top: 25%;
            left: 10%;
          }

          .main-timeline .timeline-year {
            font-size: 25px;
            margin-left: 0;
            transform: translateY(0);
            top: 32px;
            left: 9%;
          }

          .main-timeline .content {
            width: 90%;
            padding: 34px 20px 34px 0;
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



      <style>
        /* Custom styling */
        .quotation-section {
          background-color: #f8f9fa;
          /* Light gray background */
          padding: 0px 0px 40px;
          margin-top: 40px;
        }

        .quotation-box {
          border: 4px double #f48a3a;
          /* Double thick border */
          padding: 20px;
          text-align: center;
          font-style: italic;
        }

        .quotation-text {
          font-size: 19px;
          color: #333;
          /* Dark text color */
        }

        .container234 {
          width: 98%;
          margin: auto;
        }
      </style>


      <!--<section class="quotation-section">-->
      <!--  <div class="container234">-->
      <!--    <div class="row">-->
      <!--      <div class="col-md-12">-->
              <!-- Quotation box -->
      <!--        <div class="quotation-box">-->
      <!--          <p class="quotation-text">"Our group's philosophy regarding human-resource can be summarized in Mr. Lester Thurow's words - "The comparative advantage is now human-made. Anybody having brain power can compete in the future market." We have a flexible and adaptive culture and impart continuous on-the-job learning-by-doing trainings and organizing seminars, workshops and lectures by experts."</p>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</section>-->



      <style>
        /* .companies-media img {
    height: 99%;
    width: 45%;

  } */

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

        @media only screen and (max-width: 768px) {
          .outside-box-right-25 {
            margin-right: 1vw !important;
          }
        }
      </style>


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
          height: 32rem;
          border-radius: 20px;
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

        .contentindustry span {
          font-size: 13px;
        }

        .text-whote {
          color: #fff;
        }
      </style>
      <!--<section class="content-inner application-tab overlay-black-light pbt-100" style="background-image:url(images/appit.jpg); background-repeat: no-repeat; background-size: cover;background-position: bottom;">-->
      <!--  <div class="container">-->
      <!--    <div class="row about-style2 align-items-xl-center align-items-start">-->
      <!--      <div class="col-lg-3">-->
      <!--        <h3 class="title">Community Involvement</h3>-->
      <!--      </div>-->
      <!--      <div class="col-lg-7">-->
      <!--        <div class="about-content">-->
      <!--          <div class="style-1">-->
      <!--            <p>-->
      <!--              The MLA Group itself is a well-established industrial entity with a significant economic footprint, boasting a turnover of INR 400 crores and operating several ISO-certified manufacturing facilities. Their broad CSR strategy reflects their holistic approach to business, which integrates economic success with social and environmental responsibility.-->
      <!--            </p>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--      <div class="col-lg-2">-->
      <!--        <div class="pagination-align justify-content-end">-->
      <!--          <div class="tranding-button-prev btn-prev">-->
      <!--            <i class="flaticon flaticon-left-chevron"></i>-->
      <!--          </div>-->
      <!--          <div class="tranding-button-next btn-next">-->
      <!--            <i class="flaticon flaticon-chevron"></i>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->

      <!--      <div class="col-lg-12 mbuiti-6" style="overflow: hidden">-->
      <!--        <div class="outside-box-right-25">-->
      <!--          <div class="swiper-btn-center-lr appslider">-->
      <!--            <div class="swiper swiper-blog-post">-->
      <!--              <div class="swiper-wrapper">-->
      <!--                <div class="swiper-slide">-->
      <!--                  <div class="wow fadeInUp" data-wow-delay="0.4s">-->
      <!--                    <div class="dz-media gradient-overlay1">-->
      <!--                      <img src="./images/aboutus/mla-green.jpg" alt="image" />-->
      <!--                      <div class="contentindustry">-->
      <!--                        <div>-->
      <!--                          <h4 class="text-whote">MLA Green Kanpur</h4>-->
      <!--                          <p>We have 2 dedicated vehicles with a target to carry out 30-40 subsidized plantations everyday along roadsides outside people’s homes and they are entrusted the responsbility to take care of these plants, hence ensuring community involvement</p>-->
      <!--                        </div>-->
      <!--                      </div>-->
      <!--                    </div>-->
      <!--                  </div>-->
      <!--                </div>-->

      <!--                <div class="swiper-slide">-->
      <!--                  <div class="wow fadeInUp" data-wow-delay="0.4s">-->
      <!--                    <div class="dz-media gradient-overlay1">-->
      <!--                      <img src="./images/aboutus/satvik-roti.jpg" alt="image" />-->
      <!--                      <div class="contentindustry">-->
      <!--                        <div>-->
      <!--                          <h4 class="text-whote">Satvik Roti Rolls</h4>-->
      <!--                          <p> We have one e rickshaw and 7 e bikes with a target to distribute 3000-4000 roti rolls / burgers / kadi chawal bowls to the poor every day, at a subsidized price </p>-->
      <!--                        </div>-->
      <!--                      </div>-->
      <!--                    </div>-->
      <!--                  </div>-->
      <!--                </div>-->

      <!--                <div class="swiper-slide">-->
      <!--                  <div class="wow fadeInUp" data-wow-delay="0.4s">-->
      <!--                    <div class="dz-media gradient-overlay1">-->
      <!--                      <img src="./images/scholarship.jpg" alt="image" />-->
      <!--                      <div class="contentindustry">-->
      <!--                        <div>-->
      <!--                          <h4 class="text-whote">Scholarships</h4>-->
      <!--                          <p>Scholarship programme for meritorious staff wards </p>-->
      <!--                        </div>-->
      <!--                      </div>-->
      <!--                    </div>-->
      <!--                  </div>-->
      <!--                </div>-->




      <!--                <div class="swiper-slide">-->
      <!--                  <div class="wow fadeInUp" data-wow-delay="0.4s">-->
      <!--                    <div class="dz-media gradient-overlay1">-->
      <!--                      <img src="./images/aboutus/sumit-agarwal-altruist.webp" alt="image" />-->
      <!--                      <div class="contentindustry">-->
      <!--                        <div>-->
      <!--                          <h4 class="text-whote">Food parcels distribution</h4>-->
      <!--                          <p>Food parcels distribution to 20 old aged helpless people everyday totally free of cost </p>-->
      <!--                        </div>-->
      <!--                      </div>-->
      <!--                    </div>-->
      <!--                  </div>-->
      <!--                </div>-->





      <!--                <div class="swiper-slide">-->
      <!--                  <div class="wow fadeInUp" data-wow-delay="0.4s">-->
      <!--                    <div class="dz-media gradient-overlay1">-->
      <!--                      <img src="./images/reconstructionimages.jpg" alt="image" />-->
      <!--                      <div class="contentindustry">-->
      <!--                        <div>-->
      <!--                          <h4 class="text-whote">Reconsruction of temples</h4>-->
      <!--                          <p>Reconsruction of temples in kanpur and nearby areas </p>-->
      <!--                        </div>-->
      <!--                      </div>-->
      <!--                    </div>-->
      <!--                  </div>-->
      <!--                </div>-->

      <!--                <div class="swiper-slide">-->
      <!--                  <div class="wow fadeInUp" data-wow-delay="0.4s">-->
      <!--                    <div class="dz-media gradient-overlay1">-->
      <!--                      <img src="./images/cultural.jpg" alt="image" />-->
      <!--                      <div class="contentindustry">-->
      <!--                        <div>-->
      <!--                          <h4 class="text-whote">Programmes</h4>-->
      <!--                          <p>Organization of religious and cultural programmes on a regular basis </p>-->
      <!--                        </div>-->
      <!--                      </div>-->
      <!--                    </div>-->
      <!--                  </div>-->
      <!--                </div>-->


      <!--                <div class="swiper-slide">-->
      <!--                  <div class="wow fadeInUp" data-wow-delay="0.4s">-->
      <!--                    <div class="dz-media gradient-overlay1">-->
      <!--                      <img src="./images/blanket.webp" alt="image" />-->
      <!--                      <div class="contentindustry">-->
      <!--                        <div>-->
      <!--                          <h4 class="text-whote">Distribution Programmes</h4>-->
      <!--                          <p>Distributor of blankets, food and sweets to the poor totally free of cost from time to time in co-ordination with various ngos and administration. </p>-->
      <!--                        </div>-->
      <!--                      </div>-->
      <!--                    </div>-->
      <!--                  </div>-->
      <!--                </div>-->


      <!--              </div>-->
      <!--            </div>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</section>-->


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
        .team-section {
          background-color: #f8f9fa;
          /* Light grey background */
          padding: 50px 0;
        }

        .team-heading {
          text-align: center;
          margin-bottom: 30px;
        }

        .team-image-box {
          width: 80%;
          margin: 0 auto;
          padding-bottom: 20px;
          /* Space below the image */
        }

        .team-image {
          width: 100%;
          display: block;
          border-radius: 10px;
          /* Optional: rounded corners */
        }
      </style>
      <!-- <section class="team-section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-head style-1">
                <h2 class="team-heading">Meet Our Team</h2>
              </div>
              <div class="team-image-box">
                <img src="./images/aboutus/our-team.png" alt="Team Image" class="team-image">
              </div>
            </div>
          </div>
        </div>
      </section> -->
    </div>
    
     <script src="https://d3js.org/d3.v6.min.js"></script>
    <script src="https://d3js.org/topojson.v3.min.js"></script>
    <script>
    const container = d3.select(".map-container");

// Set dimensions based on the container size
const width = container.node().getBoundingClientRect().width;
const height = width / 2; // Adjust the height proportionally
const svg = d3.select(".mapmy")
    .append("svg")
    .attr("width", width)
    .attr("height", height);

const projection = d3.geoNaturalEarth1()
    .scale(width / 6.5)
    .translate([width / 2, height / 2]);

const path = d3.geoPath().projection(projection);

const indiaCoords = [78.9629, 20.5937];

const destinations = [
    [-0.1278, 51.5074], // London, UK
    [-74.0060, 40.7128], // New York, USA
    [139.6917, 35.6895], // Tokyo, Japan
    [37.6173, 55.7558], // Moscow, Russia
    [2.3522, 48.8566], // Paris, France
    [18.4241, -33.9249], // Cape Town, South Africa
    [-43.1729, -22.9068], // Rio de Janeiro, Brazil
    [-99.1332, 19.4326], // Mexico City, Mexico
    [-58.3816, -34.6037], // Buenos Aires, Argentina
    [31.2357, 30.0444] // Cairo, Egypt
];

d3.json("https://d3js.org/world-110m.v1.json").then(world => {
    svg.append("path")
        .datum(topojson.feature(world, world.objects.land))
        .attr("class", "land")
        .attr("d", path);

    svg.append("path")
        .datum(topojson.mesh(world, world.objects.countries, (a, b) => a !== b))
        .attr("class", "boundary")
        .attr("d", path);

    // Start the animation sequence
    animateArcs();
});

function animateArcs() {
    // Draw all arcs at once
    destinations.forEach(destination => {
        const coordinates = [indiaCoords, destination];
        drawArc(coordinates);
    });

    // Restart animation after a delay
    setTimeout(() => {
        animateArcs();
    }, 4000); // Adjust the delay as needed
}

function drawArc(coords) {
    const source = projection(coords[0]);
    const target = projection(coords[1]);
    const midPointHeightOffset = width < 768 ? -50 : -100; // Adjust midpoint height offset based on screen width
    const midPoint = [(source[0] + target[0]) / 2, (source[1] + target[1]) / 2 + midPointHeightOffset];

    const lineData = [source, midPoint, target];

    const lineFunction = d3.line()
        .curve(d3.curveBasis)
        .x(d => d[0])
        .y(d => d[1]);

    const path = svg.append("path")
        .datum(lineData)
        .attr("class", "arc")
        .attr("d", lineFunction)
        .style("fill", "none")
        .style("stroke", "red")
        .style("stroke-width", 3)
        .style("stroke-dasharray", function() {
            const length = this.getTotalLength();
            return length + " " + length;
        })
        .style("stroke-dashoffset", function() {
            return this.getTotalLength();
        })
        .transition()
        .duration(3000)
        .ease(d3.easeLinear)
        .style("stroke-dashoffset", 0)
        .on("end", function() {
            d3.select(this).remove();
        });
}

    </script>
    
    <?php include('footer.php'); ?>