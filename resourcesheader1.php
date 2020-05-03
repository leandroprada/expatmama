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
				<li class="active"><a href="index.html">HOME</a></li>
				<li ><a href="#podcast-section" onclick="home();">PODCASTS</a></li>
				<li><a href="#blogk-section" onclick="home();">BLOG</a></li>
				<?php if (($_SESSION['login']) == 'validated') {
					?>		<li><a href="./login/logout.php">Logout</a></li>
												
					<?php }else{ ?>
				
					<li><a href="./login/login.php" class="genric-btn danger circle">Login<span class="lnr lnr-arrow-right"></span></a></li>
			    <?php } ?>
					
				
			 </ul>
		   </div><!-- /.navbar-collapse -->
		</nav> <!-- /.theme-feature-menu -->
	</div>
</header>