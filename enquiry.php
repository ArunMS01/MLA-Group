<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_POST['process']))
{
	if(isset($_POST['email'])&& $_POST['email']!="")
	{
			$email = $_POST['email'];
			$name = $_POST['name'];
			$company = $_POST['company'];
			$country = $_POST['country'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$city = $_POST['city'];
		
			if($_POST['zip']!="")
			{			
				$zip = $_POST['zip'];
				
				$zip =" zip Code: ".$zip."<br>";
			}	
			
	
			if($_POST['comments']!="")
			{			
				$comments = $_POST['comments'];
				
				$comments =" Comments : ".$comments."<br>";
			}
		
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= "From: $email\r\n"; 
			$headers .= "Reply-To: $email \r\n";
			$headers .= "X-Mailer: PHP/" . phpversion() . "\n";
			$headers .= "X-Priority: 1";
	
			$message= "Name: $name<br>
			E-mail: $email<br>
			Address: $address, $city<br>
			Country: $country<br>
			Phone: $phone<br>
			$zip
			$comments";

	//echo  $message;
	
	mail( "md@mlagroup.com", "Inquiry Through The Website www.mlagroup.com",	$message,$headers);
	header( "Location: thanks.html" );
	}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MLA Group of Industries </title>
    <link rel="shortcut icon" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- bxslider -->
<link type="text/css" rel='stylesheet' href="js/bxslider/jquery.bxslider.css">
<!-- End bxslider -->
<!-- flexslider -->
<link type="text/css" rel='stylesheet' href="js/flexslider/flexslider.css">
<!-- End flexslider -->

<!-- bxslider -->
<link type="text/css" rel='stylesheet' href="js/radial-progress/style.css">
<!-- End bxslider -->
<link rel="icon" type="image/x-icon" href="img/favicon.png">
<!-- Animate css -->
<link type="text/css" rel='stylesheet' href="css/animate.css">
<!-- End Animate css -->

<!-- Bootstrap css -->
<link type="text/css" rel='stylesheet' href="css/bootstrap.min.css">
<link type="text/css" rel='stylesheet' href="js/bootstrap-progressbar/bootstrap-progressbar-3.2.0.min.css">
<!-- End Bootstrap css -->

<!-- Jquery UI css -->
<link type="text/css" rel='stylesheet' href="js/jqueryui/jquery-ui.css">
<link type="text/css" rel='stylesheet' href="js/jqueryui/jquery-ui.structure.css">
<!-- End Jquery UI css -->

<!-- Fancybox -->
<link type="text/css" rel='stylesheet' href="js/fancybox/jquery.fancybox.css">
<!-- End Fancybox -->

<link type="text/css" rel='stylesheet' href="fonts/fonts.css">
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<link type="text/css" data-themecolor="default" rel='stylesheet' href="css/main-blue.css">

<link type="text/css" rel='stylesheet' href="js/rs-plugin/css/settings.css">
<link type="text/css" rel='stylesheet' href="js/rs-plugin/css/settings-custom.css">
<link type="text/css" rel='stylesheet' href="js/rs-plugin/videojs/video-js.css">
<style>
.btn1mla {
  border: none;
  background-color: #428bca;
  padding: 14px 28px;
  font-size: 20px;
  font-weight:700;
  cursor: pointer;
  display: inline-block;
}
.btn1mla:hover {background: #eee;}

.success {color: black;}

.b-btn.b-footer__btn_up {
    display: none;
}
@media screen and (max-width: 767px){
.hidemlamobile {display: none;}
}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EPE0XJ0VB4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EPE0XJ0VB4');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NWVPLHV');</script>
<!-- End Google Tag Manager -->
<script Language="JavaScript">
function validEmail(emailV) {
	dotV = emailV.indexOf(".", emailV.length-4);
	if (emailV.length < 6) return false;
   	if (emailV.indexOf("@") < 1) return false;
   	if (emailV.indexOf("@") > (emailV.length-4)) return false;
	if (dotV == -1 || dotV > (emailV.length-3)) return false; 
	for (var i=0; i < emailV.length; i++) {
		var tempV = emailV.substring(i, i+1)
		if (tempV == " " || tempV == "'" || tempV == '"' || tempV == "," || tempV == ";" || tempV == "`" || tempV == "<" || tempV == ">") { 
			return false;
			}
		}
	}


function verify()
   {
		   if (document.forms[0].elements[0].value == "")
	           {	
		      
	          alert("Please fill the Name");
			  document.forms[0].elements[0].focus();
		      return (false);
	           }
		  else if (document.forms[0].elements[1].value == "")
	           {	
		      
	              alert("Please type the E-mail");
				  document.forms[0].elements[1].focus();
	              return (false);
	           }
	        else if (validEmail(document.forms[0].elements[1].value)==false)
			{
			alert('Please enter a valid email address');
			document.forms[0].elements[1].select();
			return (false);
		    }		
		  else if (document.forms[0].elements[3].value == "")
	           {	
		          alert("Please fill the Mailing Address");
				  document.forms[0].elements[3].focus();
		      return (false);
	           }
		  else if (document.forms[0].elements[4].value == "")
	           {	
		      
	              alert("Please fill the City");
				  document.forms[0].elements[4].focus();
	              return (false);
	           }		
	          else if (document.forms[0].elements[5].value == "")
	           {	
		      
	              alert("Please fill the Zip or Postal Code");
				  document.forms[0].elements[5].focus();
	              return (false);
	           }
			   else if (isNaN(document.forms[0].elements[5].value))
			  {      
	              alert("Postal / Zip Code should be number");
				  document.forms[0].elements[5].focus();
	              return (false);
			   } 
		     else if (document.forms[0].elements[6].value == "")
	           {	
		      
	              alert("Please fill the Country");
				  document.forms[0].elements[6].focus();
	              return (false);
	           }        
		  else if (document.forms[0].elements[7].value == "")
	           {	
		      
	              alert("Please fill the Phone");
				  document.forms[0].elements[7].focus();
	              return (false);
	           }  
   	//  if (document.forms[0].security_code.value == "")
	//     {	
	// 		alert("Please Fill Security Code.");
	// 		document.forms[0].security_code.focus();
	// 		return (false);
	// 	}
	// 	else if (document.forms[0].security_check.value == 0)
	// 	{	
	// 		alert("Please Fill Right Security Code.");
	// 		document.forms[0].security_code.focus();
	// 		return (false);
	// 	 }  

 }
function set(form)
{
  document.forms[0].elements[0].focus();
}
</Script> 

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178404512-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178404512-1');
</script>

</head>
<body onLoad="set(this.form)">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWVPLHV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->
<header>
	<div class="container b-header__box b-relative">
		<a href="/" class="b-left b-logo "><img class="color-theme" data-retina src="img/logo-header-default.png" alt="Logo" /></a>
		<div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide"><i class="fa fa-align-justify"></i></div>
		<div class="b-header-r b-right b-header-r--icon">
			<nav class="b-top-nav f-top-nav b-right j-top-nav">
				<ul class="b-top-nav__1level_wrap">
					<li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b">
						<a href="index.html"><i class="fa fa-home b-menu-1level-ico"></i>Home<span class="b-ico-dropdown"></span></a>
					</li>
					<li class="b-top-nav__1level f-top-nav__1level f-primary-b">
						<a href="aboutus.html"><i class="fa fa-folder-open b-menu-1level-ico"></i>About Us<span class="b-ico-dropdown"></span></a>
					</li>
					<li class="b-top-nav__1level f-top-nav__1level f-primary-b">
						<a href="rnd.html"><i class="fa fa-folder-open b-menu-1level-ico"></i>R &amp; D<span class="b-ico-dropdown"></span></a>
					</li>
					<li class="b-top-nav__1level f-top-nav__1level f-primary-b">
						<a href="qc.html"><i class="fa fa-folder-open b-menu-1level-ico"></i>Quality<span class="b-ico-dropdown"></span></a>
					</li>
					<li class="b-top-nav__1level f-top-nav__1level f-primary-b">
						<a href="facilities.html"><i class="fa fa-folder-open b-menu-1level-ico"></i>Manufacturing<span class="b-ico-dropdown"></span></a>
					</li>
					<li class="b-top-nav__1level f-top-nav__1level f-primary-b">
						<a href="services.html"><i class="fa fa-folder-open b-menu-1level-ico"></i>Services<span class="b-ico-dropdown"></span></a>
					</li>
					<li class="b-top-nav__1level f-top-nav__1level f-primary-b">
						<a href="products.html"><i class="fa fa-folder-open b-menu-1level-ico"></i>Products<span class="b-ico-dropdown"></span></a>
					</li>
					<li class="b-top-nav__1level f-top-nav__1level f-primary-b">
						<a href="ourclients.html"><i class="fa fa-folder-open b-menu-1level-ico"></i>Clients<span class="b-ico-dropdown"></span></a>
					</li>
					<li class="b-top-nav__1level f-top-nav__1level f-primary-b">
						<a href="enquiry.php"><i class="fa fa-folder-open b-menu-1level-ico"></i>Contact<span class="b-ico-dropdown"></span></a>
					</li>
					<li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b">
						<a onclick="gtag('event', 'click', { event_category: 'Email', event_action: 'Clicked', event_label: 'HeaderSalesEmail'})" href="mailto:md@mlagroup.com"><i class="fa fa-folder-open b-menu-1level-ico"></i>Email Us<span class="b-ico-dropdown"></span></a>
					</li>
					<span class="hidemlamobile">
					<li class="b-top-nav__1level f-top-nav__1level f-primary-b ">
						<a href="enquiry.php"><i class="fa fa-folder-open b-menu-1level-ico"></i><span class="b-ico-dropdown"></span></a>
					</li>
					</span>
					<li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b">
						<a onclick="gtag('event', 'click', { event_category: 'Phone Number', event_action: 'Clicked', event_label: 'HeaderPhone'})" href="tel:+915122555292"><i class="fa fa-folder-open b-menu-1level-ico"></i>Call Us<span class="b-ico-dropdown"></span></a>
					</li>
</span>
					
				</ul>
			</nav>
		</div>
	</div>
</header>
<div class="j-menu-container"></div>

<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
	<div class="b-inner-page-header__content">
		<div class="container">
			<h1 class="f-primary-l c-default">Contact Us</h1>
		</div>
	</div>
</div>

<div class="l-main-container">
	<div class="b-breadcrumbs f-breadcrumbs">
	    <div class="container">
	        <ul>
	            <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
	            <li><i class="fa fa-angle-right"></i>Contact Us</li>
	        </ul>
	    </div>
	</div>
	<div class="l-inner-page-container">
		<div class="container">
            <div class="row">

                <div class="col-sm-6 b-contact-form-box">
                    <h3 class="f-primary-b b-title-description f-title-description">
                        Contact Form
                    </h3>
                    <div class="row">
                        <form name="form1" method="post" action="enquiry.php" onSubmit="return verify()">
                            <div class="col-md-6">
                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="name">Your name</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="name" name="name" maxlength="30" class="form-control" />
                                    </div>
                                </div>
                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="email">You email</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="email" name="email" maxlength="100" class="form-control" />
                                    </div>
                                </div>
                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="website">Company Name</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="company" name="company" class="form-control" />
                                    </div>
                                </div>
                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="title">Mailing Address</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="address" name="address" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="name">City</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="city" name="city" maxlength="30" class="form-control" />
                                    </div>
                                </div>
                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="email">Zip or Postal Code</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="zip" name="zip" maxlength="100" class="form-control" />
                                    </div>
                                </div>
                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="website">Country</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="country" name="country" class="form-control" />
                                    </div>
                                </div>
                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="title">Phone / Mobile</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="phone" name="phone" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="b-form-row b-form--contact-size">
                                    <label class="b-form-vertical__label">Comments or Other Inquiry</label>
                                    <textarea class="form-control" name="comments" rows="4"></textarea>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="b-form-row">
                                	<?php include "security_code/form.php"?>
                                	<input type="hidden" name="process" id="process">
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="b-form-row">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="b-form-row">
                                	<input type="hidden" name="process" id="process">
                                	<input class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100" type="submit" name="Submit" value="  Submit  " >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 b-contact-form-box">
                    <h3 class="f-primary-b b-title-description f-title-description">
                        contact info
                    </h3>
                    <div class="row b-google-map__info-window-address">
                        <ul class="list-unstyled">
						    <li class="col-xs-12">
						        <div class="b-google-map__info-window-address-icon f-center pull-left">
						            <i class="fa fa-home"></i>
						        </div>
						        <div>
						            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
						                MLA Group of Industries
						            </div>
						            <div class="desc">111/230, Harsh Nagar, Kanpur-208012 (INDIA),</div>
						        </div>
						    </li>
						    <li class="col-xs-12">
						        <div class="b-google-map__info-window-address-icon f-center pull-left">
						            <i class="fa fa-globe"></i>
						        </div>
						        <div>
						            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
						                OFFICIAL WEBSITE
						            </div>
						            <div class="desc">www.mlagroup.com</div>
						        </div>
						    </li>
						    <li class="col-xs-12">
						        <div class="b-google-map__info-window-address-icon f-center pull-left">
						            <i class="fa fa-user"></i>
						        </div>
						        <div>
						            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
						                Director (Marketing)
						            </div>
						            <div class="desc">Mr. Sumit Agarwal - <a onclick="gtag('event', 'click', { event_category: 'Phone Number', event_action: 'Clicked', event_label: 'ContactusPagePhone1'})" href="tel:+915122555292"><span style="color:#D34231">+91-512-2555292</span></a>, <a onclick="gtag('event', 'click', { event_category: 'Phone Number', event_action: 'Clicked', event_label: 'ContactusPagePhone2'})" href="tel:+919336116592"><span style="color:#D34231">+91-9336116592</span></a>, <a onclick="gtag('event', 'click', { event_category: 'Email', event_action: 'Clicked', event_label: 'ContactusPageSalesEmail'})" href="mailto:md@mlagroup.com"><span style="color:#D34231">md@mlagroup.com</span></a></div>
						        </div>
						    </li>
							<li class="col-xs-12">
						        <div class="b-google-map__info-window-address-icon f-center pull-left">
						            <i class="fa fa-user"></i>
						        </div>
						        <div>
						            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
									Director (Factory) 
						            </div>
						            <div class="desc">Mr. Abhishek Kanodia  - <a onclick="gtag('event', 'click', { event_category: 'Phone Number', event_action: 'Clicked', event_label: 'ContactusPagePhone1'})" href="tel:+917985284355"><span style="color:#D34231">+91-7985284355</span></a>, <a onclick="gtag('event', 'click', { event_category: 'Phone Number', event_action: 'Clicked', event_label: 'ContactusPagePhone2'})" href="mailto:ceo@mlagroup.com"><span style="color:#D34231">ceo@mlagroup.com </span></a></div>
						        </div>
						    </li>
						    <li class="col-xs-12">
						        <div class="b-google-map__info-window-address-icon f-center pull-left">
						            <i class="fa fa-user"></i>
						        </div>
						        <div>
						            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
						                General Administration
						            </div>
						            <div class="desc">Director (Admin): Mr Saurabh Agarwal : <a onclick="gtag('event', 'click', { event_category: 'Phone Number', event_action: 'Clicked', event_label: 'ContactusPagePhone3'})" href="tel:+919336849137"><span style="color:#D34231">+91-9336849137</span></a>, <a onclick="gtag('event', 'click', { event_category: 'Phone Number', event_action: 'Clicked', event_label: 'ContactusPagePhone2'})" href="mailto:saurabh@mlagroup.com"><span style="color:#D34231">saurabh@mlagroup.com</span></a></div>
						        </div>
						    </li>
							<li class="col-xs-12">
						        <div class="b-google-map__info-window-address-icon f-center pull-left">
						            <i class="fa fa-user"></i>
						        </div>
						        <div>
						            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
						                Purchase
						            </div>
						            <div class="desc">Mr Suraj Agarwal: <a onclick="gtag('event', 'click', { event_category: 'Phone Number', event_action: 'Clicked', event_label: 'ContactusPagePhone3'})" href="tel:+919335091069"><span style="color:#D34231">+91-9335091069</span></a>, <a onclick="gtag('event', 'click', { event_category: 'Phone Number', event_action: 'Clicked', event_label: 'ContactusPagePhone2'})" href="mailto:purchase@mlagroup.com"><span style="color:#D34231">purchase@mlagroup.com</span></a></div>
						        </div>
						    </li>
							<li class="col-xs-12">
						        <div class="b-google-map__info-window-address-icon f-center pull-left">
						            <i class="fa fa-user"></i>
						        </div>
						        <div>
						            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
									Recruitments
						            </div>
						            <div class="desc"> <a onclick="gtag('event', 'click', { event_category: 'Phone Number', event_action: 'Clicked', event_label: 'ContactusPagePhone2'})" href="mailto:mayur@mlagroup.com"><span style="color:#D34231">mayur@mlagroup.com</span></a></div>
						        </div>
						    </li>
						    <!-- <li class="col-xs-12">
						        <div class="b-google-map__info-window-address-icon f-center pull-left">
						            <i class="fa fa-envelope"></i>
						        </div>
						        <div>
						            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
						                email
						            </div>
						            <div class="desc"><a onclick="gtag('event', 'click', { event_category: 'Email', event_action: 'Clicked', event_label: 'ContactusPageSalesEmail'})" href="mailto:md@mlagroup.com"><span style="color:#D34231">md@mlagroup.com</span></a></div>
						        </div>
						    </li> -->
						</ul>

                    </div>
                </div>

		</div>

		</div>

		<div class="container">
			<div class="row">
				<p>All specifications given here are only indicative, there are several application specific grades under each category, please write to us for exact specifications.</p>
				<blockquote class="b-blockquote--primary f-blockquote--primary f-primary-it">
					<div class="b-remaining" style="text-align:center;">
						MLA Group of Industries, 111/230, Harsh Nagar, Kanpur-208012 (INDIA) Phone: <a onclick="gtag('event', 'click', { event_category: 'Phone Number', event_action: 'Clicked', event_label: 'FooterPhone1'})" href="tel:+915122555292"><span style="color:#D34231">+91-512-2555292</span></a>, <a onclick="gtag('event', 'click', { event_category: 'Phone Number', event_action: 'Clicked', event_label: 'FooterPhone2'})" href="tel:+919336116592"><span style="color:#D34231">+91-9336116592</span></a>
						<br />
						 E-mail:  <a onclick="gtag('event', 'click', { event_category: 'Email', event_action: 'Clicked', event_label: 'FooterSalesEmail'})" href="mailto:md@mlagroup.com"><span style="color:#D34231">md@mlagroup.com</span></a>
					</div>
				</blockquote>
			</div>
		</div>
	</div>
</div>
<footer>
  <div class="b-footer-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-xs-12 f-copyright b-copyright">Copyright &copy; 2015 | Powered by <a href="#">BAINC</a> | <a href="https://www.maidenstride.com/kanpur/">Website Managed By Maiden Stride </a></div>
            <div class="col-sm-7 col-xs-12">
                <div class="b-btn f-btn b-btn-default b-right b-footer__btn_up f-footer__btn_up j-footer__btn_up">
                    <i class="fa fa-chevron-up"></i>
                </div>
                <nav class="b-bottom-nav f-bottom-nav b-right hidden-xs">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="rnd.html">R&amp;D</a></li>
                        <li><a href="qc.html">Quality</a></li>
                        <li><a href="facilities.html">Manufacturing</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="ourclients.html">Clients</a></li>
                        <li><a href="enquiry.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</footer>
<script src="js/breakpoints.js"></script>
<script src="js/jquery/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="js/scrollspy.js"></script>
<script src="js/bootstrap-progressbar/bootstrap-progressbar.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- end bootstrap -->
<script src="js/masonry.pkgd.min.js"></script>
<script src='js/imagesloaded.pkgd.min.js'></script>
<!-- bxslider -->
<script src="js/bxslider/jquery.bxslider.min.js"></script>
<!-- end bxslider -->
<!-- flexslider -->
<script src="js/flexslider/jquery.flexslider.js"></script>
<!-- end flexslider -->
<!-- smooth-scroll -->
<script src="js/smooth-scroll/SmoothScroll.js"></script>
<!-- end smooth-scroll -->
<!-- carousel -->
<script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<!-- end carousel -->
<script src="js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/rs-plugin/videojs/video.js"></script>

<!-- jquery ui -->
<script src="js/jqueryui/jquery-ui.js"></script>
<!-- end jquery ui -->
<script type="text/javascript" language="javascript"
        src="//maps.google.com/maps/api/js?sensor=false&key=AIzaSyCfVS1-Dv9bQNOIXsQhTSvj7jaDX7Oocvs"></script>
<!-- Modules -->
<script src="js/modules/sliders.js"></script>
<script src="js/modules/ui.js"></script>
<script src="js/modules/retina.js"></script>
<script src="js/modules/animate-numbers.js"></script>
<script src="js/modules/parallax-effect.js"></script>
<script src="js/modules/settings.js"></script>
<script src="js/modules/maps-google.js"></script>
<script src="js/modules/color-themes.js"></script>
<!-- End Modules -->

<!-- Audio player -->
<script type="text/javascript" src="js/audioplayer/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/audioplayer/js/jplayer.playlist.min.js"></script>
<script src="js/audioplayer.js"></script>
<!-- end Audio player -->

<!-- radial Progress -->
<script src="js/radial-progress/jquery.easing.1.3.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js"></script>
<script src="js/radial-progress/radialProgress.js"></script>
<script src="js/progressbars.js"></script>
<!-- end Progress -->

<!-- Google services -->

<script src="js/google-chart.js"></script>
<!-- end Google services -->
<script src="js/j.placeholder.js"></script>

<!-- Fancybox -->
<script src="js/fancybox/jquery.fancybox.pack.js"></script>
<script src="js/fancybox/jquery.mousewheel.pack.js"></script>
<script src="js/fancybox/jquery.fancybox.custom.js"></script>
<!-- End Fancybox -->
<script src="js/user.js"></script>
<script src="js/timeline.js"></script>
<script src="js/fontawesome-markers.js"></script>
<script src="js/markerwithlabel.js"></script>
<script src="js/cookie.js"></script>
<script src="js/loader.js"></script>
<script src="js/scrollIt/scrollIt.min.js"></script>
<script src="js/modules/navigation-slide.js"></script>


<script type="text/javascript">
$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
</script>
<style>.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom: 35px;
    right: 30px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:14px;
}</style>
    
    <a rel="noreferrer" onclick="gtag('event', 'click', { event_category: 'Phone Number', event_action: 'Clicked', event_label: 'Whats App'})" href="https://api.whatsapp.com/send?phone=919336116592&text=Hey, I'm interested in your services. 😊 " class="float" target="_blank">
        <img src="images/whatsappp.png" class="my-float" alt="Whats App Icon">

    </a>
    
     <style>.callmyfloat{
	position:fixed;
	width:60px;
	height:60px;
	bottom: 35px;
    right: 104px;
	background-color:#90EE90;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.callmy-float{
	margin-top:14px;
}</style>
    
    <a rel="noreferrer" onclick="gtag('event', 'click', { event_category: 'Phone Number', event_action: 'Clicked', event_label: 'FloaterPhone'})" href="tel:+919336116592" class="callmyfloat" target="_blank"> 
        <img src="images/phone.png" class="callmy-float" alt="Call Icon">

    </a>



     <style>.emailmyfloat{
	position:fixed;
	width:60px;
	height:60px;
	bottom: 35px;
 	right: 180px;
	
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.emailmy-float{
	margin-top:2px;
}</style>
    
    <a rel="noreferrer" onclick="gtag('event', 'click', { event_category: 'Email', event_action: 'Clicked', event_label: 'FloaterEmail'})" href="mailto:md@mlagroup.com" class="emailmyfloat" target="_blank"> 
        <img src="images/email.png" class="emailmy-float" alt="Call Icon">

    </a>

</body>
</html>