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
        background: #eeefef;
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
        width: 100%;
        object-fit: cover;
}

    @media only screen and (max-width:768px){
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
   Ethical Governance & Responsible Business Practices
</h1>

<p class="hero-text mt-4  wow fadeInUp">
  Integrity, transparency, accountability, and responsible governance form the foundation of MLA Group's business philosophy. We are committed to conducting our business in an ethical, transparent, and responsible manner while ensuring compliance with applicable legal, regulatory, and industry requirements. Our governance framework supports sustainable business growth by integrating ethical decision-making, operational discipline, risk awareness, and accountability across all levels of the organization.
</p>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-image-placeholder">
                    <img src="img/bannerimhgt.png" />
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 
<section class="intro-card-section">
    <div class="container">
        <div class="intro-card"> -->
           <!-- <h2>Governance Framework & Accountability</h2> -->

            <!-- <p>
                Our governance framework includes structured operational review systems, internal compliance monitoring mechanisms, policy implementation procedures, and continuous oversight processes that help maintain responsible business conduct and operational discipline.
            </p>
        </div>
    </div>
</section> -->



<section class="content-section py-5">
    <div class="container">

        <!-- Manufacturing Systems -->

     <div class="row align-items-center g-5">

    <div class="col-lg-5">
        <div class="content-image-placeholder ">
            <img class=" wow fadeInUp" src="https://img.magnific.com/free-photo/close-up-hand-business-man-busy-office-desk-notebook-documents-working_1150-15424.jpg?semt=ais_hybrid&w=740&q=80" />
        </div>
    </div>

    <div class="col-lg-7">

        <!-- <h3>Responsible Governance & Compliance</h3> -->

        <p class=" wow fadeInUp">
          Our governance system is supported through structured operational review processes, clearly defined roles and responsibilities, internal compliance monitoring, documented policies and procedures, management oversight, and periodic performance evaluations. These mechanisms help ensure that business decisions are made responsibly, business risks are effectively managed, and operations remain aligned with our organizational values and compliance objectives.
        </p>

    </div>

</div>



       <div class="row align-items-center revcol g-5 mbtn-1">

    <div class="col-lg-7">

        <!-- <h3>Ethical Business Conduct</h3> -->

        <p class=" wow fadeInUp">
          MLA Group maintains a strong commitment to ethical business conduct and follows a zero-tolerance approach toward bribery, corruption, fraud, conflicts of interest, unethical business practices, discrimination, child labor, forced or bonded labor, modern slavery, sexual harassment, retaliation, and any form of misconduct that compromises the integrity of our organization. Ethical behavior and responsible business conduct are expected from employees, management, contractors, business partners, and suppliers associated with our operations.
        </p>

    

    </div>

    <div class="col-lg-5">
        <div class="content-image-placeholder">
            <img class=" wow fadeInUp" src="https://img.magnific.com/free-photo/teamwork-support-friendship-gesture_1262-20464.jpg?semt=ais_hybrid&w=740&q=80" />
        </div>
    </div>

</div>



        <!-- Supply Chain Compliance -->

      <div class="row align-items-center g-5 mbtn-1">

    <div class="col-lg-5">
        <div class="content-image-placeholder">
            <img class=" wow fadeInUp" src="https://media.istockphoto.com/id/1572436997/photo/diversity-and-inclusion-at-workplace-lgbt-leadership.jpg?s=612x612&w=0&k=20&c=Vz3X2zI-QSfqqL3nHSOko9g75gIVmTG9jbe5WNSavRU=" />
        </div>
    </div>

    <div class="col-lg-7">

        <!-- <h3>People, Fairness & Human Rights</h3> -->

        <p class=" wow fadeInUp">
         We promote a culture of transparency by encouraging employees and stakeholders to report concerns related to unethical conduct, compliance violations, workplace misconduct, or other business integrity issues through confidential grievance and whistleblower mechanisms. All reported concerns are handled with fairness, confidentiality, impartiality, and appropriate internal review, while protecting individuals against retaliation for reporting concerns in good faith.
        </p>

    </div>

</div>

<div class="row align-items-center revcol g-5 mbtn-1">

   

    <div class="col-lg-7">

        <!-- <h3>People, Fairness & Human Rights</h3> -->

        <p class=" wow fadeInUp">
     Respect for internationally recognized human rights and fair labor practices is an integral part of our governance approach. We are committed to providing equal employment opportunities, promoting diversity and inclusion, maintaining a safe and respectful workplace, preventing discrimination and harassment, supporting employee wellbeing, and ensuring fair treatment throughout the employment lifecycle. We believe that responsible business success is built upon mutual respect, trust, and the protection of employee rights.
        </p>

    </div>
     <div class="col-lg-5">
        <div class="content-image-placeholder">
            <img class=" wow fadeInUp" src="images/trainin.png" />
        </div>
    </div>

</div>

<div class="row align-items-center g-5 mbtn-1">

    <div class="col-lg-5">
        <div class="content-image-placeholder">
            <img class=" wow fadeInUp" src="images/mett.jpg" />
        </div>
    </div>

    <div class="col-lg-7">

        <!-- <h3>People, Fairness & Human Rights</h3> -->

        <p class=" wow fadeInUp">
    MLA Group also recognizes the importance of responsible supply chain management. We encourage our suppliers and business partners to uphold ethical business practices, comply with applicable laws and regulations, respect human rights, and support responsible environmental and social practices that align with our organizational values.
        </p>

    </div>

</div>

<div class="row align-items-center g-5 mbtn-1 revcol">



    <div class="col-lg-7">

        <!-- <h3>People, Fairness & Human Rights</h3> -->

        <p class=" wow fadeInUp">
   Through continuous improvement, policy awareness, employee engagement, compliance monitoring, and responsible governance practices, MLA Group strives to strengthen its ethical culture, enhance stakeholder confidence, effectively manage business risks, and create long-term sustainable value for customers, employees, suppliers, communities, and all other stakeholders.
        </p>

    </div>
        <div class="col-lg-5">
        <div class="content-image-placeholder">
            <img class=" wow fadeInUp" src="images/mlag.jpg" />
        </div>
    </div>

</div>

    </div>
</section>
<section class="contact-section py-5">
      <div class="container">
          
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2>Image Gallery</h2>
              </div>
            <div class="col-lg-12">
                
    <div class="swiper mySwipers">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="images/image12.jpg" alt="Image 1">
            </div>

            <!--<div class="swiper-slide">-->
            <!--    <img src="images/image23.jpg" alt="Image 2">-->
            <!--</div>-->

            <div class="swiper-slide">
                <img src="images/image21.jpg" alt="Image 3">
            </div>

            <div class="swiper-slide">
                <img src="images/image24.jpg" alt="Image 4">
            </div>

            <div class="swiper-slide">
                <img src="images/image9.jpg" alt="Image 5">
            </div>

            <!--<div class="swiper-slide">-->
            <!--    <img src="images/image6.jpg" alt="Image 6">-->
            <!--</div>-->

        </div>

        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
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
                        For reporting concerns related to ethics, <br>
                        misconduct, policy violations, or whistleblower matters
                        <br>

                        <span style="color:#F78631;">
                            Mr. Sumit Agarwal
                        </span>
                    </h3>

                    <p class="mb-0 wow fadeInUp" style="color:#fff">
                        Managing Director
                    </p>

                </div>

                <div class="col-lg-12 text-center mt-3 wow fadeInUp">
                    <a href="mailto:md@mlagroup.com" class="contact-btn">
                        md@mlagroup.com
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>
<style>
    .mySwipers {
    width: 100%;
    padding: 20px 0 50px;
}

.mySwipers .swiper-slide {
    overflow: hidden;
    border-radius: 10px;
}

.mySwipers .swiper-slide img {
    width: 100%;
    background:#ff9f5736;
    border:1px solid #cacaca;
    height: 347px;      /* Equal height for all images */
    object-fit: cover;  /* Crop while maintaining aspect ratio */
    display: block;
    border-radius: 10px;
}

/* Navigation */
.mySwipers .swiper-button-next,
.mySwipers .swiper-button-prev {
   color: #f3791f;
    background: #000;
    border-radius: 50%;
    height: 49px;
    width: 49px;
    font-size: 11px;
}

.mySwipers .swiper-button-next:after, .mySwipers .swiper-button-prev:after{
    font-size:18px !important;
}

/* Pagination */
.mySwipers .swiper-pagination-bullet-active {
    background: #000;
}

/* Mobile */
@media (max-width: 767px) {
    .mySwipers .swiper-slide img {
        height: 220px;
    }
}
</style>
<script>
  
</script>
<?php
include("footer.php");
?>