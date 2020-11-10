<!DOCTYPE html>
<html lang='fr'>
<head>
		<meta charset="UTF-8">
		<title>Mon site personnel</title>
		<link rel="stylesheet" href="mon-site.css">	
		<link rel="stylesheet" href="assets/css/mon-site.css" >
</head>
	<body>
		<header>
			
			<ul class="menu">
				<li class="nom"><h1>Mathis Pépin</h1></li>
				<li><a href="#A-propos">A propos</a></li>
				<li><a href="#Competences">Compétences</a></li>
				<li><a href="#Exprerience">Exprérience</a></li>
				<li><a href="#Formation">Formation</a></li>
				<li><a href="#Contact">Contact</a></li>
			</ul>
		</header>
	<h2>Bienvenue sur mon site<h2>
	<h4>Mon Slogan est "Réfléchissez avant de cliquer"
			<ul class="réseaux">
				<li><h2>Mes réseaux sociaux</h2></li><br>
				<li> <a href="mailto: mathispepin14170@gmail.com"><i class="far fa-envelope fa-2x"></i>Mon adresse mail</a></li><br>
				<li> <a href="https://www.instagram.com/pepin.mathis/">Mon compte instagram</a></li>
			
<?php
include "a-propos.php";
include "competence.php";
include "formation.php";
include "contact.php";
include "experience.php";
?>
