<?
/*	include "includes/database_config.php";
	include "includes/database_const.php";
	include "includes/php_functions.php"; */
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mariano Sciacco, Maxel</title>
		<link rel="stylesheet" type="text/css" href="style/stylesheet.css" />
		<link rel="shortcut icon" href="images/favicon.png" />
		<link rel="icon" sizes="192x192" href="images/favicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta charset="UTF-8">
		<meta name="theme-color" content="#539FBA">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	</head>
	<body>
		
		<div id="top"></div>

		<div id="parent-header">

			<div id="top-header">
			Mariano Sciacco, Maxel: just <b><span id="js-morph-top">an italian, a smart, a selfish, a brilliant, an innovative, a crazy</span></b> guy playing with the Web
			</div>

			<header id="header">
				<div class="limiter">
					<div id="navbar-header">
							<div class="url-list">
								<span class="dropdown">
									<a href="#about" class="link-header">About Me <span class="caret-down"></span></a>
									<div class="dropdown-content">
										<a href="index.php#skills">Skillset</a>
										<a href="index.php#edu">Education</a>
										<a href="index.php#portfolio">Portfolio</a>
									</div>
								</span>
								<a href="portfolio.php" class="link-header">Portfolio</a>
							</div>			
					</div>
					<div id="logo-header" class="cursor logo hide" onclick="location.replace('index.php')"></div>					
					<div id="navbar-header">
							<div class="url-list">
								<a href="http://blog.imaxel.net" class="link-header">Blog & News</a>
								<a href="index.php#contacts" class="link-header">Contacts</a>
							</div>				
					</div>

				</div>
			</header>

			<div id="mobile-navbar">
				<div class="url-list">
					<a href="index">Homepage</a>
					<a href="#" onclick="displayId('menu-mobile')">Menù ☰</a>
					<div id="menu-mobile" class="tleft" style="display:none">
						<a href="index.php#about">&raquo About Me</a>
						<a href="index.php#skills">&raquo Skillset</a>
						<a href="index.php#edu">&raquo Education</a>
						<a href="portfolio.php">&raquo Portfolio</a>
						<a href="index.php#contacts">&raquo Contacts</a>
					</div>						
					<a href="http://blog.imaxel.net">Blog and News</a>
				</div>
			</div>
			
		</div>

		<div class="tothetop"><a href="#top"><img src="images/icons/goup.png" name="Torna su"></span></a></div>

		<div id="wrapper">
		