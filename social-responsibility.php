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
        .mty{
            margin-top:10px;
        }
        .gloatimg{
            position: relative !important;
            top:unset !important;
        }
        .rver{
            flex-direction: column-reverse;
        }
          .innerps {
    padding: 1rem 2rem 1rem 2rem !important;
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

    :root{
    --primary:#F78631;
    --dark:#24262B;
    --light:#D9D9D9;
}

/* =========================
   LEADERSHIP SECTION
========================= */

.leadership-section{
    padding:100px 0;
    position:relative;
}

.leadership-section .row{
    margin-bottom:10px;
}

.small-title{
    color:var(--primary);
    text-transform:uppercase;
    font-size:14px;
    letter-spacing:2px;
    font-weight:600;
}

.leadership-section h2{
    /* font-size:42px; */
    margin:15px 0 25px;
    color:var(--dark);
}

.leadership-section p{
    font-size:17px;
    line-height:1.8;
    color:#555;
}

.leader-img{
    width:100%;
    max-width:320px;
    margin:auto;
    display:block;
    filter:drop-shadow(0 20px 40px rgba(0,0,0,.12));
}

.leadership-section .col-lg-4{
    position:relative;
}

.leadership-section .col-lg-4::before{
       position: absolute;
    width: 323px;
    bottom: 0;
    margin: auto;
    height: 80%;
    /* background:#000; */
    z-index: 0;
    content:"";
    left: 0;
    border: 2px solid rgb(249 149 49);
    /* clip-path: polygon(25% 6.7%, 75% 6.7%, 100% 50%, 75% 93.3%, 25% 93.3%, 0% 50%); */
    /* top: 50%; */
    /* left: 50%; */
    /* transform: translate(-50%, -50%); */
    right: 0;
}

/* =========================
   IMPACT STRIP
========================= */

.impact-strip{
    background:var(--dark);
    padding:21px 0;
}

.impact-strip .col-md-4{
    position:relative;
}

.impact-strip .col-md-4:not(:last-child):after{
    content:"";
    position:absolute;
    right:0;
    top:50%;
    transform:translateY(-50%);
    width:1px;
    height:80px;
    background:rgba(255,255,255,.12);
}

.impact-strip h3{
    font-size:36px;
    font-weight:700;
    color:var(--primary);
    margin-bottom:10px;
}

.impact-strip p{
    color:#fff;
    font-size:18px;
    margin:0;
}

/* =========================
   INITIATIVE SECTION
========================= */

.initiative-section{
    padding:100px 0;
    background:#fafafa;
}

.section-title{
    /* font-size:48px; */
    color:var(--dark);
    margin-bottom:70px !important;
}

.initiative-card{
    background:#fff;
    border:1px solid #ececec;
    padding:35px;
    position:relative;
    overflow:hidden;
    transition:.3s;
}

.initiative-card:hover{
    transform:translateY(-8px);
    box-shadow:0 25px 50px rgba(0,0,0,.08);
}

.initiative-card:before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:5px;
    height:100%;
    background:var(--primary);
}

.initiative-card img{
    width:100%;
    height:320px;
    object-fit:cover;
}

.initiative-label{
    color:var(--primary);
    text-transform:uppercase;
    letter-spacing:1px;
    font-size:13px;
    font-weight:700;
}

.initiative-card h3{
    margin:15px 0 20px;
    /* font-size:34px; */
    color:var(--dark);
}

.initiative-card p{
    /* color:#666; */
    line-height:1.9;
}

.initiative-card:nth-child(2){
    margin-top:34px;
}

.initiative-card:nth-child(3){
    margin-top:34px;
}

.initiative-card:nth-child(4){
    margin-top:34px;
}

/* =========================
   NUMBER STYLE
========================= */

.initiative-card{
    counter-increment:item;
}

/* .initiative-card::after{
    content:"0" counter(item);
    position:absolute;
    right:25px;
    top:15px;
    font-size:90px;
    font-weight:700;
    color:rgba(247,134,49,.08);
    line-height:1;
} */

/* =========================
   CLOSING SECTION
========================= */

.closing-section{
    padding:40px 0;
     background:var(--dark);
}

.closing-card{
    /* background:var(--dark); */
    color:#fff;
    /* padding:80px; */
    position:relative;
    overflow:hidden;
}

