<?php
 session_start();

?>



<div id="podcast-section" class="podcast-section col-lg-12 col-xs-12">
	<div class=" page-middle-banner">
		<div class="opacity">
			<h3 class="">Enjoy our extra resources!</h3>
			<span><a href="#about-us" class="center more tran3s hvr-bounce-to-right" id="eng_filter_button" onclick="showhidden(podcasts_en_list);">Podcasts In English</a></span>
			<span><a href="#about-us" class="center more tran3s hvr-bounce-to-right"   id="esp_filter_button"onclick="showhidden(podcasts_es_list);">Podcasts en espa&ntilde;ol</a></span>
			<span><a href="#about-us" class="center more tran3s hvr-bounce-to-right"  id="was_filter_button" onclick="showhidden(whatsapp_list);">WHATSAPP Interviews</a></span>
			<span><a href="#datepicker" class="center more tran3s hvr-bounce-to-right" onclick="showhidden(datepicker); hide(eng_filter_button); hide(esp_filter_button);hide(was_filter_button);">Filter By Date</a></span>
			<span><a href="#about-us" class="center more tran3s hvr-bounce-to-right selected" onclick="show_all();">SEE ALL</a></span>
			<span><a href="#about-us" class="center more tran3s hvr-bounce-to-right" onclick="hide_all();">HIDE ALL</a></span>

			<div id="datepicker" class="hidden">
				<p>2019<p/>
				<ul>
					<a href="#about-us" class="more tran3s hvr-bounce-to-right" onclick="showhiddendate(jun2019);" style="width:60px;"><li>Jun</li></a>
					<a href="#about-us" class="more tran3s hvr-bounce-to-right" onclick="showhiddendate(jul2019);"  style="width:60px;"><li>Jul</li></a>
					<a href="#about-us" class="more tran3s hvr-bounce-to-right" onclick="showhiddendate(aug2019); "  style="width:60px;"><li>Aug</li></a>
					<a href="#about-us" class="more tran3s hvr-bounce-to-right" onclick="showhiddendate(sep2019)"  style="width:60px;"><li>Sep</li></a>
					<a href="#about-us" class="more tran3s hvr-bounce-to-right" onclick="showhiddendate(oct2019)"  style="width:60px;"><li>Oct</li></a>
					<a href="#about-us" class="more tran3s hvr-bounce-to-right" onclick="showhiddendate(nov2019);"  style="width:60px;"><li>Nov</li></a>
					<a href="#about-us" class="more tran3s hvr-bounce-to-right"  onclick="showhiddendate(dec2019)"  style="width:60px;"><li>Dec</li></a>
				</ul>
			
				<p>2021<p/>
				<ul>
					<a href="#about-us" class="more tran3s hvr-bounce-to-right" onclick="showhiddendate(oct2021);" style="width:60px;"><li>Oct</li></a>
				</ul>
			</div>

							<div id="podcasts_en_list" class=" hidden">
							<p>I have done a series of interviews with expats, which can be listened to here below.</p>


								<ul>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(ogden);"><li>Christie Ogden</li></a>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(mendes);"><li>Mia Mendez</li></a>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(hernandes);"><li>Jose Hernandes</li></a>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(bauman);"><li>Cori Bauman</li></a>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(hoffman);"><li>Priscila Hoffman</li></a>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(ruttan);"><li>Anne Glennie Ruttan</li></a>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(flores);"><li>Camille Flores</li></a>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(dylan);"><li>Dylan W.</li></a>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(derubeis);"><li>Douglas De Rubeis</li></a>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(powell);"><li>Lorraine Powell</li></a>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(lane);"><li>Heidi Lane</li></a>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(meyer);"><li>Maureen (Mo) Meyer</li></a>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(lprada);"><li>Leo Prada</li></a>
							</ul>
							</div>



								<div class="podcastcontainer hidden hiddenpodcast jun2019" id="ogden">
								<h5 class="podcastinterview">
								<div ><img src="./images/avatars/christieOgden.png" alt="" class="podcast-picture"></div>
								<i class="fas fa-headphones-alt"></i> Christie Ogden 
								</h5>
								<p class="podcastinfo">
									Canadian Christie Ogden talks about what it's like to be a full-time traveler for 8 years straight, the necessity she had to live this lifestyle, the everyday challenges she has with her special needs kids, and much more.

									Currently in the Dominican Republic, she is the ultimate low budget traveler!

								</p>
									<div><audio id="ogdenaudio" controls>
									  <source src="./resources/christieOgden06302019.wav" type="audio/wav">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>



							<div class="podcastcontainer hidden hiddenpodcast jul2019" id="mendes">
								<h5 class="podcastinterview">
								<!-- <div ><img src="./images/avatars/leoPrada.png" alt="" class="podcast-picture"></div> -->
								<i class="fas fa-headphones-alt"></i>  Mia Mendez 
								</h5>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
									Mia Mendez found herself forced to live in Mexico after following her Mexican-born husband after he was deported from the US to a dangerous place just over the US/Mexico border.

									She talks about the living conditions within the US for deportees, what it was like for her to adapt to a country she had never lived in and what their lives are like now.

									This is a story of real life people learning to adapt to a country none of them had grown up in, as both Mia and her husband had grown up all their lives in the US.

								</div>
									<div><audio controls>
									  <source src="./resources/miaMendes07022019.wav" type="audio/wav">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>

							<div class="podcastcontainer hidden hiddenpodcast jul2019" id="hernandes">
								<h5 class="podcastinterview">
								<!-- <div ><img src="./images/avatars/leoPrada.png" alt="" class="podcast-picture"></div> -->
								<i class="fas fa-headphones-alt"></i>  Jose Hernandes 
								</h5>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
								Mexican born Jose Hernandes, owner of a great New York Style pizzeria called "Pizzeria Eskondida" in Merida, Yucatan, Mexico, talks about returning to Mexico after living 27 years in the US. Interesting info about the quality of cleaning products in the US vs. Mexico, as well as food, US "commercial culture", safety in Merida, Mexico and other so-called "dangerous places" in Latin America, as well as the Yucatan Peninsula, Puerto Vallarta, and Acapulco. What international friendships are like.
								</div>
									<div><audio controls>
										<source src="./resources/joseHernandes07032019.wav" type="audio/wav">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>

							<div class="podcastcontainer hidden hiddenpodcast jul2019" id="bauman">
								<h5 class="podcastinterview">
								<!-- <div ><img src="./images/avatars/leoPrada.png" alt="" class="podcast-picture"></div> -->
								<i class="fas fa-headphones-alt"></i>  Cori Bauman 
								</h5>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
									After coming to Merida, Mexico for about 10 years, Christian missionary Cori Bauman from the state of Michigan in the US recounts how God called her husband and her family to sell everything, move to Mexico and set up a shelter for the severely neglected elderly. Culture shock and adaptation, how they stay afloat financially, how she balances her family life, missionary endeavors and being bilingual, among others.

									This is a podcast interview that will inevitably touch your heart!

								</div>
									<div><audio controls>
										<source src="./resources/coriBauman07042019.wav" type="audio/wav">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>

							<div class="podcastcontainer hidden hiddenpodcast jul2019" id="hoffman">
								<h5 class="podcastinterview"><div >
								<img src="./images/avatars/priscillaHoffman.png" alt="" class="podcast-picture"></div>
								<i class="fas fa-headphones-alt"></i>  Priscila Hoffman 
								</h5>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
									Priscila Hoffman is from Brazil, but she's also lived in two other countries: the US and Argentina. Thus, she has become trilingual, meaning that she speaks Portuguese, English and Spanish.

									She has a some refreshing views on what it's like to learn 3 languages and multilingualism.

									Having been born and raised in an ultraconservative fundamentalist religion, Priscila has evolved into the young woman she is today: a feminist, i.e. she is a strong advocate for equality and gender violence. She shares her journey of growth, education and how she is aware that she has lived a privileged life.

									She provides wisdom about discrimination, racism and equality within the workplace and the rest of the world.

									This interview is deeply personal and one not to be missed!

								</div>
									<div><audio controls>
										<source src="./resources/priscilaHoffman07112019.wav" type="audio/wav">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>

							<div class="podcastcontainer hidden hiddenpodcast jul2019" id="ruttan">
								<h5 class="podcastinterview">
								<div ><img src="./images/avatars/anneRuttan.png" alt="" class="podcast-picture"></div>
								<i class="fas fa-headphones-alt"></i>  Anne Glennie Ruttan 
								</h5>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
									Anne Glennie Ruttan is from Ontario, Canada and after vacationing several times in the Yucatan, she and her husband decided that Progreso, Mexico felt like home.

									They started out as nomads doing house & pet sits, then decided that they wanted to purchase a home. She talks about the differences between house purchases in Canada and Mexico, their new Mexican neighborhood and their house renovations.

									She discusses the importance of learning to speak Spanish and some good adaptation tips for people adapting to a new culture, and the importance of learning to adapt to a Minimalist lifestyle.

									What her life is like in Mexico now and what it's like to "live like a local", because she's the ultimate expert on how to do exactly that.

								</div>
									<div><audio controls>
										<source src="./resources/anneGlennieRuttan07052019.wav" type="audio/wav">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>

							<div class="podcastcontainer hidden hiddenpodcast jul2019" id="flores">
								<h5 class="podcastinterview">
								<div ><img src="./images/avatars/camilleFlores.png" alt="" class="podcast-picture"></div>
								<i class="fas fa-headphones-alt"></i>  Camille Flores 
								</h5>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
									Camille Flores met her husband in the US at a Mexican restaurant where they were both working.

									After a minor pullover with the police without his driver's license, it looked like he wouldn't be able to renew his driver's license or work in the US ever again. Moreover, his deportation would eventually be imminent, so they as a family decided to “self-deport”.

									She tells what it was like for her to try and adapt to a new country and culture in a remote area of Mexico, with no basic services like electricity or other services for several years.

									She discusses her experience with Mexico's schools are vs. schools in the US, how their now 17-year-old is schooled now and what their lives are like, what they do for work and much more.

									A discussion on how varied Mexico can be from region to region. She truly has an amazing story. Her quote or motto is this: “I do the difficult immediately; the impossible takes me a little longer.”
								</div>
									<div><audio controls>
										<source src="./resources/camilleFlores07152019.wav" type="audio/wav">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>

							<div class="podcastcontainer hidden hiddenpodcast jul2019" id="dylan">
								<h5 class="podcastinterview">
								<!-- <div ><img src="./images/avatars/leoPrada.png" alt="" class="podcast-picture"></div> -->
								<i class="fas fa-headphones-alt"></i>  Dylan W. 
								</h5>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
									Expat Mama interviews her 13-year-old son Dylan after traveling full-time for one year. They review the places they lived and traveled to, the people they met and what it was like to be schooled online, unschooling and worldschooling vs. public schooling in the US.

									How Dylan feels about living this lifestyle.
								</div>
									<div><audio controls>
										<source src="./resources/dylanW07212019.wav" type="audio/wav">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>


							<div class="podcastcontainer hidden hiddenpodcast jul2019" id="derubeis">
								<h5 class="podcastinterview">
								<div ><img src="./images/avatars/douglasDeRubeis.png" alt="" class="podcast-picture"></div>
								<i class="fas fa-headphones-alt"></i>  Douglas De Rubeis 
								</h5>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
								American Douglas De Rubeis from Chicago is a third-generation Italian who decided three years ago to make the move to Chapala, Mexico after claiming he'd never ever move to Mexico!

								He talks about the Lake Chapala area that boasts almost perfect weather and the friendly atmosphere where getting by in English makes adaptation to a foreign country much easier. Why living in Mexico is pretty easy and why you might feel right at home too.

								He talks driving, safety and what it's like to build a house in Mexico as well as what to do with your house and pets when you're away.

								Want a 25% discount on Trusted Housesitters? Use the link below:
								</div>
								<div><a style="margin-bottom:20px;" href="https://www.trustedhousesitters.com/refer/RAF171298/" target="_blank">25% off!</a>
								</div>
									<div><audio controls>
										<source src="./resources/douglasDeRubeis07182019.wav" type="audio/wav">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>


							<div class="podcastcontainer hidden hiddenpodcast jul2019" id="powell">
								<h5 class="podcastinterview">
								<div ><img src="./images/avatars/lorrainPowell.png" alt="" class="podcast-picture"></div>
								<i class="fas fa-headphones-alt"></i>  Lorraine Powell 
								</h5>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
									Lorraine Powell from Vancouver, Canada has lived with her husband in the Lake Chapala, Mexico area for 4 years now. They took the 10-day drive from Canada to Mexico, sharing what that adventure was like and how they were treated by the federal police and other Mexican locals.

									She shares some heartfelt stories of interactions with the local Mexican culture, the help expats are providing at many levels for different families, and what she's learned from living among the Mexican people. What it's been like to learn Spanish in Mexico and to truly integrate into the local culture, and well as how people can serve in her beautiful community.

									She compares her life in Canada to her life in Mexico, what health and retirement options look like in Mexico.

									Why she believes she's found the best place on earth to live and why Chapala, Mexico feels like home.
								</div>
									<div><audio controls>
										<source src="./resources/lorrainePowell07232019.wav" type="audio/wav">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>



							<div class="podcastcontainer hidden hiddenpodcast jul2019" id="lane">
								<h5 class="podcastinterview">
								<div ><img src="./images/avatars/heidiLane.png" alt="" class="podcast-picture"></div>
								<i class="fas fa-headphones-alt"></i>  Heidi Lane
								</h5>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
									Heidi Lane is from the US and grew up as a dancer in Wisconsin, then later became a model for Wilhemina Models in New York City and an actress. That career took her around the world to places such as Milan, Paris, Tokyo, Spain and finally, Miami. Her career then took a dramatic turn and she put herself behind the camera, shooting fashion catalogs, actresses and top singers, like Julio Iglesias Jr. and various magazines. This in turn led to photographing gorgeous weddings, families, and adorable kids of all ages, which she loves.

									Check out her photos and videos at Heidi's Facebook: https://www.facebook.com/heidilanephotographer/.

									Also you can visit her almost completed newest website at:http://heidilanephotographer.com/, it may say "UNDER CONSTRUCTION", but still TAKE A PEEK!!

									She's lived in various places around the world such as the Azores in Portugal, different cities in Guatemala , and after 8 months in Puerto Vallarta, Mexico she ended up in the Ajijic / Chapala, Mexico area where she's currently living.

									She's an expert ice cream maker too, rum raisin being her specialty!


								</div>
									<div><audio controls>
										<source src="./resources/heidiLane07222019.wav" type="audio/wav">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>



								<div class="podcastcontainer hidden hiddenpodcast aug2019" id="meyer">
								<h5 class="podcastinterview">
								<div ><img src="./images/avatars/maureenMeyer.png" alt="" class="podcast-picture"></div>
								<i class="fas fa-headphones-alt"></i>  Maureen (Mo) Rooney-Meyer
								</h5>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
									Maureen (Mo) Meyer is from the east coast in the US, yet she’s lived in several places in the US. After being selected for the English Language Scholar Program, she was placed in Merida, which is located in the upper Yucatan Peninsula In Mexico.

									Despite the fact that she’s fully fluent in Spanish and has taught the language for several years, she shares her challenges while adapting to the local culture among mostly the Mayan people, as well as one embarrassing moment while. trying to communicate in the local dialect.

									She also describes what it’s been like in her work life while trying to achieve professional objectives such as implementing newer approaches to learning English while training local teachers of English. She goes into how adding native English speakers who volunteer in the classroom have been received in Mexico.

									This interview presents a positive plug for those caring teachers out there who truly may not know that they make a difference in the lives of their students.

									Topics discussed are adaptation to a foreign country for both Mo and her teenage son, learning curves while homeschooling, unschooling, worldschooling, and what it’s like to be a global citizen.


								</div>
									<div><audio controls>
										<source src="./resources/maureenMeyer08062019.wav" type="audio/wav">
									Your browser does not support the audio element.
									</audio>
									</div>
							</div>

							<div id="podcasts_es_list" class="hidden">
							<p>Debajo las entrevistas que realic&eacute; en espa&ntilde;ol.</p>
							<ul>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(ortizpereira);"><li>Mat&iacute;as y Luc&iacute;a</li></a>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(higgins);"><li>Charlie y Ximena </li></a>
								<a href="#podcast-section" class="more tran3s hvr-bounce-to-right" onclick="showhidden(alan);"><li>Alan W</li></a>
							</ul>
							</div>

							<div class="podcastcontainer hidden hiddenpodcast aug2019" id="ortizpereira">
							<div class="center">
							<h5 class="podcastinterview ">
							<div ><img src="./images/avatars/ortizPereira.png" alt="" class="podcast-picture"></div>
							 <i class="fas fa-headphones-alt"></i> Mat&iacute;as Ortiz y Luc&iacute;a Pereira Duarte (En Espa&ntilde;ol)
							</h5>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
								Mat&iacute;as y Luc&iacute;a son una pareja argentina que actualmente se encuentra en Chapala, M&eacute;xico. Al encontrarse los dos sin trabajo en Argentina con una situaci&oacute;n bastante limite, decidieron probar suerte yendo a M&eacute;xico. ¿El resultado? Encontraron en M&eacute;xico una vida nueva al cuidar casas y mascotas. Aqu&iacute; nos cuentan su historia y c&oacute;mo la experiencia de viajar les abri&oacute; la mente y les di&oacute; un enfoque renovado para empezar a realizar sus propios proyectos en l&iacute;nea.
								Esta entrevista es super interesante. ¡No se la pueden perder!
							</div>
								<div><audio controls>
									<source src="./resources/matiasOrtizyLucianaPereira08042019.wav" type="audio/wav">
								Your browser does not support the audio element.
								</audio>
								</div>
						</div>
						
						<div class="podcastcontainer hidden hiddenpodcast aug2019" id="higgins">
							<div class="center">
							<h5 class="podcastinterview ">
							<div ><img src="./images/avatars/charlieyXimena.png" alt="" class="podcast-picture"></div>
							 <i class="fas fa-headphones-alt"></i> Charlie Higgins y  Ximena Nieto Casta&ntilde;o (En Espa&ntilde;ol)
							</h5>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
								Charlie creci&oacute; en la costa Este de los Estados Unidos, vivi&oacute; nueva a&ntilde;os en Argentina, donde conoci&oacute; gente de distintos lugares. Ximena naci&oacute; en Colombia, pero vivi&oacute; por toda latinoam&eacute;rica, e hizo su carrera universitaria en Argentina.
								Charlie es m&uacute;sico y sin saberlo, concurr&iacute;an al mismo bar, luego cuando se conocieron pudieron en retrospectiva, unir los puntos.
								Viven en Puerto Vallarta, M&eacute;xico.
								Eligieron M&eacute;xico por las cualidades de su pueblo que tiene una actitud de ver la vida siempre con esperanza.
							</div>
								<div><audio controls>
									<source src="./resources/charlieyJimenaHiggins08132019.wav" type="audio/wav">
								Your browser does not support the audio element.
								</audio>
								</div>
						</div>
						
						
						<div class="podcastcontainer hidden hiddenpodcast sep2019" id="alan">
							<div class="center">
							<h5 class="podcastinterview ">
							<div ><img src="./images/avatars/png" alt="" class="podcast-picture"></div>
							 <i class="fas fa-headphones-alt"></i> Alan W(En Espa&ntilde;ol)
							</h5>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
								Kimberlee discute con su hijo Alan, c&oacute;mo fue su experiencia en su viaje de regreso a los Estados Unidos, luego de vivir m&aacute;s de un a&ntilde;o en M&eacute;xico. Hablan sobre c&oacute;mo, luego de sentir a M&eacute;xico como su hogar, la vuelta a EE.UU. fue un choque cultural, vieron muy marcadas las diferencias. 
								Aunque el plan inicial era que Alan se quedase a vivir en EE.UU. pero su experiencia negativa los llev&oacute; a cambiar esta decisi&oacute;n.
								Ahora Alan, junto a su hermano Dylan y Kimberlee viven en Chapala, Mexico.
							</div>
								<div><audio controls>
									<source src="./resources/alanW09122019.wav" type="audio/wav">
								Your browser does not support the audio element.
								</audio>
								</div>
						</div>

						<div id="whatsapp_list" class="podcastcontainer hidden">
						<p>Leo Prada has done a series of interviews with expats too, you can listen below.</p>
							<ul>
							<a href="#podcast-section" class="more tran3s hvr-bounce-to-right"  onclick="showhidden(prada);"><li>Leo prada</li></a>
							<a href="#podcast-section" class="more tran3s hvr-bounce-to-right"  onclick="showhidden(cravero);"><li>Antonella Cravero</li></a>
							<a href="#podcast-section" class="more tran3s hvr-bounce-to-right"  onclick="showhidden(sans);"><li>Juan Pablo Sans</li></a>
							<a href="#podcast-section" class="more tran3s hvr-bounce-to-right"  onclick="showhidden(ortiz);"><li> Mat&iacute;as Ort&iacute;z</li></a>
							<a href="#podcast-section" class="more tran3s hvr-bounce-to-right"  onclick="showhidden(smith);"><li>Colin Smith</li></a>
							<a href="#podcast-section" class="more tran3s hvr-bounce-to-right"  onclick="showhidden(badagnani);"><li>Fred Badagnani</li></a>
							<a href="#podcast-section" class="more tran3s hvr-bounce-to-right"  onclick="showhidden(sequera);"><li>Egilde Sequera</li></a>
						</ul>
						</div>

						<div class="podcastcontainer hidden hiddenpodcast jul2019" id="prada">
							<div class="center">
							<h5 class="podcastinterview">	
							<div ><img src="./images/avatars/leoPrada.png" alt="" class="podcast-picture"></div>
							<i class="fas fa-microphone"></i>  Leo Prada </h5>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
								Leo Prada is from Campana, Argentina, he's lived half of his life as a nomad. Last year he was able to live the digital nomad life for a month in Croatia.

								He is a translator for over 20 years and a software project manager now. Both activities are not location related and give him the flexibility to work remote whenever needed.

								He's conducted a series of interviews with fellow adventurers.
							</div>
								<div><audio controls>
									<source src="./resources/introLeo.wav" type="audio/wav">
								Your browser does not support the audio element.
								</audio>
								</div>
						</div>

						<div class="podcastcontainer hidden hiddenpodcast col-lg-12 col-md-12 col-sm-12 col-xs-12 center jul2019" id="cravero">
				
							
							<h5 class="podcastinterview center" >	<div ><img src="./images/avatars/antonellaCravero.png" alt="" class="podcast-picture"></div><i class="fab fa-whatsapp"></i>  Antonella Cravero </h5>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
								Antonella Cravero is a certified translator and interpreter, she also gives English lessons. She's worked and traveled through Europe in the past, which has broadened her vision of the world.

								She restarted the nomad life around the start of 2019, and has since lived in Costa Rica, and Mexico. She is currently enjoying the wonders of Playa del Carmen.

							</div>
								<div><audio controls>
									<source src="./resources/antonellaCravero07162019-w.wav" type="audio/wav">
								Your browser does not support the audio element.
								</audio>
								</div>
						</div>

						<div class="podcastcontainer hidden hiddenpodcast jul2019" id="sans">
							<div class="center">
							<h5 class="podcastinterview">
							<div ><img src="./images/avatars/juanpabloSans.png" alt="" class="podcast-picture"></div>
							 <i class="fab fa-whatsapp"></i>  Juan Pablo Sans </h5>
						 </div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
								Juan Pablo Sans is a digital nomad translator. Originally from Venezuela, he is now  based in Europe. Currently he is working and living in Seville, Spain, and sometimes commutes to Cambridge, UK for business. He enjoys the freedom of doing what he wants whenever he wants. He also helps others if they need help venturing into the expat life.
							</div>
								<div><audio controls>
									<source src="./resources/juanPabloSans07182019-w.wav" type="audio/wav">
								Your browser does not support the audio element.
								</audio>
								</div>
						</div>


						<div class="podcastcontainer hidden hiddenpodcast jul2019" id="ortiz">
							<div class="center">
							<h5 class="podcastinterview">
							<div ><img src="./images/avatars/matiasOrtiz.png" alt="" class="podcast-picture"></div>
							 <i class="fab fa-whatsapp"></i>  Mat&iacute;as Ort&iacute;z </h5>
						 </div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
								Mat&iacute;as Ort&iacute;z is now a digital nomad and founder of Letras N&oacute;madas, a program helping out translators get out of their living room shell. After more than 10 years of corporate life in a multinational company, he decided to live the digital nomad life, doing some slow travelling, he is currently house-sitting in the vecinity of Lake Chapala in Mexico.
							</div>
								<div><audio controls>
									<source src="./resources/matiasOrtiz07222019.wav" type="audio/wav">
								Your browser does not support the audio element.
								</audio>
								</div>
						</div>

						<div class="podcastcontainer hidden hiddenpodcast jul2019" id="badagnani">
							<div class="center">
							<h5 class="podcastinterview">
							<div ><img src="./images/avatars/fredBadagnani.png" alt="" class="podcast-picture"></div>
							<i class="fas fa-microphone"></i>   Fred Badagnani </h5>
						 </div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
								Fred Badagnani is an American expat, currently living in Argentina. He owns a company providing airport executive transport services. He's been to 49 of the 50 states, missing only Hawaii. Moving away from Argentina if the situation changes is not out of the question for Fred.
							</div>
								<div><audio controls>
									<source src="./resources/fredBadagnani07252019.wav" type="audio/wav">
								Your browser does not support the audio element.
								</audio>
								</div>
						</div>

						<div class="podcastcontainer hidden hiddenpodcast jul2019" id="smith">
							<div class="center">
							<h5 class="podcastinterview"><div ><img src="./images/avatars/colinSmith.png" alt="" class="podcast-picture"></div>
							<i class="fab fa-whatsapp"></i>  Colin Smith </h5>
						 </div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
								Colin Smith is an American expat, currently living in Argentina. He moved to Buenos Aires with his family (wife and 4 children) and he shares with us the intricacies of life abroad, and how events untangled in his life after the move.
							</div>
								<div><audio controls>
									<source src="./resources/colinSmith07302019.wav" type="audio/wav">
								Your browser does not support the audio element.
								</audio>
								</div>
						</div>


						<div class="podcastcontainer hidden hiddenpodcast aug2019" id="trosce">
							<div class="center">
							<h5 class="podcastinterview">
							<div ><img src="./images/avatars/macarenaTrosce.png" alt="" class="podcast-picture"></div>
							<i class="fab fa-whatsapp"></i>  Macarena Trosc&eacute; </h5>
						 </div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
								Macarena Trosc&eacute; is an translator, from Rosario, Argentina. She tells us in this interview how she wound up choosing her field of specialization, and how much she loves it. This work has allowed her to be a digital nomad, living in Europe and United States. Listen to her great positive insight.
							</div>
								<div><audio controls>
									<source src="./resources/macarenaTrosce08022019.wav" type="audio/wav">
								Your browser does not support the audio element.
								</audio>
								</div>
						</div>


						<div class="podcastcontainer hidden hiddenpodcast aug2019" id="sequera">
							<div class="center">
							<h5 class="podcastinterview">
							<div ><img src="./images/avatars/egildeSequera.png" alt="" class="podcast-picture"></div>
							<i class="fab fa-whatsapp"></i>  Egilde Sequera </h5>
						 </div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center podcastinfo">
								Egilde Sequera is a lawyer from Venezuela who had to emigrate to Spain due to the situation in her country. She tells us about her experience moving with her husband and four children to start anew.
							</div>
								<div><audio controls>
									<source src="./resources/egildeSequera08052019.wav" type="audio/wav">
								Your browser does not support the audio element.
								</audio>
								</div>
						</div>
						
						<div class="podcastcontainer hidden hiddenpodcast oct2021" id="lprada">
								<h5 class="podcastinterview">
								<div ><img src="./images/avatars/leoprada.png" alt="" class="podcast-picture"></div>
								<i class="fas fa-headphones-alt"></i> Leo Prada 
								</h5>
								<p class="podcastinfo">
									Leo Prada is from Campana, Argentina, he's lived half of his life as a nomad. Last year he was able to live the digital nomad life for a month in Croatia.

								He is a translator for over 20 years and a software project manager now. Both activities are not location related and give him the flexibility to work remote whenever needed.

								He's conducted a series of interviews with fellow adventurers.

								</p>
									<div><audio id="lpradaaudio" controls>
									  <source src="./resources/ExpatMamaThePodcastSeriesLeoPrada.m4a" type="audio/wav">
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