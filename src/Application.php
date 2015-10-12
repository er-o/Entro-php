<?php
	require "Game.php";
	require "Joueur.php";
	
	$j1 = new Joueur('j1');
	$j2 = new Joueur('j2');

	$partie = new Game($j1, $j2);

	$plateau = new Plateau();
	$plateau -> reset();
	$plateau -> affichage();
?>