.closing-card:before{
    content:"";
    position:absolute;
    right:-40px;
    top:-40px;
    width:220px;
    height:220px;
    border:2px solid rgba(247,134,49,.12);
    clip-path:polygon(25% 6.7%,75% 6.7%,100% 50%,75% 93.3%,25% 93.3%,0% 50%);
}

.closing-card h2{
    color:#fff;
    /* font-size:42px; */
    margin-bottom:25px;
}

.closing-card p{
    /* font-size:18px; */
    /* line-height:1.9; */
    color:rgba(255,255,255,.85);
    max-width:900px;
}

/* =========================
   CSR HERO IMPROVEMENT
========================= */

.csr-hero{
    /* padding:90px 0; */
}

.hero-img{
    width:100%;
}

.hero-title{
    /* font-size:60px; */
    /* line-height:1.1; */
    color:var(--dark);
}

.hero-text{
    font-size:18px;
    line-height:1.8;
    /* color:#666; */
}

/* =========================
   MOBILE
========================= */

@media(max-width:991px){
/* 
    .hero-title{
        font-size:42px;
    }

    .section-title{
        font-size:34px;
    }

    .initiative-card h3{
        font-size:26px;
    }

    .impact-strip h3{
        font-size:50px;
    } */

    .closing-card{
        padding:40px 25px;
    }

    .impact-strip .col-md-4:not(:last-child):after{
        display:none;
    }

    .initiative-card img{
        height:auto;
        margin-top:20px;
        margin-bottom:20px;
    }
}

.leadership-section .col-lg-4 div{
    /* right: 0; */
    /* position: absolute; */
    width: 323px;
    position: relative;
    z-index: 10;
    color:#fff;
    padding:15px 0;
    font-weight: 600;
    font-size: 20px;
    bottom: 0;
    text-align: center;
    background-color: #f3791f;
    margin: auto;
    /* height: 69%; */
    /* z-index: 0;
    content: "";
    left: 0; */
    border: 2px solid rgb(249 149 49);
}
  .innerps{
        padding:3rem 2rem 3rem 5rem;
    }
</style>

<!-- HERO SECTION -->

<section class="ehs-hero csr-hero">
    <div class="containerss">

        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="innerps">
                <h1 class="hero-title  wow fadeInUp">
                    Social Responsibility & Community Impact
                </h1>

                <p class="hero-text mt-4 wow fadeInUp">
                    At MLA Group of Industries, we believe that responsible business growth extends beyond industrial success and must create meaningful, long-term impact for society and the environment.
                </p>
</div>
            </div>

            <div class="col-lg-6">
                <img src="img/onet.png" class="img-fluid hero-img">
            </div>

        </div>

    </div>
</section>


<!-- INTRO -->

<section class="intro-card-section">
    <div class="container">

        <div class="intro-card">

            <p class="wow fadeInUp">
                Our approach towards corporate social responsibility is deeply rooted in the values established by our leadership and reflects our commitment towards community development, environmental sustainability, education, and social welfare.
            </p>

        </div>

    </div>
</section>


<!-- LEADERSHIP SECTION -->

<section class="leadership-section py-5">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-4">
                
                <img src="https://www.mlagroup.com/images/Mr_Murari_Lal_Agarwal_-removebg-preview.png" class="img-fluid leader-img">
                <div> Mr. Murari Lal Agarwal <br> <a target="_blank" style="color:#fff" href="https://murarilalagrawal.com/" target="_blank"><i class="fa fa-link"></i> murarilalagrawal.com </a></div>
            </div>

            <div class="col-lg-8">

                <span class="small-title wow fadeInUp">
                    Founder
                </span>

                <!-- <h2>
                   Mr. Murari Lal Agarwal
                 </h2> -->

                <p class="wow fadeInUp">
                    A renowned philanthropist and social worker dedicated to serving underprivileged communities, Mr. Murari Lal Agarwal laid the foundation of MLA Group with a vision built on excellence, integrity, and strong business values
</p>

                <p class="wow fadeInUp">
                    His leadership has played a defining role in building a culture centered around discipline, quality, and long-term responsibility.
                </p>

            </div>

        </div>


        <div class="row align-items-center g-5 rver">

            <div class="col-lg-8">

                <span class="small-title wow fadeInUp">
                    Managing Director
                </span>

                <!-- <h2>
                    Mr. Sumit Agarwal
                </h2> -->

                <p  class="wow fadeInUp">
                    Carrying forward this legacy, Mr. Sumit Agarwal has further strengthened the organization’s vision by integrating sustainability, social responsibility, and community development into MLA Group’s long-term growth strategy.
