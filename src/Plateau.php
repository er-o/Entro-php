<?php
	require 'Square.php';

	class Plateau {
		const NB_COLONNES = 5;
		const NB_LIGNES = 5;
		
		var $cases;

		function __construct(){
			$this -> cases = array();
			$this -> fill(); //on remplit le plateau
		}
		
		//creation du plateau
		public function fill(){
			for($i = 0; $i < self::NB_LIGNES;$i++){
				for($k = 0; $k < self::NB_COLONNES;$k++){
					$this -> cases[$i][$k] = new Square();
				}
			}
		}

		public function reset($j1, $j2){
			for($k = 0; $k < self::NB_COLONNES;$k++){
				$this -> cases[0][$k] -> setSquare(new Pion($j1));
			}
			for($k = 0; $k < self::NB_COLONNES;$k++){
				$this -> cases[4][$k] -> setSquare(new Pion($j2));
			}
			$this -> cases[1][0] -> setSquare(new Pion($j1));
			$this -> cases[1][4] -> setSquare(new Pion($j1));
			$this -> cases[3][0] -> setSquare(new Pion($j2));
			$this -> cases[3][4] -> setSquare(new Pion($j2));
		}

		public function affichage(){
			for($i = 0; $i < self::NB_LIGNES;$i++){
				for($k = 0; $k < self::NB_COLONNES;$k++){
					echo $this -> cases[$i][$k] -> toString()." ";
				}
				echo "<br />";
			}
		}
	}
?>