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
        width: 100%;
    height: 100%;
    /*left: -10px;*/
    /*z-index: -1;*/
    /*top: -10px;*/
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
    
    .govestrcuture p{
        margin-bottom:0 !important;
    }
    .mbtn-1{
        margin-top:0.5rem;
    }
</style>

<section class="ehs-hero">
    <div class="containert">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="innerps">

                   <h1 class="hero-title mt-3 wow fadeInUp">
  Ethical Governance & Responsible Business
</h1>
<h3>Sound Governance. Ethical Conduct. Responsible Operations.</h3>

<p class="hero-text mt-4  wow fadeInUp">
Strong governance and ethical conduct underpin how MLA Group operates — from internal decision-making and compliance oversight to how we treat our people, our suppliers and the communities connected to our business.
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



<section class="content-section py-5 govestrcuture">
    <div class="container">
        <!-- Governance Structure -->

<div class="row align-items-center g-5">


<div class="col-lg-5">
    <div class="content-image-placeholder wow fadeInUp">
        <img src="images/governane.avif" alt="Governance Structure" />
    </div>
</div>

<div class="col-lg-7">
    <h3 class="wow fadeInUp">Governance Structure</h3>

    <ul class="list-unstyled text-secondary mb-0">

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>Our governance system is supported through structured operational review processes, clearly defined roles and responsibilities, and internal compliance monitoring.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>Documented policies and procedures, management oversight, and periodic performance evaluations help ensure that business decisions are made responsibly.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>These mechanisms help ensure that business risks are effectively managed, and that operations remain aligned with our organizational values and compliance objectives.</p>
        </li>

    </ul>
</div>


</div>

<!-- Ethical Business Conduct -->

<div class="row align-items-center g-5 mbtn-1 revcol">


<div class="col-lg-7 order-lg-1">
    <h3 class="wow fadeInUp">Ethical Business Conduct</h3>

    <ul class="list-unstyled text-secondary mb-0">

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>MLA Group maintains a strong commitment to ethical business conduct and follows a zero-tolerance approach toward bribery, corruption, fraud, conflicts of interest and unethical business practices.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>We take the same zero-tolerance stance against discrimination, child labor, forced or bonded labor, modern slavery, sexual harassment, retaliation, and any form of misconduct that compromises the integrity of our organization.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>Ethical behavior and responsible business conduct are expected from employees, management, contractors, business partners and suppliers associated with our operations.</p>
        </li>

    </ul>
</div>

<div class="col-lg-5 order-lg-2">
    <div class="content-image-placeholder wow fadeInUp">
        <img src="images/teamsupport.avif" alt="Ethical Business Conduct" />
    </div>
</div>


</div>

<!-- Transparency, Grievance & Whistleblower Mechanisms -->

<div class="row align-items-center g-5 mbtn-1">

<div class="col-lg-5">
    <div class="content-image-placeholder wow fadeInUp">
        <img src="images/promotesupport.jpg" alt="Transparency, Grievance & Whistleblower Mechanisms" />
    </div>
</div>

<div class="col-lg-7">
    <h3 class="wow fadeInUp">Transparency, Grievance & Whistleblower Mechanisms</h3>

    <ul class="list-unstyled text-secondary mb-0">

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>We promote a culture of transparency by encouraging employees and stakeholders to report concerns related to unethical conduct, compliance violations, workplace misconduct, or other business integrity issues.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>Concerns can be raised through confidential grievance and whistleblower mechanisms.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>All reported concerns are handled with fairness, confidentiality, impartiality and appropriate internal review, while protecting individuals against retaliation for reporting concerns in good faith.</p>
        </li>

    </ul>
</div>


</div>

<!-- Human Rights & Fair Labor Practices -->

<div class="row align-items-center g-5 mbtn-1 revcol">


<div class="col-lg-7 order-lg-1">
    <h3 class="wow fadeInUp">Human Rights & Fair Labor Practices</h3>

    <ul class="list-unstyled text-secondary mb-0">

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>Respect for internationally recognized human rights and fair labor practices is an integral part of our governance approach.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>We are committed to providing equal employment opportunities, promoting diversity and inclusion, maintaining a safe and respectful workplace, and preventing discrimination and harassment.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>We support employee wellbeing and ensure fair treatment throughout the employment lifecycle, believing that responsible business success is built upon mutual respect, trust and the protection of employee rights.</p>
        </li>

    </ul>
</div>

<div class="col-lg-5 order-lg-2">
    <div class="content-image-placeholder wow fadeInUp">
        <img src="images/trainin.png" alt="Human Rights & Fair Labor Practices" />
    </div>
</div>


</div>

<!-- Responsible Supply Chain -->

<div class="row align-items-center g-5 mbtn-1">


<div class="col-lg-5">
    <div class="content-image-placeholder wow fadeInUp">
        <img src="images/logistics.jpg" alt="Responsible Supply Chain" />
    </div>
</div>

<div class="col-lg-7">
    <h3 class="wow fadeInUp">Responsible Supply Chain</h3>

    <ul class="list-unstyled text-secondary mb-0">

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>MLA Group recognizes the importance of responsible supply chain management.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>We encourage our suppliers and business partners to uphold ethical business practices, comply with applicable laws and regulations, and respect human rights.</p>
        </li>

        <li class="d-flex align-items-start mb-2">
            <div class="icon-box-check me-3">
                <i class="fa fa-check"></i>
            </div>
            <p>We expect our supply chain to support responsible environmental and social practices that align with our organizational values.</p>
        </li>

    </ul>
</div>


</div>

        

        <!-- Manufacturing Systems -->

  

     

    </div>
</section>
<style>
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
       .mainbg{
          background-position: center;
    background-size: cover;
    background-repeat: repeat;
    background-image: linear-gradient(45deg, #82828212, #82828212), url(images/chemicalbg.webp);
    }
    .bg-chemical-card-dark {
    background-color: #1c1e22;
    background-image: radial-gradient(rgba(243, 121, 31, 0.12) 1.2px, transparent 1.2px);
    background-size: 28px 28px;
}
.text-white {
    color: #fff !important;
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
         
          <p class="text-white">
         Through continuous improvement, policy awareness, employee engagement, compliance monitoring and responsible governance practices, MLA Group strives to strengthen its ethical governance practices, enhance stakeholder confidence, effectively manage business risks, and create long-term sustainable value for customers, employees, suppliers, communities and all other stakeholders.
          </p>
          </div>
      
        </div>
      </div>
    </div>
  </section>
<section class="contact-section py-5 mainbg">
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

            <div class="swiper-slide">
                <img src="images/train.jpg" alt="Image 6">
            </div>

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
<section class="contact-section p">
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