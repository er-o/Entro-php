<?php
	require "Game.php";
	require "Joueur.php";
	
	$j1 = new Joueur('j1');
	$j2 = new Joueur('j2');
	echo $j1 -> toString();
	echo "<br />";
	$partie = new Game($j1, $j2);
	echo "<br /> test";
?>