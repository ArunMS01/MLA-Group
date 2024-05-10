<?php include('header.php')?>


<style>
   
.pagehding-sec {
	background-image: url("https://themeearth.com/tf/html/indrostiz/img/pg_hd.jpg");
	background-position: center center;
	background-repeat: no-repeat;
	padding: 90px 0;
	position: relative;
	background-size: cover;
}
.pagehding-overlay {
  background-color: rgba(0, 0, 0, 0.6);
  height: 100%;
  position: absolute;
  top: 0;
  width: 100%;
}
.page-heading  h1 {
color: #fff;
font-size: 32px;
margin-bottom: 0;
text-align: center;
text-transform: capitalize;
font-weight:bold
}
.page-heading ul {
text-align: center;
margin-top: 10px;
}
.page-heading li {display: inline-block;
position: relative;
padding: 0px 14px;}
.page-heading li a {
  color: #fff;
}
.page-heading li:last-child a {
  color: #fc5508;
}
.page-heading li::before {
  content: "/";
  height: 60%;
  position: absolute;
  right: -5px;
  top:0px;color:#fff;
}
.page-heading li:last-child::before{display:none}

</style>
<div class="pagehding-sec">
		<div class="pagehding-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1>Service Page 2</h1>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="">Service 2</a></li>
						</ul>						
					</div>					
				</div>				
			</div>
		</div>
	</div>

<style>
    /*
8.Service Section
============================*/
.service-title-sec{
	background-color: #ddd;
	background-image: url("../img/service_bg.jpg");
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
	background-attachment:fixed;
	overflow: hidden;
}
.service-title-sec {
	position: relative;
}
.service-title-sec .sec-title{
margin: 0 0px 60px;
text-align: left;	
}
.service-title-sec .sec-title h1{
	color:#fff;
}
.service-sec {
	margin-top: -224px;
}
.service-sec-overlay {
	background-color: rgba(15, 25, 52, 0.97);
	height: 100%;
	left: 0;
	position: absolute;
	right: 0;
	top: 0;
	width: 100%;
}
.service-inner-thumb {
	position: relative;
	overflow:hidden;
}
.service-inner-thumb img{
	transition: all 0.8s ease 0s;
	transform:scale(1);
}
.service-inner:hover .service-inner-thumb img{
	transition: all 0.8s ease 0s;
	transform:scale(1.5);	
}
.service-inner-thumb h2 {
	position: absolute;
	bottom: 0;
	padding: 10px 26px;
	margin-bottom: 0;
	font-size: 18px;
	z-index: 2;
}
.service-inner:hover .service-inner-thumb h2::before {
background: #00142c
}
.service-inner-thumb h2::before {
	position: absolute;
	content: "";
	width: 100%;
	height: 100%;
	background: #fc5508;
	left: -15px;
	bottom:-1px;
	transform: skew(-34deg);
	z-index: -1;
}
.service-inner-thumb h2 a{
	color:#fff;
}
.service-details p {
	margin-bottom: 0;
	margin-top: 15px;
}
.service-details-img {
	margin-bottom: 30px;
	position: relative;
}
.service-thumb {
	margin-bottom: 30px;
}
.service-details h2 a {
	margin-top: 10px;
	display: inline-block;
	font-weight: 600;
	color: #020e2a;
}
.service-btn{
	color: #fc5508;
	margin-top: 10px;
	display: inline-block;
	font-weight: 600;	
}
.service-icon {
	text-align: center;
	font-size: 64px;
	color: #fc5508;
}
.service-inner:hover .service-icon{
	color:#fff;
	}
	.service-inner:hover .service-details a{
		color:#fff;
		}	
.service-inner::before {
	position: absolute;
	content: "";
	background: #fff;
	width: 100%;
	height: 100%;
	z-index: -1;
	transition: all 0.4s ease 0s;
	top: 0px;
	opacity:0;
	z-index:99;
}
.service-inner:hover.service-inner::before{
height:0;
transition: all 0.4s ease 0s;	
opacity:1
}

.service-inner {
	margin-bottom: 30px;
	display: inline-block;
	position: relative;
	z-index: 3;
	background: #fff;
	overflow: hidden;
}
.service-inner:hover .service-inner-thumb h2{
	transition: all 0.4s ease 0s;
}
.service-inner:hover .service-details h2 a{
	color:#fff;
}
.service-inner:hover .service-details p{
	color:#fff;
}
.service-inner .media {
	padding: 30px 20px;
	margin-top: 0px;
	border-top: 0;
	z-index:2
}
.service-inner:hover.service-inner .media::before{
	transition: all 0.4s ease 0s;
	width:100%;
	height: 100%;
    -webkit-transition: .45s cubic-bezier(.58,1.45,.255,0.35);
    -moz-transition: .45s cubic-bezier(.58,1.45,.255,0.35);
    -ms-transition: .45s cubic-bezier(.58,1.45,.255,0.35);
    -o-transition: .45s cubic-bezier(.58,1.45,.255,0.35);
    transition: .45s cubic-bezier(.58,1.45,.255,0.35);
}
.service-inner .media::before {
	content: "";
	position: absolute;
	background: #fc5508;
	height:0%;
	width: 100%;
	top: 0;
	left: 0;
	z-index:-1;
    -webkit-transition: .45s cubic-bezier(.58,1.45,.255,0.35);
    -moz-transition: .45s cubic-bezier(.58,1.45,.255,0.35);
    -ms-transition: .45s cubic-bezier(.58,1.45,.255,0.35);
    -o-transition: .45s cubic-bezier(.58,1.45,.255,0.35);
    transition: .45s cubic-bezier(.58,1.45,.255,0.35);
}
.service-details h2{margin-top:10px;}
.service-details h2 a {
	display: inline-block;
	width: 100%;
	font-size: 20px;
}
.service-item {
	position: relative;
	display: inline-block;
	z-index: 2;
}
.all-service .owl-controls {
	position: absolute;
	bottom: 0px;
	width: 100%;
	margin: 0px auto;
	text-align: center;
	left: 0;
	right: 0;
	z-index: 99;
}
.all-service.owl-theme .owl-dots .owl-dot {
	display: inline-block;
	height: 3px;
	margin: 0 5px;
	position: relative;
	width: 20px;
	background: #fff;
}
.all-service.owl-theme .owl-dots .owl-dot.active {
	background: #fc5508;
}
.service-border-shape {
	background: #fc5508 none repeat scroll 0 0;
	display: block;
	height: 1px;
	position: relative;
	top: 0;
	width: 50px;
}
.service-border-shape::after {
	background: #ddd none repeat scroll 0 0;
	bottom: 0;
	content: "";
	height: 1px;
	left: 45px;
	margin: 0 auto;
	position: absolute;
	text-align: center;
	width: 70px;
}
.service-inner:hover .service-border-shape{
	background: #0f1934
	}
	.all-service.owl-carousel .service-inner{
		margin-bottom: 50px;
	}

    .pb-70 {
    padding-bottom: 70px;
}

