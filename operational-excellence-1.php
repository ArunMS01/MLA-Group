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
        background: #f1f1f2;
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
.hero-image-placeholder img{
    height: 100%;
    width: 100%;
        background: #eeefef;
    object-fit: contain;
}
    .hero-image-placeholder {
        /*height: 550px;*/
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
        /*margin-top: -40px;*/
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
        width: 100%;
        object-fit: cover;
}
 .mbtn-1{
            margin-top: 0.5rem;
        }
    @media only screen and (max-width:768px){
        body .opr li {
    list-style: none !important;
}
        .opr{
            margin-bottom:20px;
        }
       body .qc-image {
    height: 275px !important;
}
        .hero-image-placeholder{
            height:auto !important;
        }
        .ehs-hero {
    padding: 0 0 50px 0;
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
    .cert-box i{
            background-color: #F78631;
    color: #fff;
    width: 20px;
    height: 20px;
    display: inline-flex;
    align-items: center;
    border-radius: 50%;
    justify-content: center;
    }
</style>

<section class="ehs-hero">
    <div class="containert">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="innerps">

                    <h1 class="hero-title mt-3 wow fadeInUp">
                        Operational Excellence
                    </h1>
                    
                    <h3>Consistent Processes. Controlled Manufacturing. Reliable Quality.</h3>

                    <p class="hero-text mt-4  wow fadeInUp">
                     At MLA Group, operational excellence is built around the consistent execution of our manufacturing processes — from raw-material receipt and process control to quality testing, preventive maintenance, batch release and customer support. Our manufacturing systems combine standardised operating procedures, layered quality control, preventive maintenance, technical development and structured corrective action to maintain consistent product quality and reliable plant performance across every stage of production.
                    </p>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-image-placeholder">
                    <img src="images/bghjt.png" />
                </div>
            </div>

        </div>
    </div>
</section>


<!--<section class="intro-card-section">-->
<!--    <div class="container">-->
<!--        <div class="intro-card">-->
       

<!--            <p class=" wow fadeInUp">-->
<!--               Our manufacturing operations are supported by defined Standard Operating Procedures (SOPs), stringent raw material inspection, batch-wise production controls, in-process quality monitoring, preventive maintenance programs, equipment calibration, and safe chemical handling practices. These systems help ensure product consistency, operational efficiency, regulatory compliance, and reliable manufacturing performance across all our facilities.-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<style>
    /*.mainbg{*/
    /*    background-position: center;*/
    /*background-size: cover;*/
    /*background-repeat: repeat;*/
    /*background-image: linear-gradient(45deg, #ffffff, #dadada4d), url(images/chemicalbg.webp);*/
    /*}*/
</style>

<section class="content-section py-5 mainbg">
    <div class="container">

        <!-- Manufacturing Systems -->

        <div class="row align-items-center g-5">

            <div class="col-lg-5">
                <div class="content-image-placeholder wow fadeInUp">
                    <img src="images/imglab.png" />
                </div>
            </div>

            <div class="col-lg-7">

                <h3 class=" wow fadeInUp">Disciplined Manufacturing</h3>

            <ul class="list-unstyled text-secondary mb-0">
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3" bis_skin_checked="1"><i class="fa fa-check"></i></div>
            <p>Manufacturing processes run through defined Standard Operating Procedures (SOPs), batch controls and process parameters.</p></li>
            
            <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3" bis_skin_checked="1"><i class="fa fa-check"></i></div>
            <p>Critical manufacturing conditions are monitored at relevant stages to ensure processes remain within established operating ranges, supported by trained operating teams, documented procedures and controlled batch records.</p></li>
            
            <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3" bis_skin_checked="1"><i class="fa fa-check"></i></div>
            <p>This structured approach maintains consistency between batches while providing traceability from raw materials through finished-product manufacturing.</p></li>
            
        </ul>

            </div>

        </div>



        <!-- Quality Control -->

        <div class="row align-items-center revcol g-5 mbtn-1">

            <div class="col-lg-7">

                <h3 class=" wow fadeInUp">Raw Material & Supplier Quality</h3>

              <ul class="list-unstyled text-secondary mb-0">
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3" bis_skin_checked="1"><i class="fa fa-check"></i></div>
            <p>Incoming raw materials are inspected and tested according to applicable specifications before being released for production.</p></li>
            
            <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3" bis_skin_checked="1"><i class="fa fa-check"></i></div>
            <p>Supplier performance is monitored for material consistency, quality, reliability and adherence to agreed specifications, through structured supplier qualification, vendor onboarding and periodic performance evaluation.</p></li>
            
            <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3" bis_skin_checked="1"><i class="fa fa-check"></i></div>
            <p>Working collaboratively with suppliers helps maintain a reliable raw-material supply base, reduce variation entering the manufacturing process, and strengthen product integrity throughout our value chain.</p></li>
            
        </ul>

            </div>

            <div class="col-lg-5">
                <div class="content-image-placeholder  wow fadeInUp">
                    <img src="images/labsy1.png" />
                </div>
            </div>

        </div>



        <!-- Supply Chain Compliance -->

        <div class="row align-items-center g-5 mbtn-1">

            <div class="col-lg-5">
                <div class="content-image-placeholder  wow fadeInUp">
                    <img src="images/labtest1.png" class="qc-image" />
                </div>
            </div>

            <div class="col-lg-7">

                <h3 class=" wow fadeInUp">In-Process & Three-Level Quality Control</h3>

                <ul class="list-unstyled text-secondary mb-0">
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3" bis_skin_checked="1"><i class="fa fa-check"></i></div>
            <p>Quality is not treated as a final-stage inspection alone — in-process quality checks are carried out at defined stages of manufacturing to monitor critical product and process parameters, with production and quality teams identifying and addressing deviations before material progresses further.</p></li>
            
            <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3" bis_skin_checked="1"><i class="fa fa-check"></i></div>
            <p>Our quality system operates through layered levels of control — incoming raw materials, in-process material and finished products — each evaluated against defined specifications and testing requirements. On the shop floor, this is executed through our Three-Tier Quality Control System: Shop Floor Inspection, Factory Quality Control (FQC) and Central Quality Control (CQC).</p></li>
            
            <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3" bis_skin_checked="1"><i class="fa fa-check"></i></div>
            <p>Our quality system operates through layered levels of control — incoming raw materials, in-process material and finished products — each evaluated against defined specifications and testing requirements. On the shop floor, this is executed through our Three-Tier Quality Control System: Shop Floor Inspection, Factory Quality Control (FQC) and Central Quality Control (CQC).</p></li>
            
        </ul>

            </div>

        </div>
        
         <div class="row align-items-center g-5 revcol mbtn-1">

          

            <div class="col-lg-7">

                <h3 class=" wow fadeInUp">Process Optimization</h3>

                 <ul class="list-unstyled text-secondary mb-0">
       
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3" bis_skin_checked="1"><i class="fa fa-check"></i></div>
            <p>Manufacturing processes are continuously evaluated to improve process consistency, material utilization, productivity and operating efficiency.</p></li>
            
            <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3" bis_skin_checked="1"><i class="fa fa-check"></i></div>
            <p>Process parameters, production observations, quality results and equipment performance are reviewed to identify opportunities for optimisation, with any change evaluated for its impact on product quality before implementation.</p></li>
            
          
       
            
        </ul>

            </div>
              <div class="col-lg-5">
                <div class="content-image-placeholder  wow fadeInUp">
                    <img src="images/test5.png" />
                </div>
            </div>

        </div>
        
         <div class="row align-items-center g-5 mbtn-1">

            <div class="col-lg-5">
                <div class="content-image-placeholder  wow fadeInUp">
                    <img src="images/handshake.avif" />
                </div>
            </div>

            <div class="col-lg-7">

                <h3 class=" wow fadeInUp">Preventive Maintenance & Equipment Reliability</h3>

                <ul class="list-unstyled text-secondary mb-0">
       
          <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3" bis_skin_checked="1"><i class="fa fa-check"></i></div>
            <p>Preventive maintenance practices are followed for applicable production equipment and utilities, identifying potential issues before they cause unplanned interruptions or process variation.</p></li>
            
            <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3" bis_skin_checked="1"><i class="fa fa-check"></i></div>
            <p>Maintenance activities are planned according to equipment requirements, operating conditions and manufacturer or process recommendations, with equipment condition monitored and maintenance records maintained for applicable assets.</p></li>
            <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3" bis_skin_checked="1"><i class="fa fa-check"></i></div>
            <p>Critical measuring and testing equipment is subject to calibration and verification as required.</p></li>
          
       
            
        </ul>

            </div>

        </div>
        
        <!-- Quality Systems & CAPA -->

<div class="row align-items-center g-5 mbtn-1 revcol">




<div class="col-lg-7">
    <h3 class="wow fadeInUp">Quality Systems & CAPA</h3>

    <ul class="list-unstyled text-secondary mb-0">

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>Continuous improvement is integral to our operational philosophy — driven through regular performance reviews, process optimization and root-cause analysis.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>Corrective and Preventive Action (CAPA) processes are used to investigate significant deviations, identify root causes and establish measures to prevent recurrence — with quality observations, customer feedback, process deviations and audit findings all providing inputs for improvement.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>The focus is not simply on correcting an individual batch, but on strengthening the process wherever a recurring or systemic issue is identified.</p>
        </li>

    </ul>
</div>
<div class="col-lg-5">
    <div class="content-image-placeholder wow fadeInUp">
        <img src="images/qact.png" alt="Quality Systems & CAPA" />
    </div>
</div>


</div>

<!-- R&D, Application Labs & Scale-Up -->

<div class="row align-items-center g-5 mbtn-1">
<div class="col-lg-5 order-lg-2">
    <div class="content-image-placeholder wow fadeInUp">
        <img src="images/research.png" alt="R&D, Application Labs & Scale-Up" />
    </div>
</div>

<div class="col-lg-7 order-lg-1">
    <h3 class="wow fadeInUp">R&D, Application Labs & Scale-Up</h3>

    <ul class="list-unstyled text-secondary mb-0">

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>Manufacturing operations are supported by a Government-recognized Research & Development Centre and specialised application laboratories, alongside in-house Quality Control laboratories.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>Application capabilities include rubber, plastic pipe extrusion, masterbatch extrusion, injection moulding, Re-meter twin-screw extrusion and rubber compounding.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>These facilities allow products and formulations to be evaluated under application-relevant conditions, supporting product development, process optimisation, troubleshooting and customer-specific technical requirements — translating technical improvements into controlled industrial production.</p>
        </li>

    </ul>
</div>




</div>

<!-- Customization & Technical Support -->

<div class="row align-items-center g-5 mbtn-1 revcol">




<div class="col-lg-7">
    <h3 class="wow fadeInUp">Customization & Technical Support</h3>

    <ul class="list-unstyled text-secondary mb-0">

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>We work with customers to understand application requirements and develop suitable product solutions where standard grades do not fully meet required performance.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>Technical teams evaluate processing conditions, formulation requirements, product performance and end-use application when supporting customisation or grade development.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>Application testing and laboratory evaluation provide technical inputs before changes are taken forward for production-scale implementation — connecting customer requirements directly with manufacturing and technical capabilities.</p>
        </li>

    </ul>
</div>
<div class="col-lg-5">
    <div class="content-image-placeholder wow fadeInUp">
        <img src="images/quality-control.png" alt="Customization & Technical Support" />
    </div>
</div>

</div>

<!-- Regulatory & Compliance Framework -->

<div class="row align-items-center g-5 mbtn-1">

<div class="col-lg-5 order-lg-2">
    <div class="content-image-placeholder wow fadeInUp">
        <img src="images/Regulatory-&-Compliance-Framework.png" alt="Regulatory & Compliance Framework" />
    </div>
</div>
<div class="col-lg-7 order-lg-1">
    <h3 class="wow fadeInUp">Regulatory & Compliance Framework</h3>

    <ul class="list-unstyled text-secondary mb-0">

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>We are committed to meeting applicable regulatory requirements and customer-specific quality expectations across our operations, supporting consistent product performance and effective risk management.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>Certifications supporting our quality and compliance framework include ISO 9001:2015, GMP, REACH, RoHS, EN71, FDA Compliance Standards, Halal, Kosher, FSSAI Registration, Drug License/CDSCO Compliance, USDMF and Sedex Compliance Standards — applied according to specific product group and destination market.</p>
        </li>

    </ul>
</div>




</div>

<!-- Continuous Improvement -->

<div class="row align-items-center g-5 mbtn-1 revcol">




<div class="col-lg-7">
    <h3 class="wow fadeInUp">Continuous Improvement</h3>

    <ul class="list-unstyled text-secondary mb-0">

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>Operational excellence at MLA is an ongoing process rather than a one-time programme.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>Manufacturing performance, quality results, maintenance observations, customer feedback and audit findings are used to identify areas for improvement — spanning process optimisation, equipment upgrades, better operating controls, material utilisation, quality-system improvements and changes to manufacturing practices.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>The objective is to continuously improve the reliability of our operations while maintaining consistent quality and meeting customer and regulatory requirements.</p>
        </li>

    </ul>
</div>

<div class="col-lg-5">
    <div class="content-image-placeholder wow fadeInUp">
        <img src="images/Customization-&-Technical-Support.png" alt="Continuous Improvement" />
    </div>
</div>
</div>

        
        

    </div>
</section>

<style>
.qc-image{
    height:450px !important;
}
.content-section p {
    color: #5E626F;
    margin-bottom:0 !important;
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
.opr li{
    list-style:disc !important;
}
    .opr{
        justify-content: center;
    gap: 32px;
    list-style: circle;
    color: #f3791f;
    }
</style>

<section class="mb-5">
    <div class="container" bis_skin_checked="1">
      <div class="p-4 p-md-5 rounded-4 bg-chemical-card-dark text-white custom-card-shadow border border-secondary border-opacity-25" bis_skin_checked="1">
        <div class="row gy-4 align-items-center" bis_skin_checked="1">
          <div class="col-lg-12 text-center" bis_skin_checked="1">
            <div class="gap-2 mb-3 text-center" bis_skin_checked="1">
              <!--<i class="fa-solid fa-cloud-sun fa-lg" style="color: #f3791f;  margin-right:3px"></i>-->
              <h2 class="h3 fw-bold mb-0 text-white ">Our Commitment</h2>
            </div>
            <ul class="d-flex align-items-center gap-2 opr"><li>Control the Process</li><li>Maintain Consistency</li><li> Improve Continuously</li></ul>
          <p class="text-white">
            MLA's operational excellence framework brings together disciplined manufacturing, quality control, technical capability, equipment reliability, responsible supplier partnerships and continuous improvement. From incoming raw-material inspection to final-product release, and from laboratory development to full-scale manufacturing, each stage is supported by defined controls and technical expertise — enabling MLA to deliver consistent products, reliable manufacturing performance and responsive technical support across its diverse product portfolio and international customer base.
          </p>
          </div>
      
        </div>
      </div>
    </div>
  </section>

<style>
.bg-chemical-card-dark{
    background-color: #1c1e22;
    background-image: radial-gradient(rgba(243, 121, 31, 0.12) 1.2px, transparent 1.2px);
    background-size: 28px 28px;
}
    .certification-section{
         background-position: center;
    background-size: cover;
    background-repeat: repeat;
    background-image: linear-gradient(45deg, #82828212, #82828212), url(images/chemicalbg.webp);
    }
    .text-white{
        color:#fff !important;
    }
</style>

<section class="certification-section py-5">
    <div class="container">

        <div class="intro-card">

            <h2 class=" wow fadeInUp">Global Certifications & Regulatory Compliance</h2>

            <p class=" wow fadeInUp">
                Our commitment to global quality and compliance standards is reinforced through internationally recognized certifications and regulatory approvals.
            </p>

            <div class="row g-3 mt-4">

                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> ISO 9001:2015</div></div>
                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> ISO 45001</div></div>
                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> ISO 14001</div></div>
                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> GMP Compliance</div></div>

                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> RoHS Compliance</div></div>
                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> REACH Compliance</div></div>
                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> EU Compliance</div></div>
                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> EN71 Compliance</div></div>

                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> FDA Compliance</div></div>
                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> Halal Certification</div></div>
                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> Kosher Certification</div></div>
                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> FSSAI Registration</div></div>

                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> CDSCO Drug License</div></div>
                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> USDMF Registration</div></div>
                <div class="col-md-3"><div class="cert-box"> <i class="fa fa-check"></i> Sedex Compliance</div></div>

            </div>

        </div>

    </div>
</section>



<section class="contact-section p5">
    <div class="containe">

        <div class="contact-card">

            <div class="row align-items-center">

                <div class="col-lg-12 text-center">

                    <h3 class="mt-2 wow fadeInUp" style="color:#fff">
                        For compliance-related matters, <br> certifications,
                        and regulatory documentation<br>

                        <span style="color:#F78631;">
                            Mr. Narendra Bajpai
                        </span>
                    </h3>

                    <p class="mb-0 wow fadeInUp" style="color:#fff">
                        Compliance & Administration
                    </p>

                </div>

                <div class="col-lg-12 text-center mt-3 wow fadeInUp">
                    <a href="mailto:admin@mlagroup.com" class="contact-btn">
                        admin@mlagroup.com
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>
<?php
include("footer.php");
?>