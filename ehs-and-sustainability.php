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
        width: 369px;
    height: 250px;
    left: -10px;
    z-index: -1;
    top: -10px;
    content: '';
    border: 8px solid #f3791f;
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
        .ullist ul{
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

.ullist ul{
    background-color: #fff;
    padding:20px;
    margin:30px 0;
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

                <p class="hero-text mt-4  wow fadeInUp">
                    At MLA Group of Industries, we believe long-term industrial growth must be built on the principles of environmental responsibility, safe operations, ethical governance, sustainable manufacturing, and meaningful contribution toward society.
                </p>
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


<section class="intro-card-section">
    <div class="container">
        <div class="intro-card  wow fadeInUp">
            <h2>Environmental Stewardship & Sustainable Operations</h2>
            <p>
                Environmental responsibility remains central to the way we operate. As a manufacturer of specialty chemicals and industrial additives, we continuously work towards minimizing environmental impact while improving operational efficiency and ensuring responsible use of natural resources.
            </p>
        </div>
    </div>
</section>





<section class="content-section py-5">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-5">
                <div class="content-image-placeholder">
                    <img class=" wow fadeInUp" src="images/mlalab.png" />
                </div>
            </div>

            <div class="col-lg-7">



                <p class=" wow fadeInUp">
                    Our sustainability practices focus on efficient utilization of energy and water resources, responsible chemical handling systems, waste minimization practices, process optimization, and continuous monitoring of manufacturing operations to improve long-term environmental performance.
                </p>

               



            </div>

        </div>

        <div class="row">
            <div class="col-lg-12 mt-4 mb-4 ullist">
                 <ul class="wow fadeInUp">
    <li><i class="fa fa-check"></i> <span> We recycle up to <strong>30% of the water</strong> used in our wet-process manufacturing plants, helping conserve valuable water resources. </span></li>

    <li><i class="fa fa-check"></i> <span> We utilize <strong>zinc ash</strong>, a by-product of the galvanizing process, to manufacture <strong>Active Zinc Oxide</strong>, promoting resource efficiency and circular economy practices. </span></li>

    <li><i class="fa fa-check"></i> <span> We have installed <strong>high-efficiency bag filters</strong> across our operations to minimize dust emissions and maintain cleaner air quality. </span></li>

    <li><i class="fa fa-check"></i> <span> We use <strong>advanced filter press systems</strong> to ensure effective filtration of process batches, preventing the leakage of solid particles into the water discharge stream. </span></li>

    <li><i class="fa fa-check"></i> <span> We are <strong>100% compliant with the latest pollution control norms</strong>, with continuous online monitoring of effluent quality in accordance with <strong>CPCB</strong> guidelines. </span></li>

    <li><i class="fa fa-check"></i> <span> All effluent gases generated from coal-based operations are treated through <strong>multi-cyclone separators and/or bag filters</strong> before discharge, ensuring full compliance with applicable environmental standards. </span></li>

    <li><i class="fa fa-check"></i> <span> We maximize the recycling and reuse of our <strong>solid waste</strong>, while any remaining waste is safely disposed of through <strong>authorized waste management facilities</strong>. </span></li>

    <li><i class="fa fa-check"></i> <span> We are committed to reducing our <strong>emissions intensity per tonne of production by 5% by 2030</strong>. </span></li>

    <li><i class="fa fa-check"></i> <span> We are developing a <strong>food forest</strong> across a large area of land to help offset carbon emissions and enhance biodiversity. </span></li>

    <li><i class="fa fa-check"></i> <span> We are also working towards replacing coal with <strong>renewable biomass and other sustainable energy sources by 2030</strong>, further reducing our environmental footprint. </span></li>
    
     <li><i class="fa fa-check"></i> <span> The effluent discharge water is refiltered from filter press before discharge causing a crystal clear water discharge with TSS, BOD, COD within CPCB limits with online monitoring. </span></li>
</ul>
            </div>
        </div>

        <div class="row align-items-center revcol g-5 mbtn-1">

          

            <div class="col-lg-7">



                <p class=" wow fadeInUp">
                    The health and safety of employees remains a core operational priority across all facilities. Through strict workplace safety protocols, mandatory use of Personal Protective Equipment (PPE), regular safety inspections, preventive equipment maintenance, hazard identification systems, emergency preparedness procedures, and continuous employee awareness programs, we strive to maintain a safe and secure working environment while strengthening a culture of operational responsibility and employee wellbeing.
                </p>



            </div>
              <div class="col-lg-5">
                <div class="content-image-placeholder">
                 <img class=" wow fadeInUp" src="images/safety.png" />
                </div>
            </div>

        </div>

             <div class="row align-items-center g-5 mbtn-1">

            <div class="col-lg-5">
                <div class="content-image-placeholder">
                    <img class=" wow fadeInUp" src="images/performance.png" />
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
<?php
include("footer.php");
?>