<!DOCTYPE html>
<html lang="en">


<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--<meta name="keywords" content="">-->
	<!--<meta name="author" content="HugeBinary">-->
	<!--<meta name="robots" content="">-->
	<!--<meta name="description" content="">-->
	<!--<meta property="og:title" content="">-->
	<!--<meta property="og:description" content="">-->
	<!--<meta name="format-detection" content="telephone=no">-->

	<!-- FAVICONS ICON -->
	 <link rel="icon" type="image/x-icon" href="images/logo-MLA.png"> 

	<!-- PAGE TITLE HERE -->
	<title><?php echo $title? $title: "MLA Group";?></title>
	<meta name="description" content="<?php echo $desc? $desc: "MLA Group";?>"/>
    <?php
    if(isset($urllink)){
    ?>
    <link rel="canonical" href="https://www.mlagroup.com/<?php echo $urllink.".html"?>" />
    
    <?php
    }
    ?>
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- STYLESHEETS -->
	<!--<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">-->
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<!--<link rel="stylesheet" type="text/css" href="icons/themify/themify-icons.css">-->
	<!--<link rel="stylesheet" type="text/css" href="icons/flaticon/flaticon_mooncart.css">-->
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
	<!--<link rel="stylesheet" type="text/css" href="vendor/nouislider/nouislider.min.css">-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--<link rel="stylesheet" type="text/css" href="vendor/lightgallery/dist/css/lightgallery.css">-->
	<!--<link rel="stylesheet" type="text/css" href="vendor/lightgallery/dist/css/lg-thumbnail.css">-->
	<!--<link rel="stylesheet" type="text/css" href="vendor/lightgallery/dist/css/lg-zoom.css">-->
	<link rel="stylesheet" type="text/css" href="css/style.css">






	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->


	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>-->
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->





	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
		rel="stylesheet">


	<style>
	  .header-nav .nav > li .mega-menu, .header-nav .nav > li .sub-menu{
	    width:272px !important;
	    padding:15px !important;
	}
		/* .inquiry-modal  {
			display: none !important;
		} */
		
		@media only screen and (max-width:768px){
		    .dz-social-icon{
    	        display:none !important;
    	    }
		    .borderlfyfyr::after{
		        display:none !important;
		    }
		}
	</style>
	
	    <!-- Global site tag (gtag.js) - Google Analytics -->

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
<?php
if(isset($markup) && $markup != 'test' && $markup != 'code'){
    echo $markup;
}
?>
</head>

<body>
    	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWVPLHV"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<div class="page-wraper">
		<!-- <div id="loading-area" class="preloader-wrapper-1">
		<div>
			<span class="loader-2"></span>
			<img src="images/logo.png" alt="/">
			<span class="loader"></span>
		</div>
	</div> -->


		<style>
			.logo-header img {
				height: 81px;

			}
		</style>

		<?php
		include('nav.php')
		?>
		<!-- Header End -->
