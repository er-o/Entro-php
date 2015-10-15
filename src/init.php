<?php
	session_start();

	require "Joueur.php";

	if(isset($_GET["nom_j1"])) {
		$_SESSION["j1"] = new Joueur($_GET["nom_j1"]);
	} else {
		$_SESSION["j1"] = new Joueur("j1");
	}

	if(isset($_GET["nom_j2"])) {
		$_SESSION["j2"] = new Joueur($_GET["nom_j2"]);
	} else {
		$_SESSION["j2"] = new Joueur("j2");
	}



	header('Location: Application.php');

?>