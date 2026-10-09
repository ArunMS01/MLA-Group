<?php
include("header.php");
?>
<style>
    :root {
        --primary: #F78631;
        --dark: #24262B;
        --light: #F7F7F7;
        --gray: #D9D9D9;
    }
    
    .p-3.bg-light.rounded-3{
          border-radius:8px;
    }
    .p-4.rounded-3 {
        border-radius:8px; 
    }
    .container img{
         border-radius:8px;
    }
    .ratio.ratio-4x3.rounded-3 {
          border-radius:8px; 
    }
    .emission .ratio.ratio-4x3{
        height:13rem;
    }
    
    .compliance .p-3.rounded-3 {
        border-radius:8px;
    }

    body {
        color: var(--dark);
    }

    p{
        color:#5E626F;
    }

    /* HERO */

    .ehs-hero {
        /* padding: 0 0 50px 0; */
        background: #f3f4f3;
    }

    .section-tag {
        color: var(--primary);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .hero-title {
        /* font-size: clamp(2.5rem, 5vw, 4.5rem); */
        /* font-weight: 800; */
        line-height: 1.1;
        color: var(--dark);
    }

    .hero-text {
        /* font-size: 18px; */
        /* line-height: 1.9; */
        color: #5E626F;
    }

    .hero-image-placeholder {
        /* height: 550px; */
        /* border-radius: 30px; */
        background: linear-gradient(135deg,
                rgba(247, 134, 49, .15),
                rgba(36, 38, 43, .08));
        /* border: 1px solid rgba(0, 0, 0, .08); */

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 24px;
        font-weight: 600;
    }

    /* INTRO CARD */

    .intro-card {
        background: #fff;
        border-radius: 8px;
        padding: 50px;
        box-shadow: 0 15px 50px rgba(0, 0, 0, .06);
        margin-top: -40px;
        position: relative;
        z-index: 2;
    }

    .intro-card p {
        margin: 0;
        /* font-size: 18px; */
        /* line-height: 1.9; */
    }

    /* PILLARS */

    .pillar-card {
        height: 100%;
        padding: 40px;
        border-radius: 24px;
        background: #fff;
        transition: .3s;
        box-shadow: 0 10px 30px rgba(0, 0, 0, .05);
    }

    .pillar-card:hover {
        transform: translateY(-8px);
    }

    .pillar-icon {
        width: 70px;
        height: 70px;
        border-radius: 18px;
        background: rgba(247, 134, 49, .12);

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 28px;
        color: var(--primary);
        margin-bottom: 20px;
    }

    .pillar-card h4 {
        font-weight: 700;
        margin-bottom: 15px;
    }

    .pillar-card p {
        color: #5E626F;
        line-height: 1.8;
    }

    /* CONTENT */

    .content-section {
        /* background: #fafafa; */
    }
 .content-image-placeholder::before{
           width: 100%;
    height: 100%;
    /* left: -10px; */
    /* z-index: -1; */
    /* top: -10px; */
    content: '';
    border: 4px solid #f3791f;
    position: absolute;
    
 }
    .content-image-placeholder {
        /* height: 500px; */
        box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
        z-index: 1;
        position:relative;
        border-radius: 30px;

        background:
            linear-gradient(135deg,
                rgba(247, 134, 49, .15),
                rgba(36, 38, 43, .08));

        display: flex;
        justify-content: center;
        align-items: center;

        font-size: 22px;
        font-weight: 600;
    }

    .content-section h2 {
        /* font-size: 42px; */
        /* font-weight: 800; */
        margin-bottom: 25px;
    }

    .content-section p {
        color: #5E626F;
        line-height: 1.9;
    }

    /* CONTACT */

    .contact-card {
        background: var(--dark);
        color: #fff;
        /* border-radius: 30px; */
        padding: 50px;
    }

    .contact-label {
        color: var(--primary);
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 13px;
    }

    .contact-btn {
        background: var(--primary);
        color: #fff;
        text-decoration: none;
        padding: 10px 15px;
        /* border-radius: 50px; */
        display: inline-block;
        font-weight: 600;
    }

    .innerps{
        padding:3rem 2rem 3rem 5rem;
    }

    .contact-btn:hover {
        color: #fff;
    }

      .content-image-placeholder img{
        height:300px;
        width:100%;
        object-fit: cover;
}

    @media only screen and (max-width:768px){
        .zero-row .p-3{
            height:100px;
        }
        .mtsm-2{
            margin-top:20px;
        }
        .filtersystem span{
            margin-bottom:11px;
        }
        .filtersystem .min {
    margin-bottom: 20px;
        }
        .ullist{
            margin: 0 !important;
        }
        body,
        html{
            overflow-x: hidden;
        }

    .content-image-placeholder img{
        height:255px;
        object-fit: cover;
    }
        .mbtn-1{
            margin-top: 0rem;
        }
        .revcol{
            flex-direction: column-reverse;
            /* margin: 2rem 0; */
        }
        .innerps {
    padding: 1rem 2rem 1rem 2rem !important;
}
    }
.ullist li{
    display: flex;
    align-items: baseline;
    gap:8px;
        color: #5E626F;
    line-height: 1.9;
}

.ullist {
    background-color: #fff;
    padding:20px;
    margin:30px 15px;
    border-radius: 8px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.ullist ul li span{
    flex:1;
}
    .ullist i{
        background-color: #f3791f;
        color: #fff;
        border-radius: 50%;
        /* flex:1; */
        width: 20px;
        height: 20px;
        display: inline-block;
        text-align: center;
        line-height: 20px;
    }
</style>
<section class="ehs-hero">
    <div class="containert">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="innerps">
                <!-- <span class="section-tag"></span> -->

                <h1 class="hero-title mt-3 wow fadeInUp">
                    EHS & Sustainability
                </h1>
                
                      <h3>Environmental Stewardship & Sustainable Operations</h3>
            <p class="mb-4">
           Environmental responsibility is core to how we operate. As a manufacturer of specialty chemicals and industrial additives, we continuously work to minimize environmental impact while improving operational efficiency and ensuring responsible use of natural resources.
            </p>
            <p>
                Our sustainability practices are built around efficient utilization of energy and water resources, responsible chemical handling systems, waste minimization, process optimization, and continuous monitoring of manufacturing operations — all directed at improving long-term environmental performance.
            </p>

                <!--<p class="hero-text mt-4  wow fadeInUp">-->
                <!--    At MLA Group of Industries, we believe long-term industrial growth must be built on the principles of environmental responsibility, safe operations, ethical governance, sustainable manufacturing, and meaningful contribution toward society.-->
                <!--</p>-->
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-image-placeholder">
                   <img src="img/moneimg.png" />
                </div>
            </div>

        </div>
    </div>
</section>


<!--<section class="intro-card-section">-->
<!--    <div class="container">-->
<!--        <div class="intro-card  wow fadeInUp">-->
      
<!--        </div>-->
<!--    </div>-->
<!--</section>-->





<section class="content-section py-5" style="display:none">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-5">
                <div class="content-image-placeholder wow fadeInUp">
                    <img class=" " src="images/mlalab.png" />
                </div>
            </div>

            <div class="col-lg-7">



                <p class=" wow fadeInUp">
                    Our sustainability practices focus on efficient utilization of energy and water resources, responsible chemical handling systems, waste minimization practices, process optimization, and continuous monitoring of manufacturing operations to improve long-term environmental performance.
                </p>

               



            </div>

        </div>
        
        <style>
            .vcol{
                margin-top:50px;
            }
            
            .fl{
                display:flex;
                align-items:baseline;
            }
             .fl span{
                 flex:1;
             }
        </style>

        <div class="row">
            <div class="col-lg-12 mt-4 mb-4 ullist">
                 <ul class="wow fadeInUp">
    <li><i class="fa fa-check"></i> <span> We recycle up to <strong>30% of the water</strong> used in our wet-process manufacturing plants, helping conserve valuable water resources. </span></li>

    <li><i class="fa fa-check"></i> <span> We utilize <strong>zinc ash</strong>, a by-product of the galvanizing process, to manufacture <strong>Active Zinc Oxide</strong>, promoting resource efficiency and circular economy practices. </span></li>

 



    <li><i class="fa fa-check"></i> <span> We are <strong>100% compliant with the latest pollution control norms</strong>, with continuous online monitoring of effluent quality in accordance with <strong>CPCB</strong> guidelines. </span></li>

  

    <li><i class="fa fa-check"></i> <span> We maximize the recycling and reuse of our <strong>solid waste</strong>, while any remaining waste is safely disposed of through <strong>authorized waste management facilities</strong>. </span></li>

    <li><i class="fa fa-check"></i> <span> We are committed to reducing our <strong>emissions intensity per tonne of production by 5% by 2030</strong>. </span></li>

    <li><i class="fa fa-check"></i> <span> We are developing a <strong>food forest</strong> across a large area of land to help offset carbon emissions and enhance biodiversity. </span></li>

    <li><i class="fa fa-check"></i> <span> We are also working towards replacing coal with <strong>renewable biomass and other sustainable energy sources by 2030</strong>, further reducing our environmental footprint. </span></li>
    
     <li><i class="fa fa-check"></i> <span> The effluent discharge water is refiltered from filter press before discharge causing a crystal clear water discharge with TSS, BOD, COD within CPCB limits with online monitoring. </span></li>
</ul>

<div class="row filtersystem mbn  vcol">
                <div class="col-lg-4">
                      <div class="min wow fadeInUp">
    <img style=" display:block" src="images/c656c707-da7c-4b79-9789-1e0f4159133b.jpg">
    </div>
                   <span class="wow fadeInUp fl"><i class="fa fa-check"></i><span> We have installed <strong>high-efficiency bag filters</strong> across our operations to minimize dust emissions and maintain cleaner air quality.</span> </span>
                </div>
                 <div class="col-lg-4">
                    <div class="min wow fadeInUp">
                    <img style=" display:block" src="images/filterpress.jpg">
                    </div>
                      <span class=" wow fadeInUp fl"><i class="fa fa-check"></i><span> We use <strong>advanced filter press systems</strong> to ensure effective filtration of process batches, preventing the leakage of solid particles into the water discharge stream.</span> </span>
                </div>
                 <div class="col-lg-4">
                   <div class="min wow fadeInUp">
                      <img style=" display:block" src="images/cycloneh.jpg">
                      </div>
                   <span class="wow fadeInUp fl" ><i class="fa fa-check"></i><span>All effluent gases generated from coal-based operations are treated through <strong>multi-cyclone separators and/or bag filters</strong> before discharge, ensuring full compliance with applicable environmental standards.</span>  </span>
                </div>
               
            </div>
           
            </div>
            <style>
            .filtersystem .min img{
                  width:100%;
                    object-fit:cover;
                    height:100%;
            }
                .filtersystem .min{
                    height:300px;
                        border: 4px solid #f3791f;
                  
                }
                .mbn{
                    /*margin-bottom:40px;*/
                }
                .maindivs{
                    background-color: #fff;
        padding: 40px 20px;
    margin: 0px 0 50px 0;
    border-radius: 8px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                }
                .filtersystem span{
                    color: #5E626F;
                }
                .filtersystem span{
                    margin-top:11px;
                        gap: 6px;
                        /*display: inline-block;*/
                }
            </style>
           
        </div>

        <div class="row align-items-center revcol g-5 mbtn-1">

          

            <div class="col-lg-7">



                <p class=" wow fadeInUp">
                    The health and safety of employees remains a core operational priority across all facilities. Through strict workplace safety protocols, mandatory use of Personal Protective Equipment (PPE), regular safety inspections, preventive equipment maintenance, hazard identification systems, emergency preparedness procedures, and continuous employee awareness programs, we strive to maintain a safe and secure working environment while strengthening a culture of operational responsibility and employee wellbeing.
                </p>



            </div>
              <div class="col-lg-5">
                <div class="content-image-placeholder wow fadeInUp">
                 <img class=" " src="images/safety.png" />
                </div>
            </div>

        </div>

             <div class="row align-items-center g-5 mbtn-1">

            <div class="col-lg-5">
                <div class="content-image-placeholder wow fadeInUp">
                    <img class=" " src="images/performance.png" />
                </div>
            </div>

            <div class="col-lg-7">



                <p class=" wow fadeInUp">
                   Through regular internal reviews, continuous improvement systems, and responsible operational planning, we ensure sustainability remains integrated into both day-to-day decision-making and long-term business growth.
                </p>



            </div>

        </div>

    </div>
</section>




<!-- Custom Styles -->
<style>
  body, .main-wrapper {
    /*background-color: #24262B !important;*/
  }
  .text-white{
      color:#fff !important;
  }
  
  /* Chemical subtle dot matrix pattern overlay on custom background */
  .bg-chemical-dark {
    /*background-color: #24262B;*/
    background-image: radial-gradient(rgba(255, 255, 255, 0.08) 1.5px, transparent 1.5px);
    background-size: 32px 32px;
  }
  
  /* Accent-tinted dark card section background */
  .bg-chemical-card-dark {
    background-color: #1c1e22;
    background-image: radial-gradient(rgba(243, 121, 31, 0.12) 1.2px, transparent 1.2px);
    background-size: 28px 28px;
  }

  .icon-box-check {
    width: 24px;
    height: 24px;
    min-width: 24px;
    background-color: rgba(243, 121, 31, 0.15);
    color: #f3791f;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    margin-top: 2px;
  }

  .custom-card-shadow {
      border-radius:8px;
box-shadow: 0 15px 50px rgb(0 0 0 / 11%);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }

  .custom-card-shadow:hover {
    transform: translateY(-3px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.45), 0 8px 16px rgba(0, 0, 0, 0.3);
  }

  .cert-card {
    border-top: 4px solid #f3791f;
    background: #ffffff;
  }
  
  .flex-strecth{
          display: flex;
    height: 100%;
    flex-direction: column;
    align-items: stretch;
  }
</style>

<!-- Main Wrapper with Requested #24262B Background -->
<div class="py-5 main-wrapper bg-chemical-dark">

  <!-- Section 1: Environmental Management -->
  <section class="mb-5">
    <div class="container">
      <div class="row gy-4 alignr">
        <div class="col-lg-7">
          <div class="p-4 p-md-5 bg-white rounded-4 custom-card-shadow flex-strecth">
            <h2 class="h3 fw-bold mb-3 text-dark">Environmental Management</h2>
            <p class="text-secondary mb-3">
              Our environmental management system covers every key aspect of chemical manufacturing — energy, water, wastewater, air emissions, waste, resource consumption and compliance.
            </p>
            <p class="text-secondary mb-3">
              Each facility runs dedicated environmental-control systems designed to prevent, control and monitor impact at source — including air-pollution control equipment, wastewater treatment and filtration, water-reuse measures, rainwater harvesting, energy-efficient equipment and structured waste-recovery systems.
            </p>
            <p class="text-secondary mb-3">
              Our management systems are certified to ISO 9001:2015 (Quality Management), ISO 14001 (Environmental Management) and ISO 45001 (Occupational Health & Safety).
            </p>
            <p class="text-secondary mb-0">
              Performance is tracked through defined parameters, statutory requirements, internal reviews and applicable customer and certification audits, with corrective actions taken wherever required.
            </p>
          </div>
        </div>
        
        <!-- ISO Certificate Cards Showcase -->
        <div class="col-lg-5 flex-strecth">
          <div class="ratio  ratio-16x9 rounded-4 overflow-hidden custom-card-shadow mb-4">
            <img src="images/mlalab.png" alt="Manufacturing Facility" class="object-fit-cover">
          </div>

          <div class="row g-3">
            <div class="col-4">
              <div class="p-3 rounded-3 custom-card-shadow text-center cert-card">
               <img src="assets/images/iso9001.avif" />
                <!--<div class="fw-bold small text-dark">ISO 9001:2015</div>-->
                <!--<div class="text-muted" style="font-size: 0.72rem;">Quality Management</div>-->
              </div>
            </div>
            <div class="col-4">
              <div class="p-3 rounded-3 custom-card-shadow text-center cert-card">
                <img src="assets/images/14001.png" />
                <!--<div class="fw-bold small text-dark">ISO 14001</div>-->
                <!--<div class="text-muted" style="font-size: 0.72rem;">Environmental Management</div>-->
              </div>
            </div>
            <div class="col-4">
              <div class="p-3 rounded-3 custom-card-shadow text-center cert-card">
                  <img src="assets/images/4500-1.png" />
                <!--<div class="fw-bold small text-dark">ISO 45001</div>-->
                <!--<div class="text-muted" style="font-size: 0.72rem;">Occupational Health & Safety</div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<style>
    .product-slider {
    width: 100%;
    border-radius: 10px;
    overflow: hidden;
}

.product-slider .swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}

.product-slider .swiper-slide img {
    width: 100%;
    height: auto;
    object-fit: cover;
    display: block;
}

/* Optional Custom Styling for Controls */
.product-slider .swiper-button-next,
.product-slider .swiper-button-prev {
    color: #ffffff;
}

.product-slider .swiper-pagination-bullet-active {
    background: #cba258;
}

.conversion .p-3.rounded-3{
    border-radius:8px;
}
</style>
  <!-- Section 2: Energy Conservation & Efficiency (DARK SECTION) -->
  <section class="mb-5 bg-chemical-card-dark conversion">
    <div class="container">
      <div class="p-4 p-md-5 rounded-4  text-white border-secondary border-opacity-25">
        <div class="d-flex align-items-center gap-2 mb-3">
          <!--<i class="fa-solid fa-bolt fa-lg" style="color: #f3791f; margin-right:3px"></i>-->
          <h2 class="h3 fw-bold mb-0 text-white">Energy Conservation & Efficiency</h2>
        </div>
        
        <!-- Stat Highlights Grid -->
        <div class="row g-3 my-3">
          <div class="col-6 col-md-3">
            <div class="p-3 rounded-3 text-center border" style="background: rgba(255, 255, 255, 0.03); border-color: rgba(243, 121, 31, 0.4) !important;">
              <div class="h3 fw-bold mb-1" style="color: #f3791f;">↓ 10.16%</div>
              <div class="small text-light">Diesel Intensity</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="p-3 rounded-3 text-center border" style="background: rgba(255, 255, 255, 0.03); border-color: rgba(243, 121, 31, 0.4) !important;">
              <div class="h3 fw-bold mb-1" style="color: #f3791f;">↓ 15.17%</div>
              <div class="small text-light">PNG Intensity</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="p-3 rounded-3 text-center border" style="background: rgba(255, 255, 255, 0.03); border-color: rgba(243, 121, 31, 0.4) !important;">
              <div class="h3 fw-bold mb-1" style="color: #f3791f;">↓ 8.45%</div>
              <div class="small text-light">Coal Intensity</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="p-3 rounded-3 text-center border" style="background: rgba(255, 255, 255, 0.03); border-color: rgba(243, 121, 31, 0.4) !important;">
              <div class="h3 fw-bold mb-1" style="color: #f3791f;">↑ 5.13%</div>
              <div class="small text-light">Production Rise</div>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
          <li class="d-flex align-items-start mb-3">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span class="text-light">We use Variable Frequency Drives (VFD) on suitable motor-driven equipment to regulate operating speed according to real-time process requirements.</span>
          </li>
          <li class="d-flex align-items-start mb-3">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span class="text-light">IE3 high-efficiency motors are used across applicable equipment, and LED lighting has been adopted across manufacturing and utility areas.</span>
          </li>
          <li class="d-flex align-items-start mb-3">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span class="text-light">A 5-stage gas flow heat recovery system, associated with coal-fired hot-air generation, recovers heat from the process gas stream that would otherwise be lost, reducing fresh coal requirements and improving thermal efficiency.</span>
          </li>
          <li class="d-flex align-items-start mb-3">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span class="text-light">Energy consumption is tracked against production activity to monitor energy intensity and identify further improvement opportunities. In FY 2025–26, despite a 5.13% rise in production, diesel intensity decreased by 10.16%, PNG intensity decreased by 15.17%, and coal intensity decreased by 8.45%.</span>
          </li>
          <li class="d-flex align-items-start">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span class="text-light">We have set a formal target of a 5% reduction in energy intensity by FY 2028–29, building on these fuel-efficiency gains through continued VFD/IE3 deployment, LED conversion and process optimization.</span>
          </li>
        </ul>
            </div>
            <div class="col-lg-6 mtsm-2">
    <div class="swiper product-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="assets/images/motor.webp" alt="Motor Image" />
            </div>
            <div class="swiper-slide">
                <img src="assets/images/battery1.webp" alt="Battery Image" />
            </div>
        </div>
        
        <!-- Controls -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
        </div>
      
      </div>
    </div>
  </section>

  <!-- Section 3: Water Management -->
  <section class="mb-5">
    <div class="container">
      <div class="p-4 p-md-5 bg-white rounded-4 custom-card-shadow">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-5 order-lg-2">
            <div class="ratio ratio-4x3 rounded-3 overflow-hidden custom-card-shadow mb-3">
              <img src="assets/images/water.webp" alt="Water Management" class="object-fit-cover">
            </div>
            <div class="p-3 bg-light rounded-3 text-center border" style="border-color: #f3791f !important;">
              <div class="h2 fw-bold mb-0" style="color: #f3791f;">Up to 30%</div>
              <div class="small fw-semibold text-secondary">Water Recycled in Wet-Process Plants</div>
            </div>
          </div>
          <div class="col-lg-7 order-lg-1">
            <div class="d-flex align-items-center gap-2 mb-3">
              <!--<i class="fa-solid fa-droplet fa-lg" style="color: #f3791f;"></i>-->
              <h2 class="h3 fw-bold mb-0 text-dark">Water Management</h2>
            </div>
            <ul class="list-unstyled text-secondary mb-0">
              <li class="d-flex align-items-start mb-2">
                <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
                <span>Water-recycling systems at applicable wet-process facilities enable reuse of process water, reducing dependence on fresh-water intake.</span>
              </li>
              <li class="d-flex align-items-start mb-2">
                <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
                <span>Rainwater harvesting infrastructure captures and manages rainwater, supporting responsible water use and cutting reliance on conventional water sources.</span>
              </li>
              <li class="d-flex align-items-start mb-2">
                <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
                <span>We recycle up to 30% of the water used in our wet-process manufacturing plants.</span>
              </li>
              <li class="d-flex align-items-start mb-2">
                <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
                <span>Water consumption is monitored across operations, with attention to avoidable losses and opportunities for further reuse.</span>
              </li>
              <li class="d-flex align-items-start mb-2">
                <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
                <span>Beyond routine monitoring, we conduct comprehensive water testing for IS-10500 FSSAI-aligned parameters and applicable radioactive parameters, carried out by a NABL-accredited laboratory, to further verify that our water is safe and fit for drinking.</span>
              </li>
              <li class="d-flex align-items-start mb-2">
                <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
                <span>Wastewater generated from applicable manufacturing and cleaning activities is treated through our Effluent Treatment Plant (ETP) before controlled reuse or discharge, preventing uncontrolled release.</span>
              </li>
              <li class="d-flex align-items-start">
                <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
                <span>The ETP is operated and maintained to support appropriate treatment and controlled handling of wastewater in line with applicable regulatory requirements.</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section 4: Air Emissions & Pollution Control -->
<section class="mb-5">
  <div class="container">
    <div class="p p-md-5 bg-white rounded-4 custom-">
      
      <!-- Section Heading -->
      <div class="d-flex align-items-center gap-2 mb-4">
        <!--<i class="fa-solid fa-wind fa-lg" style="color: #f3791f; margin-right:3px"></i>-->
        <h2 class="h3 fw-bold mb-0 text-dark">Air Emissions & Pollution Control</h2>
      </div>

      <!-- 3-Column Image Feature Grid -->
      <div class="row g-4 mb-4 emission">
        
        <!-- Column 1: Bag Filter -->
        <div class="col-md-4">
          <div class="h-100 p-3 bg-light rounded-4 border d-flex flex-column custom-card-shadow">
            <div class="ratio ratio-4x3 rounded-3 overflow-hidden mb-3 border">
              <img src="https://www.mlagroup.com/images/c656c707-da7c-4b79-9789-1e0f4159133b.jpg" alt="Bag Filtration System" class="object-fit-cover w-100 h-100">
            </div>
            <h3 class="h6 fw-bold text-dark border-bottom pb-2 mb-2">Bag Filtration & Dust Collection</h3>
            <div class="d-flex align-items-start mt-1">
              <div class="icon-box-check me-2"><i class="fa fa-check"></i></div>
              <p class="small text-secondary mb-0">Bag filtration and dust-collection systems capture particulate matter at source across applicable powder-handling and manufacturing operations, preventing fugitive dust from reaching the ambient environment.</p>
            </div>
          </div>
        </div>

        <!-- Column 2: Cyclone System -->
        <div class="col-md-4">
          <div class="h-100 p-3 bg-light rounded-4 border d-flex flex-column custom-card-shadow">
            <div class="ratio ratio-4x3 rounded-3 overflow-hidden mb-3 border">
              <img src="https://www.mlagroup.com/images/cycloneh.jpg" alt="Cyclone Separator System" class="object-fit-cover w-100 h-100">
            </div>
            <h3 class="h6 fw-bold text-dark border-bottom pb-2 mb-2">Cyclone Separation</h3>
            <div class="d-flex align-items-start mt-1">
              <div class="icon-box-check me-2"><i class="fa fa-check"></i></div>
              <p class="small text-secondary mb-0">Cyclone systems are used in relevant powder-handling and silica-related operations, controlling emissions while recovering otherwise-lost process material for reuse.</p>
            </div>
          </div>
        </div>

        <!-- Column 3: Filter Press -->
        <div class="col-md-4">
          <div class="h-100 p-3 bg-light rounded-4 border d-flex flex-column custom-card-shadow">
            <div class="ratio ratio-4x3 rounded-3 overflow-hidden mb-3 border">
              <img src="https://www.mlagroup.com/images/filterpress.jpg" alt="Filter Press Infrastructure" class="object-fit-cover w-100 h-100">
            </div>
            <h3 class="h6 fw-bold text-dark border-bottom pb-2 mb-2">Acoustic & Process Controls</h3>
            <div class="d-flex align-items-start mt-1">
              <div class="icon-box-check me-2"><i class="fa fa-check"></i></div>
              <p class="small text-secondary mb-0">Noise from DG sets, motors, blowers, compressors and pumps is managed through preventive maintenance, acoustic enclosures and silencers.</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Compliance Statement Block -->
      <div class="p-3 bg-light rounded-3 border-start border-4" style="border-start-color: #f3791f !important;">
        <div class="d-flex align-items-start">
          <div class="icon-box-check me-3 me-2"><i class="fa fa-check"></i></div>
          <p class="text-secondary mb-0">Independent third-party monitoring confirmed all ambient air quality, DG stack emission and environmental noise parameters within applicable limits, with no exceedances identified.</p>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- Section 4: Air Emissions & Pollution Control -->
  <section class="mb-5">
    <div class="container">
      <div class="p-4 p-md-5 bg-white rounded-4 custom-card-shadow">
        <div class="d-flex align-items-center gap-2 mb-3">
          <!--<i class="fa-solid fa-wind fa-lg" style="color: #f3791f; margin-right:3px"></i>-->
          <h2 class="h3 fw-bold mb-0 text-dark">Air Emissions & Pollution Control</h2>
        </div>
        <ul class="list-unstyled text-secondary mb-0">
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Bag filtration and dust-collection systems capture particulate matter at source across applicable powder-handling and manufacturing operations, preventing fugitive dust from reaching the ambient environment.</span>
          </li>
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Cyclone systems are used in relevant powder-handling and silica-related operations, controlling emissions while recovering otherwise-lost process material for reuse.</span>
          </li>
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Noise from DG sets, motors, blowers, compressors and pumps is managed through preventive maintenance, acoustic enclosures and silencers.</span>
          </li>
          <li class="d-flex align-items-start">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Independent third-party monitoring confirmed all ambient air quality, DG stack emission and environmental noise parameters within applicable limits, with no exceedances identified.</span>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section 5: Waste Management & Resource Recovery -->
  <section class="mb-5">
    <div class="container">
      <div class="p-4 p-md-5 bg-white rounded-4 custom-card-shadow">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-7">
            <div class="d-flex align-items-center gap-2 mb-3">
              <!--<i class="fa-solid fa-recycle fa-lg" style="color: #f3791f; margin-right:3px"></i>-->
              <h2 class="h3 fw-bold mb-0 text-dark">Waste Management & Resource Recovery</h2>
            </div>
            <ul class="list-unstyled text-secondary mb-0">
              <li class="d-flex align-items-start mb-2">
                <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
                <span>We follow the waste hierarchy of prevention, reduction, reuse, recycling and recovery for all applicable operational waste streams, with waste segregated at source.</span>
              </li>
              <li class="d-flex align-items-start mb-2">
                <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
                <span>In FY 2025–26, recyclable waste — packaging bags, plastic scrap, metal scrap, paper/cardboard and fly ash — totaled 889.68 MT, of which 100% was recycled or recovered, with none sent to disposal.</span>
              </li>
              <li class="d-flex align-items-start">
                <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
                <span>Raw-material efficiency and yield are actively monitored, with focus on reducing spillage and handling loss and recovering suitable process dust/powder — reducing waste at the source, ahead of recycling.</span>
              </li>
            </ul>
          </div>
          <div class="col-lg-5">
                              <img src="assets/images/managewater.webp" />
            <div class="p-4 rounded-3 text-center border bg-light custom-card-shadow" style="border-color: #f3791f !important;">

              <div class="h2 fw-bold mb-1 text-dark">889.68 MT</div>
              <div class="fw-bold mb-2" style="color: #f3791f;">100% Recycled or Recovered</div>
              <p class="small text-secondary mb-0">Recyclable waste including packaging bags, plastic scrap, metal scrap, paper/cardboard and fly ash in FY 2025–26 with zero sent to disposal.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Resource Efficiency & Sustainable Manufacturing -->
  <section class="mb-5">
    <div class="container">
      <div class="p-4 p-md-5 bg-white rounded-4 custom-card-shadow">
        <div class="d-flex align-items-center gap-2 mb-3">
          <!--<i class="fa-solid fa-leaf fa-lg" style="color: #f3791f;  margin-right:3px"></i>-->
          <h2 class="h3 fw-bold mb-0 text-dark">Resource Efficiency & Sustainable Manufacturing</h2>
        </div>
        <ul class="list-unstyled text-secondary mb-0">
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Our facilities bring together VFD/VFDD systems, IE3 motors, LED lighting, water-recycling systems, rainwater harvesting, wastewater-treatment and filtration systems, bag filters, cyclone separators and waste-recovery systems as a single, coordinated approach.</span>
          </li>
          <li class="d-flex align-items-start">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Together, these measures reduce unnecessary consumption, control emissions, recover useful materials and improve overall environmental performance.</span>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section 7: Sustainable Procurement -->
  <section class="mb-5">
    <div class="container">
      <div class="p-4 p-md-5 bg-white rounded-4 custom-card-shadow">
        <div class="d-flex align-items-center gap-2 mb-3">
          <!--<i class="fa-solid fa-truck-ramp-box fa-lg" style="color: #f3791f; margin-right:3px"></i>-->
          <h2 class="h3 fw-bold mb-0 text-dark">Sustainable Procurement</h2>
        </div>
        <ul class="list-unstyled text-secondary mb-0">
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Suppliers are required to sign our Supplier Code of Conduct, setting clear expectations around environmental, ethical and safety practices.</span>
          </li>
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>New and existing suppliers are evaluated through Vendor Capability Forms, assessing their manufacturing, quality and compliance capabilities.</span>
          </li>
          <li class="d-flex align-items-start">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>We carry out virtual audits of supplier facilities, with on-site audits conducted where applicable, to verify capability and compliance before and during engagement.</span>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section 8: Climate & Carbon Management (DARK SECTION) -->
  <section class="mb-5">
    <div class="container">
      <div class="p-4 p-md-5 rounded-4 bg-chemical-card-dark text-white custom-card-shadow border border-secondary border-opacity-25">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-7">
            <div class="d-flex align-items-center gap-2 mb-3">
              <!--<i class="fa-solid fa-cloud-sun fa-lg" style="color: #f3791f;  margin-right:3px"></i>-->
              <h2 class="h3 fw-bold mb-0 text-white">Climate & Carbon Management</h2>
            </div>
            <ul class="list-unstyled mb-0">
              <li class="d-flex align-items-start mb-3">
                <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
                <span class="text-light">We maintain an annual Greenhouse Gas (GHG) Inventory, prepared in accordance with GHG Protocol categorization.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
                <span class="text-light">Our total GHG intensity improved from 2.513 to 2.316 tCO₂e per MT of production between FY 2024–25 and FY 2025–26 — a reduction of 7.83%, achieved even as overall production rose by 5.13%.</span>
              </li>
              <li class="d-flex align-items-start">
                <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
                <span class="text-light">We have set a formal target of a 10% reduction in energy intensity by FY 2028–29, and are working towards replacing coal with renewable biomass and other sustainable energy sources.</span>
              </li>
            </ul>
          </div>
          <div class="col-lg-5">
              <img src="assets/images/chart.webp" />
            <div class="p-4 rounded-3 text-center border" style="background: rgba(255, 255, 255, 0.03); border-color: rgba(243, 121, 31, 0.4) !important;">
              <div class="h2 fw-bold mb-1" style="color: #f3791f;">↓ 7.83%</div>
              <div class="fw-bold mb-2 text-white">GHG Intensity Reduction</div>
              <p class="small text-light mb-0">Improved from 2.513 to 2.316 tCO₂e per MT of production between FY 2024–25 and FY 2025–26.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: Product Stewardship & Responsible Chemical Management -->
  <section class="mb-5">
    <div class="container">
      <div class="p-4 p-md-5 bg-white rounded-4 custom-card-shadow">
        <div class="d-flex align-items-center gap-2 mb-3">
          <i class="fa-solid fa-flask-vial fa-lg" style="color: #f3791f; margin-right:3px"></i>
          <h2 class="h3 fw-bold mb-0 text-dark">Product Stewardship & Responsible Chemical Management</h2>
        </div>
        <ul class="list-unstyled text-secondary mb-0">
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Depending on product and market, we provide Safety Data Sheets (SDS), Technical Data Sheets (TDS), Certificates of Analysis (COA), and relevant REACH and RoHS information, along with applicable regulatory declarations.</span>
          </li>
          <li class="d-flex align-items-start">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Product requirements are evaluated according to intended application, customer requirements and applicable market regulations.</span>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section 10: EHS & Environmental Monitoring -->
  <section class="mb-5">
    <div class="container">
      <div class="p-4 p-md-5 bg-white rounded-4 custom-card-shadow">
        <div class="d-flex align-items-center gap-2 mb-3">
          <!--<i class="fa-solid fa-chart-line fa-lg" style="color: #f3791f;  margin-right:3px"></i>-->
          <h2 class="h3 fw-bold mb-0 text-dark">EHS & Environmental Monitoring</h2>
        </div>
        <ul class="list-unstyled text-secondary mb-0">
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>We monitor key environmental and EHS parameters across operations, including energy consumption, water use, wastewater quality, air emissions, waste generation and workplace conditions.</span>
          </li>
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Monitoring is supported by statutory testing, internal assessments, certification requirements and customer audits.</span>
          </li>
          <li class="d-flex align-items-start">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Results are used to identify deviations, maintain compliance and pinpoint areas for further engineering or operational improvement.</span>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section 11: Environmental Compliance & Audits -->
  <section class="mb-5 compliance">
    <div class="container">
      <div class="p-4 p-md-5 bg-white rounded-4 custom-card-shadow">
        <div class="d-flex align-items-center gap-2 mb-3">
          <!--<i class="fa-solid fa-clipboard-check fa-lg" style="color: #f3791f; margin-right:3px"></i>-->
          <h2 class="h3 fw-bold mb-0 text-dark">Environmental Compliance & Audits</h2>
        </div>
        
        <!-- Compliance Highlights Grid -->
        <div class="row g-2 mb-4 zero-row">
          <div class="col-6 col-md-3">
            <div class="p-3 rounded-3 text-center border bg-light" style="border-color: #f3791f !important;">
              <div class="fw-bold fs-4" style="color: #f3791f;">Zero</div>
              <div class="small text-secondary">Environmental Penalties</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="p-3 rounded-3 text-center border bg-light" style="border-color: #f3791f !important;">
              <div class="fw-bold fs-4" style="color: #f3791f;">Zero</div>
              <div class="small text-secondary">Show-Cause Notices</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="p-3 rounded-3 text-center border bg-light" style="border-color: #f3791f !important;">
              <div class="fw-bold fs-4" style="color: #f3791f;">Zero</div>
              <div class="small text-secondary">Monitoring Exceedances</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="p-3 rounded-3 text-center border bg-light" style="border-color: #f3791f !important;">
              <div class="fw-bold fs-4" style="color: #f3791f;">Zero</div>
              <div class="small text-secondary">Regulatory Complaints</div>
            </div>
          </div>
        </div>

        <ul class="list-unstyled text-secondary mb-0">
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Our systems are subject to applicable regulatory monitoring, ISO 14001 requirements, internal reviews, certification audits and customer assessments, supported by a valid Consent to Operate from the Uttar Pradesh Pollution Control Board and groundwater extraction permission.</span>
          </li>
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>FY 2025–26 compliance track record: zero environmental penalties, zero show-cause notices, zero monitoring exceedances, and zero regulatory complaints.</span>
          </li>
          <li class="d-flex align-items-start">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Environmental records, monitoring results, audit observations and non-conformities are reviewed and followed through with corrective actions — continuously strengthening the systems installed across our facilities.</span>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section 12: Occupational Health & Safety -->
  <section class="mb-5">
    <div class="container">
        <div class="p-4 p-md-5 bg-white rounded-4 custom-card-shadow">
        <div class="row">
            <div class="col-lg-7">
                 <div class="d-flex align-items-center gap-2 mb-3">
          <!--<i class="fa-solid fa-kit-medical fa-lg" style="color: #f3791f; margin-right:3px"></i>-->
          <h2 class="h3 fw-bold mb-0 text-dark">Occupational Health & Safety</h2>
        </div>
        <ul class="list-unstyled text-secondary mb-0">
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Strict workplace safety protocols and mandatory PPE (Personal Protective Equipment) requirements are enforced across all manufacturing areas.</span>
          </li>
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Hazard Identification and Risk Assessment (HIRA) systems, emergency preparedness procedures and fire protection measures are in place across all facilities, supported by ISO 45001.</span>
          </li>
          <li class="d-flex align-items-start">
            <div class="icon-box-check me-3"><i class="fa fa-check"></i></div>
            <span>Employees receive continuous EHS training and awareness programmes covering chemical handling, PPE use, fire safety and emergency response, reinforced through regular emergency drills.</span>
          </li>
        </ul>
            </div>
            <div class="col-lg-5 mtsm-2">
                <img src="images/train.jpg" />
            </div>
        </div>
      
       
      </div>
    </div>
  </section>

  <!-- Section 13: Continuous Improvement in EHS & Sustainability -->
  <section>
    <div class="container">
      <div class="p-4 p-md-5 rounded-4 bg-white custom-card-shadow border-start border-4" style="border-start-color: #f3791f !important;">
        <div class="d-flex align-items-center gap-2 mb-3">
          <i class="fa-solid fa-chart-line-up fa-lg" style="color: #f3791f;"></i>
          <h2 class="h3 fw-bold mb-0 text-dark">Continuous Improvement in EHS & Sustainability</h2>
        </div>
        <p class="text-secondary mb-3">
          We continue to invest in practical environmental and safety improvements across our manufacturing facilities — from pollution-control and wastewater-treatment systems to water reuse, rainwater harvesting, energy-efficient equipment and waste-recovery infrastructure.
        </p>
        <p class="text-secondary mb-0">
          The focus stays constant: install the right controls at source, monitor their performance, and progressively improve resource efficiency and environmental outcomes as our operations evolve.
        </p>
      </div>
    </div>
  </section>

</div>


<section class="contact-section py-5">
    <div class="containe">

        <div class="contact-card">

            <div class="row align-items-center">

                <div class="col-lg-12 text-center">
                    <!-- <span class="contact-label">
                        ESG & Sustainability Contact
                    </span> -->

                    <h3 class="mt-2 wow fadeInUp" style="color:#fff">
                        For matters related to sustainability initiatives, <br> environmental practices, and ESG implementation <br>
                        <span style="color:#F78631;">Mr. Samarth Agarwal</span>
                        
                    </h3>

                    <p class="mb-0  wow fadeInUp" style="color:#fff">
                        ESG & Quality Management
                    </p>
                </div>

                <div class="col-lg-12 text-center mt-3 wow fadeInUp">
                    <a href="mailto:qa@mlagroup.com" class="contact-btn">
                        qa@mlagroup.com
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper('.product-slider', {
        loop: true,
        spaceBetween: 20,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});
</script>
<?php
include("footer.php");
?>