</p>

                <p  class="wow fadeInUp">
                    Guided by the belief that business success must create value beyond operations, he has led the development of several structured initiatives focused on creating measurable and lasting social impact.
                </p>

            </div>

            <div class="col-lg-4">
                <img src="https://www.mlagroup.com/images/Mr._Sumit_Agarwal-removebg-preview.png" class="img-fluid leader-img">
                        <div>      Mr. Sumit Agarwal <br> <a  target="_blank" style="color:#fff" href="https://sumitagarwal.net" target="_blank"><i class="fa fa-link"></i> sumitagarwal.net </a></div>
                       
            </div>

        </div>

    </div>

</section>


<!-- IMPACT NUMBERS -->

<section class="impact-strip">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-4 wow fadeInUp">
                <h3>35+</h3>
                <p>Scholarships Supported</p>
            </div>

            <div class="col-md-4 wow fadeInUp">
                <h3>3000+</h3>
                <p>Meals Distributed Daily</p>
            </div>

            <div class="col-md-4 wow fadeInUp">
                <h3>Ongoing</h3>
                <p>Environmental Initiatives</p>
            </div>

        </div>

    </div>

</section>

<style>
.gloatimg{
    position: absolute;
    right:10px;
    top:7px;
}
    </style>

<!-- INITIATIVES -->


<section class="initiative-section py-5">

    <div class="container">

    <div class="prerna-ngo">
        <div class="d-flex align-items-center mb-2" style="gap:20px">
            <img style="width:120px; border-radius:10px; border:3px solid #F78631" src="img/prenana.png" alt="PRERNA - MLA Group's CSR Initiative">
     <div class="section-head style-1" style="margin-bottom:0px">
            <h2>PRERNA <br> MLA Group's CSR Initiative</h2>
</div>
        </div>
        

        <p>At MLA Group of Industries, we believe that responsible growth goes hand in hand with social progress. Through PRERNA, our dedicated CSR initiative, we strive to create a meaningful and lasting impact in the communities we serve.</p>
        <p>
            PRERNA focuses on key areas such as education, nutrition, environmental sustainability, and community development. Through initiatives including the SAF Education Initiative, Satvik Roti Rolls, and MLA Green Kanpur,  the organization works to improve access to quality education, promote environmental awareness, support nutritional well-being, and empower communities. Guided by the values of integrity, compassion, innovation, and sustainability, PRERNA embodies MLA Group's commitment to building a stronger, more inclusive, and sustainable future.
        </p>
    </div>

        <div class="section-head style-1">
        <!-- <h3 class="title text-center  wow fadeInUp">
            Our Community Impact Initiatives
        </h3> -->
        </div>

        <!-- SAF -->

        <div class="initiative-card">

            <div class="row align-items-center">

                <div class="col-lg-5">
                      <div class="sv-reel-video-wrapper">
    <video class="sv-reel-video" controls playsinline poster="images/increase.png">
        <source src="images/video.mp4" type="video/mp4">
    </video>
