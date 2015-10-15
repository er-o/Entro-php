<?php
	require "Plateau.php";
	require "Joueur.php";

	class Game {
		var $joueur1;
		var $joueur2;
		
		var $plateau;
		
		function __construct($joueur1, $joueur2, $r_plateau){
			$this -> joueur1 = $joueur1;
			$this -> joueur2 = $joueur2;

			$this -> plateau = $r_plateau;
		}


		public function getPlateau() {
			return $plateau;
		}




	}

?>