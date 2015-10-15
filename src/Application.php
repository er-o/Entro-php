<?php

	session_start();

	require "Game.php";
	
	$j1 = new Joueur('j1');
	$j2 = new Joueur('j2');

	$partie = new Game($j1, $j2);

	if($_SESSION["plateau"] == null) {
		$plateau = new Plateau();
		$plateau -> reset($j1, $j2);
	
	} else {

		$plateau = $_SESSION["plateau"];
	}
	$plateau -> affichage();


?>