</div>
                    <!--<img src="img/increase.png" class="img-fluid">-->
                </div>

                <div class="col-lg-7">
                      <img class="gloatimg" style="width: 90px; display:block; height:auto;" src="img/1w.jpg" alt="">

                    <span class="initiative-label  wow fadeInUp">
                        Education & Skill Development
                    </span>
                    <h3 class=" wow fadeInUp">
                        Sumit Agarwal Foundation (SAF)
                    </h3>

                    <p class=" wow fadeInUp">
                      The Sumit Agarwal Foundation (SAF) was established with the vision of empowering individuals through education, skill development, and long-term career opportunities. Through the Sumit Agarwal Foundation Institute , the foundation equips young individuals with industry-relevant skills through structured training programs focused on employer expectations, workplace readiness, communication, professional etiquette, and personality development.
                    </p>

                    <p class=" wow fadeInUp">
                       By enhancing employability and preparing candidates for real-world careers, SAF provides placement assistance to help candidates secure meaningful employment and build successful careers. Through these initiatives, the foundation is committed to developing a skilled, confident, and future-ready workforce while creating sustainable livelihood opportunities.
                    </p>

                </div>

            </div>

        </div>

         <div class="initiative-card">

            <div class="row align-items-center">
  <div class="col-lg-5">
                    <img src="img/sumitedu.png" class="img-fluid">
                </div>
               

                <div class="col-lg-7">
                      <img class="gloatimg" style="width: 90px; display:block; height:auto;" src="img/1w.jpg" alt="">

                    <span class="initiative-label  wow fadeInUp">
                        Education & Skill Development
                    </span>
                    <h3 class=" wow fadeInUp">
                      Scholarship Program
                    </h3>

                    <p class=" wow fadeInUp">
                      The Scholarship Program is dedicated to ensuring that financial constraints do not hinder a child's education and future aspirations. Through monthly scholarships, the program supports 35 deserving students, including children who have lost one or both parents, enabling them to continue their education with confidence and stability.
                    </p>

                    <p class=" wow fadeInUp">
                       Beyond financial assistance, the program provides career counselling, mentorship, and life guidance to help students make informed academic and professional decisions. The initiative also extends financial assistance to meritorious wards of employees, reflecting MLA Group's commitment to education-led empowerment and nurturing the next generation of skilled and responsible individuals.
                    </p>

                </div>
               

            </div>

        </div>


 <div class="initiative-card mt-5">

            <div class="row align-items-center">
  <div class="col-lg-5">
<!--                  <div class="sv-video-wrapper">-->
<!--    <video class="sv-responsive-video" controls playsinline preload="metadata">-->
<!--        <source src="images/video.mp4" type="video/mp4">-->
<!--        Your browser does not support the video tag.-->
<!--    </video>-->
<!--</div>-->

<img src="images/eduty.png">
                </div>
                <div class="col-lg-7">
                          <img class="gloatimg" style="width: 90px; display:block; height:auto;" src="img/1w.jpg" alt="">

                    <span class="initiative-label wow fadeInUp">
                        Education & Skill Development
                    </span>
                    <h3 class=" wow fadeInUp">
                       Kanyadan Yojana
                    </h3>

                    <p class=" wow fadeInUp">
                      As part of its commitment to social responsibility and community welfare, MLA Group has launched the Kanyadan Yojna, a dedicated initiative focused on supporting underprivileged girls and empowering them to build secure and independent futures.
                    </p>

                    <p class=" wow fadeInUp">
                        Under this initiative, 30 girls have been adopted by the organization and are provided with continuous counselling, mentorship, and financial assistance to help them overcome social and economic challenges. The program is designed to encourage education, personal development, and informed decision-making, enabling beneficiaries to steer their lives in the right direction with confidence and dignity.
                    </p>
                    
                      <p class=" wow fadeInUp">
                          Through sustained guidance and financial support, Kanyadan Yojna aims to create lasting positive impact by empowering young women, strengthening their aspirations, and contributing to the development of more resilient families and communities.
                      </p>

                </div>

              

            </div>

        </div>

        <!-- SATVIK -->

        <div class="initiative-card mt-5">

            <div class="row align-items-center">
  <div class="col-lg-5">
      <div class="sv-reel-video-wrapper">
    <video class="sv-reel-video" controls playsinline poster="images/roti.png">
        <source src="images/rotitollvideo.mp4" type="video/mp4">
    </video>
</div>
        
                    <!--<img src="images/roti.png" class="img-fluid">-->
                </div>
                <div class="col-lg-7">
                          <img class="gloatimg" style="width: 90px; display:block; height:auto;" src="img/2w.jpg" alt="">

                    <span class="initiative-label wow fadeInUp">
                        Hunger Relief Initiative
                    </span>
                    <h3 class=" wow fadeInUp">
                        Satvik Roti Rolls
                    </h3>

                    <p class=" wow fadeInUp">
                       Satvik Roti Rolls is MLA Group's community-focused nutrition initiative aimed at addressing hunger and improving access to affordable, hygienic, and nutritious food for underserved communities. Through the Satvik Roti Rolls and Sita Rasoi Kadhi Chawal programs, the initiative distributes over 3,000 freshly prepared nutritious meals every day, while maintaining the highest standards of hygiene, food safety, and quality.
                    </p>

                    <p class=" wow fadeInUp">
                        The initiative is supported by a dedicated kitchen and field team of 25 members, along with 2 E- rickshaws, 5 E-bikes, and 6 food distribution stalls, ensuring efficient meal preparation and distribution across the community. By providing nutritious meals with dignity and consistency, the program contributes to improved food security, community well-being, and the welfare of vulnerable sections of society.
                    </p>

                </div>

              

            </div>

        </div>
        
        <style>
            /* Responsive Video */
