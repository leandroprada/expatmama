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

		<title>Expat Mama - Work and Travel! - Exclusive Content</title>

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
			
				<?php require "header.php";?>

			<!--
			=====================================================
				Theme Main SLider
			=====================================================
			-->
			<div id="home" class="banner">
	        	<div class="rev_slider_wrapper">
					<!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
						<div id="main-banner-slider" class="rev_slider video-slider" data-version="5.0.7">
							<ul>

								<!-- SLIDE1  -->
								<li data-index="rs-280" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-title="Expat Mama!" data-description="">
									<!-- MAIN IMAGE -->
									<img src="images/home/slide-1.jpg"  alt="image" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
									<!-- LAYERS -->

									<!-- LAYER NR. 1 -->
									<div class="tp-caption"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										data-y="['middle','middle','middle','middle']" data-voffset="['-58','-58','0','-50']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"

										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										data-mask_in="x:0px;y:[100%];"
										data-mask_out="x:inherit;y:inherit;"
										data-start="1000"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on"
										style="z-index: 6; white-space: nowrap;">
										<h1>Welcome <?php echo $userlogged ?> to Expat MAMA!</h1>
									</div>

									<!-- LAYER NR. 2 -->
									<div class="tp-caption"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										data-y="['middle','middle','middle','middle']" data-voffset="['-05','-05','63','0']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"

										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										data-mask_in="x:0px;y:[100%];"
										data-mask_out="x:inherit;y:inherit;"
										data-start="2000"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on"
										style="z-index: 6; white-space: nowrap;">
										<h6>True freedom, location-independent income & traveling the world whenever you feel like it, on any income!</h6>
									</div>


									<!-- LAYER NR. 3 -->
									<div class="tp-caption"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										data-y="['middle','middle','middle','middle']" data-voffset="['52','52','125','80']"
										data-transform_idle="o:1;"

										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										data-mask_in="x:0px;y:[100%];"
										data-mask_out="x:inherit;y:inherit;"
										data-start="3000"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on">
										<a href="#about-us" class="project-button hvr-bounce-to-right">View Content!</a>
									</div>

								</li>
							</ul>
						</div>
					</div><!-- END REVOLUTION SLIDER -->
	        </div> <!--  /#banner -->



	        <!--
			=====================================================
				About us Section
			=====================================================
			-->
			<section id="about-us">
				<div class="container">
					<div class="row">


						<div class="col-xs-12" id="expat-section">
							<div class="theme-title">
								<h2>Content</h2>
							</div>
							<div class="single-about-content">

								<h5><a href="#contact-section" class="tran3s">Exclusive Content</a></h5>

								<p>In this section you will find all of our exclusive content for subscribers.</p>
								
								<a href="#contact-section" class="more tran3s hvr-bounce-to-right">More Info</a>
							</div> <!-- /.single-about-content -->
						</div> <!-- /.col -->




					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</section> <!-- /#about-us -->


			
			
 <!-- Start Video promo Section -->
				  <section class="video-promo section">
					  <div class="overlay"></div>
					  <div class="container">
						<div class="row">
						  <div class="col-md-12 col-sm-12">
							  <div class="video-promo-content text-center">
							  <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">DESCRIPTION OF THE COURSE</h2>
								<p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">In under two minutes</p>
								<iframe width="100%" height="450px" src="https://www.youtube.com/embed/Qu93IM8x5JQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>

							  </div>
						  </div>
						</div>
					  </div>
					</section>
			<!-- End Video Promo Section -->

			<!--
			=====================================================
				Contact Section
			=====================================================
			-->

			<div id="blog-section" class="page-middle-banner container">

				<div class="theme-title">
							<h2>ABOUT Kimberlee</h2>
							<div>Kimberlee</div>
						</div>

				<div class="col-xs-12" >
				<p sytle="padding:15px;">
				Kimberlee Thorne-Harper is the creator and mentor of Expat Mama. She began living abroad in
				1992 in Argentina on a mission trip for her church. Then that first trip turned into another 16 years, as
				she married her husband from Argentina. When her spouse suddenly passed away, she decided to take
				her 2 children (both boys) to her native US to live and to get to know her family and country. After 6
				years, she was ready to go abroad again, but this time it was Mexico. While in Mexico, she and her boys
				visited Colombia and Cuba.</p>
					</div>
				<div class="col-xs-12">
				<p sytle="padding:15px;">
				She has been a successful businesswoman and entrepreneur, building her own linguistic company from
				scratch, offering ESL training, translation, editing, proofreading, interpreting and writing services. She
				has taught Cultural Competence and is a Teacher Trainer. She is a published author with a good
				following on her blog as well as social media with Facebook, Instagram and LinkedIn. She is a speaker
				and mentor and will inspire you to become the best version of yourself and live your best life.</p>
				</div>

			</div>

		

			<div id="contact-section">
				<div class="container">
					<div class="contact-address-content">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="left-side">
								<h2>Contact Info</h2>


								<ul>
									<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fab fa-whatsapp" aria-hidden="true"></i></div>
										<h6>Whatsapp</h6>
										<a href="https://wa.me/12098817724" target="_blank">+1-209-881-7724</a>
									</li>
									<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fas fa-envelope" aria-hidden="true"></i></div>
										<h6>Email</h6>
										<a href="mailto:expatmama0@gmail.com" target="_blank">expatmama0@gmail.com</a>
									</li>
								</ul>
							</div> <!-- /.left-side -->
						</div> <!-- /.col- -->


						<!-- /.col- -->
					</div> <!-- /.contact-address-content -->



					<!-- Contact Form -->
					<div class="send-message center">
						<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScJJt-a3PIsB-ifdoFos799dhRXZA-EplTf9vNXHOv6m5BJJA/viewform?embedded=true" width="100%" height="1105" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

					</div> <!-- /.send-message -->
				</div> <!-- /.container -->
			</div> <!-- /#contact-section -->



			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer>
				<div class="container">
					<a href="index.html" class="logo"><img src="images/logo/logo.png" alt="Logo"></a>

					<ul>
						<li><a href="https://m.me/AuthorKimThorneHarper?fbclid=IwAR3I-3JyZawZCV5DJNWhw_J_f_Ixy2OLLQJgxhZkayfe4KNyoSFDBnccSxo" target="_blank" class="tran3s round-border"	q><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://mobile.twitter.com/swlanguages" target="_blank" class="tran3s round-border"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="https://www.instagram.com/kdthorneharper/" class="tran3s round-border"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="skype:live:swlspayments?chat" class="tran3s round-border"><i class="fab fa-skype" aria-hidden="true"></i></a></li>
						<li><a href="https://www.linkedin.com/in/kimberleethorneharper/" target="_blank" class="tran3s round-border"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
											</ul>
					<p>Copyright @2018 All rights reserved | This template is made with <i class="fas fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
					Photo by Zachary DeBottis from Pexels / Photo by Peng LIU from Pexels</p>



				</div>
			</footer>




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
