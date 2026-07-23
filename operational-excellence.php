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
        width: 100%;
        object-fit: cover;
}

    @media only screen and (max-width:768px){
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
                        Operational Excellence, Quality & Compliance
                    </h1>

                    <p class="hero-text mt-4  wow fadeInUp">
                        At MLA Group, operational excellence is driven by disciplined manufacturing practices, robust quality management systems, and a commitment to continuous improvement. We strive to deliver products that consistently meet customer expectations through standardized processes, responsible manufacturing, and effective operational controls.
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


<section class="intro-card-section">
    <div class="container">
        <div class="intro-card">
            <!-- <h2>Manufacturing Excellence & Process Control</h2> -->

            <p class=" wow fadeInUp">
               Our manufacturing operations are supported by defined Standard Operating Procedures (SOPs), stringent raw material inspection, batch-wise production controls, in-process quality monitoring, preventive maintenance programs, equipment calibration, and safe chemical handling practices. These systems help ensure product consistency, operational efficiency, regulatory compliance, and reliable manufacturing performance across all our facilities.
            </p>
        </div>
    </div>
</section>



<section class="content-section py-5">
    <div class="container">

        <!-- Manufacturing Systems -->

        <div class="row align-items-center g-5">

            <div class="col-lg-5">
                <div class="content-image-placeholder">
                    <img src="images/imglab.png" />
                </div>
            </div>

            <div class="col-lg-7">

                <!--<h3 class=" wow fadeInUp">Structured Manufacturing Systems</h3>-->

                <p class=" wow fadeInUp">
                    Quality assurance is embedded throughout the manufacturing lifecycle. Our Three-Tier Quality Control System comprises Shop Floor Inspection, Factory Quality Control (FQC), and Central Quality Control (CQC), ensuring that every stage—from production to final dispatch—is monitored, tested, and verified against established quality requirements. Comprehensive documentation, batch traceability, and laboratory testing further strengthen product reliability and customer confidence.
                </p>

            </div>

        </div>



        <!-- Quality Control -->

        <div class="row align-items-center revcol g-5 mbtn-1">

            <div class="col-lg-7">

                <!--<h3 class=" wow fadeInUp">Three-Tier Quality Control System</h3>-->

                <p class=" wow fadeInUp">
                    Continuous improvement forms an integral part of our operational philosophy. Through regular performance reviews, process optimization, root cause analysis, and Corrective and Preventive Action (CAPA) mechanisms, we continuously enhance manufacturing efficiency, product quality, and operational effectiveness while minimizing waste and improving resource utilization.
                </p>

            </div>

            <div class="col-lg-5">
                <div class="content-image-placeholder">
                    <img src="images/labsy1.png" />
                </div>
            </div>

        </div>



        <!-- Supply Chain Compliance -->

        <div class="row align-items-center g-5 mbtn-1">

            <div class="col-lg-5">
                <div class="content-image-placeholder">
                    <img src="images/labtest1.png" />
                </div>
            </div>

            <div class="col-lg-7">

                <!--<h3 class=" wow fadeInUp">Supplier Evaluation & Compliance</h3>-->

                <p class=" wow fadeInUp">
                   We are equally committed to meeting applicable regulatory requirements and customer-specific quality expectations. Our quality and compliance framework supports consistent product performance while promoting responsible manufacturing practices and effective risk management across our operations.
                </p>

            </div>

        </div>
        
         <div class="row align-items-center g-5 revcol mbtn-1">

          

            <div class="col-lg-7">

                <!--<h3 class=" wow fadeInUp">Supplier Evaluation & Compliance</h3>-->

                <p class=" wow fadeInUp">
                  Responsible supply chain management complements our manufacturing excellence. Structured supplier qualification, vendor onboarding, performance evaluation, and ongoing supplier monitoring help ensure that raw materials and services meet our quality, regulatory, and ethical expectations. By working collaboratively with our suppliers, we strengthen product integrity and promote responsible business practices throughout our value chain.
                </p>

            </div>
              <div class="col-lg-5">
                <div class="content-image-placeholder">
                    <img src="images/test5.png" />
                </div>
            </div>

        </div>
        
         <div class="row align-items-center g-5 mbtn-1">

            <div class="col-lg-5">
                <div class="content-image-placeholder">
                    <img src="images/handshake.avif" />
                </div>
            </div>

            <div class="col-lg-7">

                <!--<h3 class=" wow fadeInUp">Supplier Evaluation & Compliance</h3>-->

                <p class=" wow fadeInUp">
                   Through disciplined operational controls, a strong quality culture, responsible supplier partnerships, and a focus on continuous improvement, MLA Group remains committed to delivering safe, reliable, and high-quality products while creating long-term value for customers and stakeholders.
                </p>

            </div>

        </div>

    </div>
</section>



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



<section class="contact-section py-5">
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