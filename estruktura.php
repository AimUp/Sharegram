<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!--Titulua estrukturari pasatuko dio HTML fitxategi bakoitzak-->
		<title><?php echo($title); ?></title>

		<!--Metadata-->
		<meta http-equiv="content-type" content="text/html" />
		<meta charset="UTF-8">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="Hector Vadillo & Aimar Ugarte">

		<!--Favicon-ak ezarri (nabigatzaileko irudia) tamaina bakoitza -->
		<link rel="apple-touch-icon" sizes="57x57" href="./favicon.ico/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="./favicon.ico/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="./favicon.ico/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="./favicon.ico/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="./favicon.ico/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="./favicon.ico/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="./favicon.ico/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="./favicon.ico/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="./favicon.ico/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="./favicon.ico/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="./favfavicon.ico/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="./favicon.ico/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="96x96" href="./favicon.ico/favicon-96x96.png">
		<link rel="icon" type="image/png" href="./favicon.ico/favicon.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<!--Estiloak pasatu-->
		<link rel="stylesheet" href="CSS/estiloEstruktura.css">
		<link rel="stylesheet" href="CSS/estiloLog.css">
		<link rel="stylesheet" href="CSS/estiloArgazkiak.css">
		<link rel="stylesheet" href="CSS/profilekoArgazkiak.css">
		<link rel="stylesheet" href="CSS/erabiltzailea.css">
				
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="./JAVASCRIPT/scriptak.js"/></script>
		<script type="text/javascript" src="./JAVASCRIPT/feedLoad.js"></script>
		<script type="text/javascript" src="./JAVASCRIPT/scriptCheck.js"></script>
		<script type="text/javascript" src="./JAVASCRIPT/erabiltzaileak.js"></script>
	</head>
	<body>
		<!--Goibururako div-a-->
		<div class="goiburua">
			<!--Izenburua-->
			<div class="izenburua">
				<a href="index.php" class="titulua" ><h1>Sharegram</h1></a>
				<h4 class="azpititulua">Ongi etorri Sharegramera, igo zure argazkiak eta besteenak ...</h4>
			</div>
			<!--Sesioaren informazioa-->
			<div class="logInf">
				<?php
					//Sesioa hasi eta konprobatu sesiorik dagoen, ez badago logeatzeko linkak jarri
					if(!isset($_SESSION)) session_start(); 
					if(isset($_SESSION['erabiltzailea'])){
						echo "	<div class='dropdown'>
									<img src='data:Argazkia/jpeg;base64,".$_SESSION['irudia']."' ></img>
									<div class='dropdown-content'>
									    <a href='profila.php'>Profila</a>
									    <a href='ezarpenak.php'>Ezarpenak</a>
									    <a href='logOut.php' class='link'>Log out</a>
									</div>
								</div>";
					}
					else{
						echo "<a href='index.php' class='link'>Log in</a></br>";
						echo "<a href='signUp.php' class='link'>Sign up</a>";
					}
				?>
			</div>
		</div>
		<div class="edukia">
