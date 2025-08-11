<?php
include('head.php');
?>
<title>MLA Group – Trusted Chemical Manufacturer in India</title>
<meta name="description" content="Experience advanced chemical manufacturing at MLA Group with top technology & high-tech facilities, delivering reliable results across 43+ countries worldwide.">

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




		<style>
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

            

			/* Custom styling */
			.organization-section {
				background-image: url('./images/aboutus/map-text-background-new.png');
				/* Replace with your background image path */
				background-size: contain;
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

			.organization-section p {
				text-align: justify;
			}
		</style>



		<style>
			.banner {
				position: relative;
				background-image: url(./images/aboutus/map-text-background-new.png);
				min-height: 66vh;
				background-color: gray;
			}

			.text-section {
				display: flex;
				flex-direction: column;
				justify-content: center;
				padding: 20px;
				color: white;
			}

			.image-section {
				position: relative;
				display: flex;
				justify-content: center;
				align-items: center;
				background-color: transparent;
			}

			.hexagon {
				width: 30rem;
				height: 30rem;
				border: 7px solid #fff;
				background-color: #fff;
				clip-path: polygon(25% 6.7%, 75% 6.7%, 100% 50%, 75% 93.3%, 25% 93.3%, 0% 50%);
				display: flex;
				justify-content: center;
				align-items: center;
				z-index: 10;
			}

			.hexagon-image {
				width: 100%;
				height: 100%;
				object-fit: cover;
				clip-path: inherit;
			}

			.banner::before {
				content: "";
				position: absolute;
				top: 0;
				right: 0;
				width: 50%;
				height: 100%;
				background-color: #f78631;
				clip-path: polygon(100% 0, 0 100%, 100% 100%);
				z-index: 0;
			}

			.banner p {
				color: #000;
			}
		</style>


		<section class="organization-section1 banner">

			<div class="container">
				<div class="row zoom-in-up">
					<div class="col-md-6 text-section">
						<h1>Manufacturing</h1>
						<p>
							At MLA Group, we are at the forefront of the additive manufacturing industry, delivering top-quality products across eight specialized verticals. With a total production capacity of 10,000 tons+ per month and a sprawling factory built up area of 250,000 square feet, we pride ourselves on our state-of-the-art facilities, including four production locations, three job workers, 21+ packing lines, and three backward integrated plants. Additionally, our in-house workshop for making equipment and plants ensures we maintain the highest standards of innovation and quality.
						</p>

						<p>Production is supervised by a team of production engineers who implement the continuous technical up gradation and process modification / improvement in co-ordination with the R&D Department. A separate team of project-engineers and technicians handles the continuously evolving and expanding manufacturing facilities and new project establishment.</p>

					</div>
					<div class="col-md-6 image-section">
						<div class="hexagon">
							<img src="images/manufacturing.jpeg" alt="Chemical Image" class="hexagon-image">
						</div>
					</div>
				</div>
			</div>

		</section>





		<style>
			.media {
				text-align: center;
				background: white;
				position: relative;

				box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
				border-radius: 15px;
			}

			.service-thumb {
				top: -82px;
				position: absolute;
				right: 0;
				left: 0;
				margin: 0 auto;
				border-radius: 15px;
			}

			.service-thumb img {

				border-radius: 15px;
			}

			.service-content {
				padding: 10px;
				padding-top: 56px;

			}

			.service-content a {
				font-size: 18px;

			}

			.pt-100 {
				padding-top: 100px;
			}

			.pb-150 {
				padding-bottom: 50px;
			}

			.pt-150 {
				padding-top: 150px;
			}

			@media only screen and (max-width: 768px) {
				.banner::before {
					position: relative;
				}

				.hexagon {
					height: 24rem !important;
					width: auto !important;
				}

				.banner {
					height: auto;
				}

				.mbheaidng {
					width: 70%;
					margin: auto;
				}

				.mobile-gap {
					gap: 137px;
				}

				/* .mobile-gap .col-md-3{
			width: 50%;
		} */

			}
		</style>

		<style>
			@media only screen and (min-width:768px) and (max-width:1184px) {
				.poservice .col-md-3 {
					width: 50% !important;
					margin: auto;

				}

				.manu-counters .col-md-3 {
					width: 50% !important;
				}
			}

			.counternewtest {
				color: #f78631;
				border: 1px solid #f78631;
				text-align: center;
				width: 248px;
				height: 210px;
				padding: 42px 30px 40px;
				margin: 0 auto 20px auto;
				border-radius: 20px;
				position: relative;
				z-index: 1;
				background: white;
				/* Add a background to ensure text visibility */
			}

			.counternewtest:before,
			.counternewtest:after {
				content: "";
				border-radius: 15px;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
				position: absolute;
				top: 12px;
				left: 12px;
				right: 12px;
				bottom: 12px;
				z-index: -1;
			}

			.counternewtest:before {
				background: #f78631;
			}

			.counternewtest:after {
				background: #fff;
				border-radius: 15px 15px 120px 15px;
			}

			.counternewtest .counternewtest-icon {
				font-size: 35px;
				line-height: 35px;
				margin: 0 0 0px;
				color: #f78631;
				/* Ensure icon color is #f78631 to match text */
			}

			.counternewtest h3 {
				font-size: 15px;
				font-weight: 500;
				text-transform: capitalize;
				margin: 0 0 4px;
			}

			.counternewtest .counternewtest-value {
				font-size: 16px;
				font-weight: 600;
				display: block;
			}

			@media screen and (max-width: 990px) {
				.counternewtest {
					margin-bottom: 40px;
				}
			}

			.ptt-120 {
				padding: 50px 0 0 0;
			}

			.testmanufactring {
				margin-bottom: 100px;
			}

			.ptyu {
				padding-top: 50px;
			}

			.manufacturvideo p {
				font-size: 1.1rem;
				margin-top: 1rem;
				font-weight: 600;
				color: #f78631;
				position: absolute;
				left: 0;
				right: 0;
				width: 50%;
				text-transform: uppercase;
				margin: auto;
				display: inline;
				padding: 14px;
				background-color: #fff;
				bottom: 0;
				text-align: center;
			}

			.manufacturvideo .col-md-6 {
				position: relative;
				margin-bottom: 50px;
			}

			.manufacturvideo img {
				box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
				border-radius: 10px;
				height: 20rem;
				margin-bottom: 1rem;
				object-fit: cover;
				width: 100%;
			}
		</style>




		<div class="service-page-sec ptt-120">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center mb-4 section-head style-1">
						<h2 class="">Our Eight Specialized Verticals</h2>
					</div>
				</div>
				<div class="row manu-counters">
					<div class="col-md-3 col-sm-6">
						<div class="counternewtest wow fadeInUp" data-wow-delay="0.1s">
							<div class="counternewtest-icon">
								<span><i class="fa fa-check"></i></span>
							</div>
							<h3>Metallic Stearates</h3>
							<span class="counternewtest-value">5000 tons /month</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counternewtest wow fadeInUp" data-wow-delay="0.1s">
							<div class="counternewtest-icon">
								<span><i class="fa fa-check"></i></span>
							</div>
							<h3>PVC Heat Stabilizers </h3>
							<span class="counternewtest-value">1500 tons/month</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counternewtest wow fadeInUp" data-wow-delay="0.1s">
							<div class="counternewtest-icon">
								<span><i class="fa fa-check"></i></span>
							</div>
							<h3>Active Zinc Oxide </h3>
							<span class="counternewtest-value">1000 tons/month</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counternewtest wow fadeInUp" data-wow-delay="0.1s">
							<div class="counternewtest-icon">
								<span><i class="fa fa-check"></i></span>
							</div>
							<h3>Precipitated Silica </h3>
							<span class="counternewtest-value">1500 tons /month</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counternewtest wow fadeInUp" data-wow-delay="0.1s">
							<div class="counternewtest-icon">
								<span><i class="fa fa-check"></i></span>
							</div>
							<h3>ADC Blowing Agents </h3>
							<span class="counternewtest-value">500 tons /month</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counternewtest wow fadeInUp" data-wow-delay="0.1s">
							<div class="counternewtest-icon">
								<span><i class="fa fa-check"></i></span>
							</div>
							<h3>Ester-Based Lubricants </h3>
							<span class="counternewtest-value">300 tons /month</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counternewtest wow fadeInUp" data-wow-delay="0.1s">
							<div class="counternewtest-icon">
								<span><i class="fa fa-check"></i></span>
							</div>
							<h3>Pharmaceutical Excipients</h3>
							<span class="counternewtest-value">500 tons/month</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counternewtest wow fadeInUp" data-wow-delay="0.1s">
							<div class="counternewtest-icon">
								<span><i class="fa fa-check"></i></span>
							</div>
							<h3>China Clay</h3>
							<span class="counternewtest-value"> 3000 tons /month</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="service-page-sec ptt-120">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center mb-4 section-head style-1">
						<h2 class="">Glimpses : Manufacturing Facilities</h2>
					</div>
				</div>


				<div class="row manufacturvideo">
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="manubox">
							<img src="images/BOILER.png" alt="">
						</div>
						<p>BOILER</p>
					</div>
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="manubox">
							<img src="images/flashdrying1.png" alt="">
						</div>
						<p>SIEVING

						</p>
					</div>
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="manubox">
							<img src="images/HAGPLANT.png" alt="">
						</div>
						<p>HAG PLANT
						</p>
					</div>
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="manubox">
							<img src="images/PRESSURE-VESSELS.png" alt="">
							<p>PRESSURE VESSELS
							</p>
						</div>
					</div>
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="manubox">
							<img src="images/PROCESSPLANT.png" alt="">
						</div>
						<p>PROCESS PLANT AND PIPE LINES
						</p>
					</div>
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="manubox">
							<img src="images/WAREHOUSE.png" alt="">
						</div>
						<p>WAREHOUSE AND STORAGE NO 3
						</p>
					</div>

					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="manubox">
							<img src="images/Nitrogen-plant.png" alt="">
						</div>
						<p>NITROGEN PLANT

						</p>
					</div>

					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="manubox">
							<img src="images/flasydrying.webp" alt="">
						</div>
						<p>PACKING SITE

						</p>
					</div>

					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="manubox">
							<img src="images/REACTOR-TANKS.png" alt="">
						</div>
						<p>REACTOR TANKS
						</p>
					</div>

					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="manubox">
							<img src="images/ettochmap.png" alt="">
						</div>
						<p>E.T.O. CHAMBER
						</p>
					</div>

					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="manubox">
							<img src="images/splinflash1.png" alt="">
						</div>
						<p>Spin flash dryer

						</p>
					</div>

					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="manubox">
							<img src="images/SELF-STUFFING.png" alt="">
						</div>
						<p>SELF STUFFING FACILITY
						</p>
					</div>
				</div>

			</div>

		</div>




		<?php include('footer.php') ?>