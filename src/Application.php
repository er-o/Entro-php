<?php

	session_start();

	require "Game.php";

	$j1 = $_SESSION["j1"];
	$j2 = $_SESSION["j2"];


	if($_SESSION["plateau"] == null) {
		$plateau = new Plateau();
		$plateau -> reset($_SESSION["j1"], $_SESSION["j2"]);

	} else {

		$plateau = $_SESSION["plateau"];
	}

	$partie = new Game($_SESSION["j1"], $_SESSION["j2"], $plateau);

	$plateau -> affichage();


?>
