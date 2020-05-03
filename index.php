<?php
 session_start();
$userlogged = $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Expat Mama - Work and Travel!</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->


<!-- FONTS Awesome -->
<script src="https://kit.fontawesome.com/f3532c2ad3.js"></script>

	</head>
	
	
	
	<body>
		<div class="main-page-wrapper">
		
			<!--
			=============================================
				Theme Header
			==============================================
			-->
			<?php include "./content/main/header1.php";?>		
			<!-- /.theme-main-header -->
						
			<!--
			=====================================================
				Theme Main SLider
			=====================================================
			-->
			<?php include "./content/main/slider1.php";?>		
			<!--  /#banner -->
			
			<!--
			=====================================================
				About us Section
			=====================================================
			-->
			<?php include "./content/main/aboutus1.php";?>		
			<!-- /#about-us -->
			
			<!--
			=====================================================
				Page middle banner
			=====================================================
			-->
			<?php include "./content/main/middlebanner1.php";?>	
			<!-- /.page-middle-banner -->
			
			<div class="theme-title">
						<div style="padding=20px;"><h2>Some of the places I've lived in or been to as an Expat Mama</h2></div>
			</div> <!-- /.theme-title -->
			
			<!--
			=====================================================
				Partner Section
			=====================================================
			-->
			<?php include "./content/main/partner1.php";?>	
			<!-- /#partner-section -->
			
			<!--
			=====================================================
				Video Section
			=====================================================
			-->
			<?php include "./content/main/video1.php";?>	
			<!-- End Video Promo Section -->
			
			<!--
			=====================================================
				Contact Section
			=====================================================
			-->
			<?php include "./content/main/contact1.php";?>	
			<!-- /#contact-section -->
			
			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<?php include "./content/main/footer1.php";?>	
			<!-- /footer-section -->
			
			
			<!-- =============================================
				Loading Transition
			============================================== -->
			<div id="loader-wrapper">
				<div id="preloader_1">
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	            </div>
			</div>


	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg">
				<i class="fa fa-arrow-up" aria-hidden="true"></i>
			</button>




		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->

		<!-- revolution -->
		<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.video.min.js"></script>



		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- mixitUp -->
		<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
		<!-- Progress Bar js -->
		<script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>

	</div> <!-- /.main-page-wrapper -->
		
		
		<!-- Default Statcounter code for ExpatMama https://expatmama.leandroprada.website -->
				<!-- Default Statcounter code for ExpatMama
					http://www.expatmama.life -->
					<script type="text/javascript">
					var sc_project=12027685;
					var sc_invisible=1;
					var sc_security="6acb0cb9";
					</script>
					<script type="text/javascript"
					src="https://www.statcounter.com/counter/counter.js"
					async></script>
					<noscript><div class="statcounter"><a title="Web Analytics
					Made Easy - StatCounter" href="https://statcounter.com/"
					target="_blank"><img class="statcounter"
					src="https://c.statcounter.com/12027685/0/6acb0cb9/1/"
					alt="Web Analytics Made Easy -
					StatCounter"></a></div></noscript>
					<!-- End of Statcounter Code -->

              
				<!-- Código de instalación Cliengo para http://www.expatmama.life -->
				  <script type="text/javascript">(function () {
				  var ldk = document.createElement('script');
				  ldk.type = 'text/javascript';
				  ldk.async = true;
				  ldk.src = 'https://s.cliengo.com/weboptimizer/5d319819e4b0f905135b7465/5d31981ae4b0f905135b7468.js';
				  var s = document.getElementsByTagName('script')[0];
				  s.parentNode.insertBefore(ldk, s);
				})();</script>
							


	</body>
</html>