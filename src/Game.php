<?php
	require "Plateau.php";

	class Game {
		var $joueur1;
		var $joueur2;
		
		var $plateau;
		
		function __construct($joueur1, $joueur2){
			$this -> joueur1 = $joueur1;
			$this -> joueur2 = $joueur2;
			echo "joueur ajoute <br />";
			echo "creation du plateau <br />";
			$this -> plateau = new Plateau();
			echo "<br /> fin creation du plateau ";
		}
	}

?>