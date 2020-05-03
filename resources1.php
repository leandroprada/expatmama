<?php
 session_start();
$userlogged = $_SESSION['name'];
if ($userlogged == null)  {
				header("Location: ./login/login.php");
					};
?>

<!DOCTYPE html>
<html lang="en">
	<head>
			<meta charset="UTF-8">
			<!-- For IE -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">

			<!-- For Resposive Device -->
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

			<title>Expat Mama - Special Content</title>

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
			Resources Header
		==============================================
		-->
		<?php include "resourcesheader1.php";?>	
		<!-- /.resources-header -->
		
		<!--
		=====================================================
			Resources Slider
		=====================================================
		-->
		<?php include "resourcesslider1.php";?>	
		<!-- /.resources-slider -->
		
		<!--
		=====================================================
			Resources Middle Banner
		=====================================================
		-->
		<?php include "resourcesmiddlebanner1.php";?>	
		<!-- /.resources-middle-banner -->
		
		<!--
		=====================================================
			Footer
		=====================================================
		-->
		
		<?php include "resourcesfooter1.php";?>	
		<!-- /.resources-footer -->
		
		
		
	</div>
</body>		