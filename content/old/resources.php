<?php
 session_start();


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Resources - Expat Mama </title>

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
	
<?php if (($_SESSION['login']) == 'validated') { ?>	
		<div class="main-page-wrapper">



			
			<!--
			=============================================
				Theme Header
			==============================================
			-->
			
				<header class="theme-main-header">
				<div class="container">
					<a href="index.html" class="logo float-left tran4s"><img src="images/logo/logo.png" alt="Logo"></a>

					<!-- ========================= Theme Feature Page Menu ======================= -->
					<nav class="navbar float-right theme-main-menu one-page-menu">
					   <!-- Brand and toggle get grouped for better mobile display -->
					   <div class="navbar-header">
					     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					       <span class="sr-only">Toggle navigation</span>
					       Menu
					       <i class="fa fa-bars" aria-hidden="true"></i>
					     </button>
					   </div>
					   <!-- Collect the nav links, forms, and other content for toggling -->
					   <div class="collapse navbar-collapse" id="navbar-collapse-1">
					     <ul class="nav navbar-nav">
					       	<li class="active"><a href="./index.php">HOME</a></li>
							<li><a href="#podcast-section">PODCASTS</a></li>
							<li><a href="#whatsapp-section">WHATSAPP</a></li>
							<li><a href="#blogk-section">BLOG</a></li>
					
							<li><a href="./login/logout.php">LOGOUT</a></li>
												
					
				
					
					</ul>
					   </div><!-- /.navbar-collapse -->
					</nav> <!-- /.theme-feature-menu -->

				</div>
			</header> <!-- /.theme-main-header -->

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
								<li data-index="rs-280" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-title="Resources" data-description="">
									<!-- MAIN IMAGE -->
									<img src="images/home/slide-2.jpg"  alt="image" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
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
										<h1>Resources</h1>
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
										<h6>Interviews, blog and more!</h6>
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
										<a href="#podcast-section" class="project-button hvr-bounce-to-right">Dive right in!</a>
									</div>

								</li>

							</ul>
						</div>
					</div><!-- END REVOLUTION SLIDER -->
	        </div> <!--  /#banner -->


		
			<div id="podcast-section">
				<div class="container">
					<div class="page-middle-banner">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="opacity">
								<h3 class="">Enjoy our extra resources!</h3>

							<h4 class="resources-title">Podcasts</h4>
							<p>I have done a series of interviews with expats, which can be listened to here below.</p>

							<div class="podcastcontainer">
								<h5 class="podcastinterview "><i class="fas fa-headphones-alt"></i>  Christie Ogden</h5>
								<div class="podcastinfo col-xs-12 center-left">
									Canadian Christie Ogden talks about what it's like to be a full-time traveler for 8 years straight, the necessity she had to live this lifestyle, the everyday challenges she has with her special needs kids, and much more.

									Currently in the Dominican Republic, she is the ultimate low budget traveler!

								</div>
									<div><audio controls>
									  <source src="./resources/christieOgden06302019.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>

							<div class="podcastcontainer">
								<h5 class="podcastinterview"><i class="fas fa-headphones-alt"></i>  Mia Mendes </h5>
								<div class="podcastinfo col-xs-12 center-left">
									Mia Mendes found herself forced to live in Mexico after following her Mexican-born husband after he was deported from the US to a dangerous place just over the US/Mexico border.

									She talks about the living conditions within the US for deportees, what it was like for her to adapt to a country she had never lived in and what their lives are like now.

									This is a story of real life people learning to adapt to a country none of them had grown up in, as both Mia and her husband had grown up all their lives in the US.

								</div>
									<div><audio controls>
									  <source src="./resources/miaMendes07022019.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>

							<div class="podcastcontainer">
								<h5 class="podcastinterview"><i class="fas fa-headphones-alt"></i>  Jose Hernandes </h5>
								<div class="podcastinfo col-xs-12 center-left">
								Mexican born Jose Hernandes, owner of a great New York Style pizzeria called "Pizzeria Eskondida" in Merida, Yucatan, Mexico, talks about returning to Mexico after living 27 years in the US. Interesting info about the quality of cleaning products in the US vs. Mexico, as well as food, US "commercial culture", safety in Merida, Mexico and other so-called "dangerous places" in Latin America, as well as the Yucatan Peninsula, Puerto Vallarta, and Acapulco. What international friendships are like.
								</div>
									<div><audio controls>
										<source src="./resources/joseHernandes07032019.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>

							<div class="podcastcontainer">
								<h5 class="podcastinterview"><i class="fas fa-headphones-alt"></i>  Cori Bauman </h5>
								<div class="podcastinfo col-xs-12 center-left">
									After coming to Merida, Mexico for about 10 years, Christian missionary Cori Bauman from the state of Michigan in the US recounts how God called her husband and her family to sell everything, move to Mexico and set up a shelter for the severely neglected elderly. Culture shock and adaptation, how they stay afloat financially, how she balances her family life, missionary endeavors and being bilingual, among others.

									This is a podcast interview that will inevitably touch your heart!

								</div>
									<div><audio controls>
										<source src="./resources/coriBauman07042019.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>
							
							<div class="podcastcontainer">
								<h5 class="podcastinterview"><i class="fas fa-headphones-alt"></i>  Priscila Hoffman </h5>
								<div class="podcastinfo col-xs-12 center-left">
									Priscila Hoffman is from Brazil, but she's also lived in two other countries: the US and Argentina. Thus, she has become trilingual, meaning that she speaks Portuguese, English and Spanish.

									She has a some refreshing views on what it's like to learn 3 languages and multilingualism. 

									Having been born and raised in an ultraconservative fundamentalist religion, Priscila has evolved into the young woman she is today: a feminist, i.e. she is a strong advocate for equality and gender violence. She shares her journey of growth, education and how she is aware that she has lived a privileged life.

									She provides wisdom about discrimination, racism and equality within the workplace and the rest of the world. 

									This interview is deeply personal and one not to be missed!

								</div>
									<div><audio controls>
										<source src="./resources/priscilaHoffman07112019.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>
							
							<div class="podcastcontainer">
								<h5 class="podcastinterview"><i class="fas fa-headphones-alt"></i>  Anne Glennie Ruttan </h5>
								<div class="podcastinfo col-xs-12 center-left">
									Anne Glennie Ruttan is from Ontario, Canada and after vacationing several times in the Yucatan, she and her husband decided that Progreso, Mexico felt like home.

									They started out as nomads doing house & pet sits, then decided that they wanted to purchase a home. She talks about the differences between house purchases in Canada and Mexico, their new Mexican neighborhood and their house renovations.

									She discusses the importance of learning to speak Spanish and some good adaptation tips for people adapting to a new culture, and the importance of learning to adapt to a Minimalist lifestyle.

									What her life is like in Mexico now and what it's like to "live like a local", because she's the ultimate expert on how to do exactly that.

								</div>
									<div><audio controls>
										<source src="./resources/anneGlennieRuttan07052019.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>
							
							<div class="podcastcontainer">
								<h5 class="podcastinterview"><i class="fas fa-headphones-alt"></i>  Camille Flores </h5>
								<div class="podcastinfo col-xs-12 center-left">
									Camille Flores met her husband in the US at a Mexican restaurant where they were both working.

									After a minor pullover with the police without his driver's license, it looked like he wouldn't be able to renew his driver's license or work in the US ever again. Moreover, his deportation would eventually be imminent, so they as a family decided to “self-deport”.

									She tells what it was like for her to try and adapt to a new country and culture in a remote area of Mexico, with no basic services like electricity or other services for several years.

									She discusses her experience with Mexico's schools are vs. schools in the US, how their now 17-year-old is schooled now and what their lives are like, what they do for work and much more.

									A discussion on how varied Mexico can be from region to region. She truly has an amazing story. Her quote or motto is this: “I do the difficult immediately; the impossible takes me a little longer.”
								</div>
									<div><audio controls>
										<source src="./resources/camilleFlores07152019.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>
							
							<div class="podcastcontainer">
								<h5 class="podcastinterview"><i class="fas fa-headphones-alt"></i>  Dylan W. </h5>
								<div class="podcastinfo col-xs-12 center-left">
									Expat Mama interviews her 13-year-old son Dylan after traveling full-time for one year. They review the places they lived and traveled to, the people they met and what it was like to be schooled online, unschooling and worldschooling vs. public schooling in the US. 

									How Dylan feels about living this lifestyle.
								</div>
									<div><audio controls>
										<source src="./resources/dylanW07212019.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>
					
					
							<div class="podcastcontainer">
								<h5 class="podcastinterview"><i class="fas fa-headphones-alt"></i>  Douglas De Rubeis </h5>
								<div class="podcastinfo col-xs-12 center-left">
								American Douglas De Rubeis from Chicago is a third-generation Italian who decided three years ago to make the move to Chapala, Mexico after claiming he'd never ever move to Mexico!

								He talks about the Lake Chapala area that boasts almost perfect weather and the friendly atmosphere where getting by in English makes adaptation to a foreign country much easier. Why living in Mexico is pretty easy and why you might feel right at home too.

								He talks driving, safety and what it's like to build a house in Mexico as well as what to do with your house and pets when you're away.

								Want a 25% discount on Trusted Housesitters? Use the link below: 
								</div>
								<div><a style="margin-bottom:20px;" href="https://www.trustedhousesitters.com/refer/RAF171298/" target="_blank">25% off!</a>
								</div>
									<div><audio controls>
										<source src="./resources/douglasDeRubeis07182019.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>
							
							
							<div class="podcastcontainer">
								<h5 class="podcastinterview"><i class="fas fa-headphones-alt"></i>  Lorraine Powell </h5>
								<div class="podcastinfo col-xs-12 center-left">
									Lorraine Powell from Vancouver, Canada has lived with her husband in the Lake Chapala, Mexico area for 4 years now. They took the 10-day drive from Canada to Mexico, sharing what that adventure was like and how they were treated by the federal police and other Mexican locals.

									She shares some heartfelt stories of interactions with the local Mexican culture, the help expats are providing at many levels for different families, and what she's learned from living among the Mexican people. What it's been like to learn Spanish in Mexico and to truly integrate into the local culture, and well as how people can serve in her beautiful community.

									She compares her life in Canada to her life in Mexico, what health and retirement options look like in Mexico.

									Why she believes she's found the best place on earth to live and why Chapala, Mexico feels like home. 
								</div>
									<div><audio controls>
										<source src="./resources/lorrainePowell07232019.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>
							
							
							
							<div class="podcastcontainer">
								<h5 class="podcastinterview"><i class="fas fa-headphones-alt"></i>  Heidi Lane</h5>
								<div class="podcastinfo col-xs-12 center-left">
									Heidi Lane is from the US and grew up as a dancer in Wisconsin, then later became a model for Wilhemina Models in New York City and an actress. That career took her around the world to places such as Milan, Paris, Tokyo, Spain and finally, Miami. Her career then took a dramatic turn and she put herself behind the camera, shooting fashion catalogs, actresses and top singers, like Julio Iglesias Jr. and various magazines. This in turn led to photographing gorgeous weddings, families, and adorable kids of all ages, which she loves.
									
									Check out her photos and videos at <a href="https://www.facebook.com/heidilanephotographer/" target="_blank"> Heidi's Facebook</a>.
									
									Also you can visit her almost completed newest website at: <a href="http://heidilanephotographer.com/" target="_blank">Heidi's website</a>, it may say "UNDER CONSTRUCTION", but still TAKE A PEEK!!

									She's lived in various places around the world such as the Azores in Portugal, different cities in Guatemala , and after 8 months in Puerto Vallarta, Mexico she ended up in the Ajijic / Chapala, Mexico area where she's currently living.
									
									She's an expert ice cream maker too, rum raisin being her specialty!
									
								
								</div>
									<div><audio controls>
										<source src="./resources/heidiLane07222019.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>
							
					

							<div id="whatsapp-section" class="whatsappcontainer">
							<h4 class="resources-title whatsapptitle">Whatsapp Interviews</h4>
							<p>Leo Prada has done a series of interviews with expats too, you can listen below.</p>
							
							
								<h5 class="whatsappinterview"><i class="fas fa-microphone"></i>  Leo Prada </h5>
								<div class="whatsappinfo col-xs-12 center-left">
									Leo Prada is from Campana, Argentina, he's lived half of his life as a nomad. Last year he was able to live the digital nomad life for a month in Croatia.

									He is a translator for over 20 years and a software project manager now. Both activities are not location related and give him the flexibility to work remote whenever needed.
									
									He's conducted a series of interviews with fellow adventurers.
								</div>
									<div><audio controls>
										<source src="./resources/introLeo.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>
							
							<div class="whatsappcontainer">
								<h5 class="whatsappinterview"><i class="fab fa-whatsapp"></i>  Antonella Cravero </h5>
								<div class="whatsappinfo col-xs-12 center-left">
									Antonella Cravero is a certified translator and interpreter, she also gives English lessons. She's worked and traveled through Europe in the past, which has broadened her vision of the world.
									
									She restarted the nomad life around the start of 2019, and has since lived in Costa Rica, and Mexico. She is currently enjoying the wonders of Playa del Carmen.

								</div>
									<div><audio controls>
										<source src="./resources/antonellaCravero07162019-w.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>
							
							<div class="whatsappcontainer">
								<h5 class="whatsappinterview"><i class="fab fa-whatsapp"></i>  Juan Pablo Sans </h5>
								<div class="whatsappinfo col-xs-12 center-left">
									Juan Pablo Sans is a digital nomad translator. Originally from Venezuela, he is now  based in Europe. Currently he is working and living in Seville, Spain, and sometimes commutes to Cambridge, UK for business. He enjoys the freedom of doing what he wants whenever he wants. He also helps others if they need help venturing into the expat life.
								</div>
									<div><audio controls>
										<source src="./resources/juanPabloSans07182019-w.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>


							<div class="whatsappcontainer">
								<h5 class="whatsappinterview"><i class="fab fa-whatsapp"></i>  Mat&iacute;as Ort&iacute;z </h5>
								<div class="whatsappinfo col-xs-12 center-left">
									Mat&iacute;as Ort&iacute;z is now a digital nomad and founder of Letras N&oacute;madas, a program helping out translators get out of their living room shell. After more than 10 years of corporate life in a multinational company, he decided to live the digital nomad life, doing some slow travelling, he is currently house-sitting in the vecinity of Lake Chapala in Mexico.
								</div>
									<div><audio controls>
										<source src="./resources/matiasOrtiz07222019.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>
							
							<div class="podcastcontainer">
								<h5 class="podcastinterview"><i class="fas fa-microphone"></i>   Fred Badagnani </h5>
								<div class="podcastinfo col-xs-12 center-left">
									Fred Badagnani is an American expat, currently living in Argentina. He owns a company providing airport executive transport services. He's been to 49 of the 50 states, missing only Hawaii. Moving away from Argentina if the situation changes is not out of the question for Fred.
								</div>
									<div><audio controls>
										<source src="./resources/fredBadagnani07252019.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>
							
								<div class="whatsappcontainer">
								<h5 class="whatsappinterview"><i class="fab fa-whatsapp"></i>  Colin Smith </h5>
								<div class="whatsappinfo col-xs-12 center-left">
									Colin Smith is an American expat, currently living in Argentina. He moved to Buenos Aires with his family (wife and 4 children) and he shares with us the intricacies of life abroad, and how events untangled in his life after the move.
								</div>
									<div><audio controls>
										<source src="./resources/colinSmith07302019.ogg" type="audio/ogg">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>

								
								<h4 id="blogk-section" class="resources-title">Blog</h4>
								<p>Read about my full-time travelling experience</p>
								<div class="top"
											data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
											data-y="['middle','middle','middle','middle']" data-voffset="['52','185','185','105']"
											data-transform_idle="o:1;"

											data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
											data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
											data-mask_in="x:0px;y:[100%];"
											data-mask_out="x:inherit;y:inherit;"
											data-start="3000"
											data-splitin="none"
											data-splitout="none"
											data-responsive_offset="on">
									<a href="https://kimthorneharper.wordpress.com/" target="_blank"class="podcastinterview" >Go to my blog</a>

								</div>
							
							
							
							
							
						</div>
					</div>
				</div>
			</div>
		</div>

							
				

								
					
	


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


<?php }else{ ?>

						<div class="main-page-wrapper">

								<div id="podcast-section">
												<div class="container">
													<div class="page-middle-banner">
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
															<div class="opacity"> 
															 
															<h3 class="">Please <a href="http://www.expatmama.life/login/login.php">login</a> to see Exclusive Content!</h3>
															</div>
														</div>
													</div>
												</div>
								</div>								
						</div>								
						



<?php } ?>


		

              
            


	</body>
</html>
