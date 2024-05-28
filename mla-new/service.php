<?php include('header.php'); ?>
<style>
    .left-banner .content {
        height: 11.2rem;
        background-color: red;
        border-radius: 10px;
        padding: 20px;
    }

    .left-banner .content :nth-child(1) {
        margin-bottom: 10px;
    }
    .left-banner .content{
        align-items: center;
    }

    .right-banner {
        height: 23rem;
        background-color: red;
        border-radius: 10px;
        padding: 55px;
    }

    .pt-100 {
        padding-top: 100px;
    }

    .pb-100 {
        padding-bottom: 100px;
    }
    .left-banner .content p {
        font-size: 24px;
    }
    @media only screen and (max-width: 768px) {
.mobile-gap{
    gap: 30px;
}
.right-banner{
    height:29rem;
    padding: 45px;
}


        
    }

    /* iPad Mini Portrait */
@media only screen and (min-device-width: 744px) and (max-device-width: 768px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 2) {
  /* Your styles for iPad Mini in portrait mode */
  .col-md-6{
    width: 100%;
  }
}

/* iPad Air Portrait */
@media only screen and (min-device-width: 820px) and (max-device-width: 834px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 2) {
  /* Your styles for iPad Air in portrait mode */
  .col-md-6{
    width: 100%;
  }
}
.ml-4{
    margin-left: 10px;
}

   
</style>
<section class="pt-100 pb-100" >
    <div class="container">
        <div class="row mobile-gap">
            <div class="col-md-6">

                <div class="content right-banner"style="border: 1px #ff5f1f solid; border-left-width: thick; background-color: #f0f0f0; ">
                    <div class="common">
                    <h2>
                    We have underlined the word "services" in our motto.
                    </h2>
                    <p>
                        Our team of technically qualified Service Engineers / Sales Professionals ensure a sincere and personalized service to our customers, before and after sale. We also take pleasure to develop innovative solutions by teaming up with our R & D and Application Research Department.

                        The in-house application laboratory with various process simulations work towards this goal and data are regularly provided to our customer, free of cost.</p>
                        </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="row left-banner">
                    <div class="col-md-12">
                        <div class="content d-flex mb-2"style="border: 1px #ff5f1f solid; border-left-width: thick; background: linear-gradient(106deg, rgba(222,135,34,1) 20%, rgba(172,58,58,0) 100%);">
                            <img src="./images/service/icons8-quality-100 (1).png" alt="" srcset="">
                            <p class="text-white" style=" padding-top: 18px; font-weight: 600; color: #ff5f1f;">
                                Perfection in quality</p>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="content d-flex mb-2"style="border: 1px #ff5f1f solid; border-left-width: thick; background: linear-gradient(106deg, rgba(222,135,34,1) 20%, rgba(172,58,58,0) 100%); ">
                        <img src="./images/service/icons8-satisfaction-100 (1).png" alt="" srcset=" ">
                            <p class="text-white ml-4" style=" padding-top: 18px; font-weight: 600; color: #ff5f1f;">
                            Satisfaction in services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .image-card {
        margin-bottom: 20px;
        text-align: center;
    }

    .image-box {
        height: 21rem;
        padding: 10px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        background-color: #fff;
    }

    .image-box img {
        width: 100%;
    border-radius: 10px;
    height: 20rem;
    object-fit: cover;
    }

    .image-name {
        height: 4rem;
        padding: 5px;
     margin: 0px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        margin-top: -10px;
        background-color: #fff;
        position: relative;
        top: -10px;
        justify-content: center;
    align-items: center;
    display: flex;
    }
    .image-description{
        color: black;
    }
</style>
<section class="pb-100">
    <div class="container">
        <div class="row">
            <h2 class="text-center mb-4">Seminars and conferences are regularly organized <br>for better interaction with the customers.</h2>
            <div class="col-md-4">
                <div class="image-card">
                    <div class="image-box">
                        <img src="images/service/service3.jpg" alt="Image 1">
                    </div>

                    <div class="image-details image-name">
                        <!-- <h3 class="image-heading">Image Heading</h3> -->
                        <p class="image-description">Conference on Rubber Technology- The winning edge conducted by us on 15th Nov. 2003</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-card">
                    <div class="image-box">
                        <img src="images/service/service4.jpg" alt="Image 1">
                    </div>

                    <div class="image-details image-name">
                        <!-- <h3 class="image-heading">Image Heading</h3> -->
                        <p class="image-description">PVC Compounding Facility</p>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="image-card">
                    <div class="image-box">
                        <img src="images/service/service2.jpg" alt="Image 1">
                    </div>

                    <div class="image-details image-name">
                        <!-- <h3 class="image-heading">Image Heading</h3> -->
                        <p class="image-description">Rheometer</p>
                    </div>
                </div>

            </div>


            <div class="row">

                <div class="col-md-4">
                    <div class="image-card">
                        <div class="image-box">
                            <img src="images/service/service5.jpg" alt="Image 1">
                        </div>

                        <div class="image-details image-name">
                            <!-- <h3 class="image-heading">Image Heading</h3> -->
                            <p class="image-description">Pilot Grinding Facility</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-card">
                        <div class="image-box">
                            <img src="images/service/service1.jpg" alt="Image 1">
                        </div>

                        <div class="image-details image-name">
                            <!-- <h3 class="image-heading">Image Heading</h3> -->
                            <p class="image-description">Chinaplas 2015</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="image-card">
                        <div class="image-box">
                            <img src="images/service/service1c.jpg" alt="Image 1">
                        </div>

                        <div class="image-details image-name">
                            <!-- <h3 class="image-heading">Image Heading</h3> -->
                            <p class="image-description">At Rubbber Expo 2015, Mumbai</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="image-card">
                        <div class="image-box">
                            <img src="images/service/service1b.jpg" alt="Image 1">
                        </div>

                        <div class="image-details image-name">
                            <!-- <h3 class="image-heading">Image Heading</h3> -->
                            <p class="image-description">At Arabplast 2014</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="image-card">
                        <div class="image-box">
                            <img src="images/service/service1c.jpg" alt="Image 1">
                        </div>

                        <div class="image-details image-name">
                            <!-- <h3 class="image-heading">Image Heading</h3> -->
                            <p class="image-description">At Plastindia 2015</p>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>
</section>




<?php include('footer.php') ?>