.sv-video-wrapper {
    width: 100%;
    max-width: 100%;
    overflow: hidden;
    border-radius: 12px; /* Optional */
}


.sv-responsive-video {
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
}

.sv-reel-video-wrapper {
    width: 100%;
    max-width: 500px;   /* Optional */
    margin: 0 auto;
}

.sv-reel-video-wrapper2 {
    width: 100%;
    max-width: 500px;   /* Optional */
    margin: 0 auto;
}

.sv-reel-video {
    width: 100%;
    height: 376px;      /* Adjust as needed */
    object-fit: cover; /* Shows the full video */
    background: #000;    /* Black bars if needed */
    display: block;
    /*border-radius: 10px;*/
}

.sv-reel-video2 {
    width: 100%;
    height: 390px;      /* Adjust as needed */
    object-fit: contain; /* Shows the full video */
    background: #000;    /* Black bars if needed */
    display: block;
    /*border-radius: 10px;*/
}

@media (max-width: 768px) {
    .sv-reel-video {
        height: 400px;
    }
      .sv-reel-video2 {
        /*height: 400px;*/
    }
}

@media (max-width: 480px) {
    .sv-reel-video {
        height: 200px;
    }
    .sv-reel-video2 {
        /*height: 200px;*/
    }
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
        </style>
        
        
        
         <div class="initiative-card mt-5">

            <div class="row align-items-center">
  <div class="col-lg-5">
                    <img src="images/sumitlogo.png" class="img-fluid">
                </div>
                <div class="col-lg-7">
                          <img class="gloatimg" style="width: 90px; display:block; height:auto;" src="img/2w.jpg" alt="">

                    <span class="initiative-label wow fadeInUp">
                        Hunger Relief Initiative
                    </span>
                    <h3 class=" wow fadeInUp">
                    Daily Food Support Initiative
                    </h3>

                    <p class=" wow fadeInUp">
                     As part of our commitment to supporting vulnerable sections of society, we run a Daily Food Support Initiative to provide nutritious meals to 20 elderly, disabled, and helpless individuals every day.
                    </p>

                    <p class=" wow fadeInUp">
                       Freshly prepared food parcels are delivered daily to beneficiaries who may lack adequate family support or face physical, financial, or social challenges. This initiative is aimed at ensuring that those in need have access to wholesome meals while being treated with dignity, compassion, and respect.
                    </p>
                    
                      <p class=" wow fadeInUp">
                         Through this continuous effort, we seek to alleviate hunger, promote well-being, and bring comfort to individuals who require care and assistance the most. By extending consistent support, we reaffirm our commitment to building a more inclusive and compassionate community where no one is left behind.
                      </p>

                </div>

              

            </div>

        </div>


        <!-- MLA GREENS -->

        <div class="initiative-card mt-5">

            <div class="row align-items-center">

                <div class="col-lg-5">
                    <img src="img/greensmla.png" class="img-fluid">
                </div>

                <div class="col-lg-7">
                    <img class="gloatimg" style="width: 90px; display:block; height:auto;" src="img/3w.jpg" alt="">

                    <span class="initiative-label wow fadeInUp">
                       Environmental Sustainability Initiative
                    </span>
                    <h3 class=" wow fadeInUp">
                        MLA Greens
                    </h3>

                    <p class=" wow fadeInUp">
                       MLA Greens is MLA Group's dedicated environmental initiative focused on ecological restoration and building greener, healthier communities. Through plantation drives, urban greening programs, environmental awareness campaigns, and community participation initiatives, MLA Greens actively contributes towards improving green cover, ecological balance, cleaner surroundings, and long-term environmental sustainability.
                    </p>

                    <p class=" wow fadeInUp">
                        The initiative is driven by a dedicated team of five members supported by two specially equipped E-rickshaws carrying essential plantation equipment, including a genset, electric hammer for breaking concrete, recycled plastic resilient tree guards, saplings, fertilizers, and other tools. The team undertakes approximately 20 plantations each day, working closely with residents to encourage tree plantation outside their boundary walls, thereby enhancing urban greenery and creating a greener, more sustainable city.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- CLOSING STATEMENT -->

<!--<section class="closing-section">-->

<!--    <div class="container">-->

<!--        <div class="closing-card">-->

<!--            <h2>-->
<!--                Creating Sustainable Impact-->
<!--            </h2>-->

<!--            <p>-->
<!--                Together, these initiatives reflect MLA Group’s long-standing belief that true growth is not measured solely by business performance, but by the positive and sustainable impact created for society, communities, and future generations.-->
<!--            </p>-->

<!--        </div>-->

<!--    </div>-->

<!--</section>-->


<style>
    .mySwipers1 {
    width: 100%;
    padding: 20px 0 50px;
}

.mySwipers1 .swiper-slide {
    overflow: hidden;
    /*border-radius: 10px;*/
}

.mySwipers1 .swiper-slide img {
    width: 100%;
    background:#ff9f5736;
    border:1px solid #cacaca;
    height: 390px;      /* Equal height for all images */
    object-fit: contain;  /* Crop while maintaining aspect ratio */
    display: block;
    /*border-radius: 10px;*/
}

/* Navigation */
.mySwipers1 .swiper-button-next,
.mySwipers1 .swiper-button-prev {
   color: #f3791f;
    background: #000;
    border-radius: 50%;
    height: 49px;
    width: 49px;
    font-size: 11px;
}

.mySwipers1 .swiper-button-next:after, .mySwipers1 .swiper-button-prev:after{
    font-size:18px !important;
}

/* Pagination */
.mySwipers1 .swiper-pagination-bullet-active {
    background: #000;
}

/* Mobile */
@media (max-width: 767px) {
    .mySwipers1 .swiper-slide img {
        height: 400px;
    }
}
</style>

<section class="contact-section py-5">
      <div class="container">
          
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2>Image Gallery</h2>
              </div>
            <div class="col-lg-12">
                
    <div class="swiper mySwipers1">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                      <div class="sv-reel-video-wrapper2">
    <video class="sv-reel-video2" controls playsinline >
        <source src="images/video33.mp4" type="video/mp4">
    </video>
</div>
            </div>

            <!--<div class="swiper-slide">-->
            <!--    <img src="images/image23.jpg" alt="Image 2">-->
            <!--</div>-->

            <div class="swiper-slide">
                    <div class="sv-reel-video-wrapper2">
    <video class="sv-reel-video2" controls playsinline >
        <source src="images/video34.mp4" type="video/mp4">
    </video>
</div>
            </div>

            <div class="swiper-slide">
                <img src="images/image11.jpg" alt="Image 4">
            </div>

            <div class="swiper-slide">
                <img src="images/image2.jpg" alt="Image 5">
            </div>

            <div class="swiper-slide">
                <img src="images/image20.jpg" alt="Image 6">
            </div>
            
            <div class="swiper-slide">
                <img src="images/image8.jpg" alt="Image 6">
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

<section class="contact-section py-5">
    <div class="containe">

        <div class="contact-card">

            <div class="row align-items-center">

                <div class="col-lg-12 text-center">
                    <!-- <span class="contact-label">
                        ESG & Sustainability Contact
                    </span> -->

                    <h3 class="mt-2 wow fadeInUp" style="color: rgb(255, 255, 255); visibility: visible; animation-name: fadeInUp;">
                        Social Responsibility & Community Impact <br>
                        <span style="color:#F78631;">Mr. Gaurav Bajpai </span>
                        
                    </h3>

                    <!--<p class="mb-0  wow fadeInUp" style="color: rgb(255, 255, 255); visibility: visible; animation-name: fadeInUp;">-->
                    <!--    ESG &amp; Quality Management-->
                    <!--</p>-->
                </div>

                <div class="col-lg-12 text-center mt-3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <a href="mailto:gauravbajpai16@gmail.com" class="contact-btn">
                        gauravbajpai16@gmail.com
                    </a>
                     <a href="tel:9889931932" class="contact-btn mty">
                        9889931932
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>
<?php
include("footer.php");
?>