.pt-100 {
    padding-top: 100px;
}
</style>
    <div class="service-page-sec pt-100 pb-70">
		<div class="container">
			<div class="row">			
				<!-- Service Item Block Start -->		
				<div class="col-md-4 col-sm-6">
					<div class="inner service-v2">
						<div class="media">
							<div class="service-thumb">
								<img src="./images/manufacturing/mfg.jpg" alt="">							
							</div>				
							<div class="service-content">
								<h2><a href="service-details.html">Expert Mechanical</a></h2>		
								<p>Lorem ipsum dolor sit amet, ea vis voluptua forensibus moderatius, stet duis constituam cu mei. Altera bonorum qualisque ea sea, et elit labitur nusquam sea.  </p>
								<a href="#" class="simple-btn">Read More</a>
							</div>
						</div>
					</div>										
				</div>
				<!-- Service Item Block End -->						
				<!-- Service Item Block Start -->		
				<div class="col-md-4 col-sm-6">
					<div class="inner service-v2">
						<div class="media">
							<div class="service-thumb">
								<img src="./images/manufacturing/mfg2.jpg" alt="">							
							</div>			
							<div class="service-content">
								<h2><a href="service-details.html">Energy Power</a></h2>		
								<p>Lorem ipsum dolor sit amet, ea vis voluptua forensibus moderatius, stet duis constituam cu mei. Altera bonorum qualisque ea sea, et elit labitur nusquam sea.  </p>
								<a href="#" class="simple-btn">Read More</a>							
							</div>
						</div>
					</div>										
				</div>
				<!-- Service Item Block End -->				
				<!-- Service Item Block Start -->		
				<div class="col-md-4 col-sm-6">
					<div class="inner service-v2">
						<div class="media">
							<div class="service-thumb">
								<img src="./images/manufacturing/mfg3.jpg" alt="">							
							</div>			
							<div class="service-content">
								<h2><a href="service-details.html">Repair Technology</a></h2>			
								<p>Lorem ipsum dolor sit amet, ea vis voluptua forensibus moderatius, stet duis constituam cu mei. Altera bonorum qualisque ea sea, et elit labitur nusquam sea.  </p>
								<a href="#" class="simple-btn">Read More</a>
							</div>
						</div>
					</div>										
				</div>
				<!-- Service Item Block End -->					
				<!-- Service Item Block Start -->		
				<div class="col-md-4 col-sm-6">
					<div class="inner service-v2">
						<div class="media">
							<div class="service-thumb">
								<img src="./images/manufacturing/mfg3.jpg" alt="">							
							</div>				
							<div class="service-content">
								<h2><a href="service-details.html">Expert Mechanical</a></h2>	
								<p>Lorem ipsum dolor sit amet, ea vis voluptua forensibus moderatius, stet duis constituam cu mei. Altera bonorum qualisque ea sea, et elit labitur nusquam sea.  </p>
								<a href="#" class="simple-btn">Read More</a>
							</div>
						</div>
					</div>										
				</div>
				<!-- Service Item Block End -->					
				<!-- Service Item Block Start -->		
				<div class="col-md-4 col-sm-6">
					<div class="inner service-v2">
						<div class="media">
							<div class="service-thumb">
								<img src="./images/manufacturing/mfg3.jpg" alt="">							
							</div>			
							<div class="service-content">
								<h2><a href="service-details.html">Expert Mechanical</a></h2>	
								<p>Lorem ipsum dolor sit amet, ea vis voluptua forensibus moderatius, stet duis constituam cu mei. Altera bonorum qualisque ea sea, et elit labitur nusquam sea.  </p>
								<a href="#" class="simple-btn">Read More</a>
							</div>
						</div>
					</div>										
				</div>
				<!-- Service Item Block End -->		
				<!-- Service Item Block Start -->		
				<div class="col-md-4 col-sm-6">
					<div class="inner service-v2">
						<div class="media">
							<div class="service-thumb">
								<img src="./images/manufacturing/mfg3.jpg" alt="">							
							</div>									
							<div class="service-content">
								<h2><a href="service-details.html">Energy Power</a></h2>		
								<p>Lorem ipsum dolor sit amet, ea vis voluptua forensibus moderatius, stet duis constituam cu mei. Altera bonorum qualisque ea sea, et elit labitur nusquam sea.  </p>
								<a href="#" class="simple-btn">Read More</a>
							</div>
						</div>
					</div>										
				</div>
				<!-- Service Item Block End -->						
			</div>
		</div>		
	</div>



<?php include('footer.php')?>