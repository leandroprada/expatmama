<?php
 session_start();

?>

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
					       	<li class="active"><a href="#home">HOME</a></li>
							<li><a href="#about-us">THE COURSE</a></li>
							<li><a href="#expat-section">EXPAT</a></li>
							<li><a href="#blog-section">ABOUT</a></li>
							<li class="menu-has-children resouce-menu"><a href="resources.html">RESOURCES&nbsp;&nbsp;&nbsp; </a></li> 
							<!-- <li class="resource-child"><a href="./resources.html#podcast-section">PODCASTS</a></li>
							<li class="resource-child"><a href="./resources.html#whatsapp-section">WHATSAPP</a></li>
							<li class="resource-child"><a href="./resources.html#blogk-section">BLOG</a></li> -->
							<li><a href="#contact-section">CONTACT</a></li>
							<?php if (($_SESSION['login']) == 'validated') {
					?>		<li><a href="./login/logout.php">Logout</a></li>
												
					<?php }else{ ?>
				
					<li><a href="./login/login.php" class="genric-btn danger circle">Login<span class="lnr lnr-arrow-right"></span></a></li>
			    <?php } ?>
					
					</ul>
					   </div><!-- /.navbar-collapse -->
					</nav> <!-- /.theme-feature-menu -->

				</div>
			</header> <!-- /.theme-main-header -->



  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
			      </div>
			      
				  <?php if (($_SESSION['login']) == 'validated') {
?>
					   
				<nav id="nav-menu-container">	
				<ul class="nav-menu ">
				      <li><a href="index.php">Inicio</a></li>
					  <li><a href="about.html">El curso</a></li>
			          <li><a href="services.html">Servicios</a></li>
			          <li class="menu-has-children"><a href="">Lecciones</a>
							<ul>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							</ul>
			          </li>
			          <li class="menu-has-children"><a href="">Recursos</a>
			            <ul>
							<li><a href="abeceda.php">Abecedario</a></li>
							<li><a href="padezi.php">Declinaciones</a></li>
							<li><a href="elements.php">Diccionario</a></li>
							<li><a href="maps.php">Im&aacute;genes</a></li>
							<li><a href="dobrodosli2.php">Dobro Dosli</a></li>
							  <li class="menu-has-children"><a href="">Links </a>
								<ul>
								  <li><a href="#">Item One</a></li>
								  <li><a href="#">Item Two</a></li>
								</ul>
							  </li>
			            </ul>
			          </li>
			          <li><a href="contact.html">Contact</a></li>
			    </ul>
				<span class="button-group-area mt-10">
						<a href="./login/logout.php" class="genric-btn primary circle">Salir</a>
				</span>
				 </nav><!-- #nav-menu-container -->
				   
<?php }else{ ?>
				<nav id="nav-menu-container button-area">
				<span class="button-group-area mt-40">
						<a href="./login/login.php" class="genric-btn danger circle">Ingreso<span class="lnr lnr-arrow-right"></span></a>
			    </span>	
				</nav><!-- #nav-menu-container -->
<?php } ?>
			      
			     
		    	</div>
		    </div>
		  </header><!-- #header -->
