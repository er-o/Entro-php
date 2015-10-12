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

		public function reset(){
			for($k = 0; $k < self::NB_COLONNES;$k++){
				$this -> cases[0][$k] -> setSquare(1);
			}
			for($k = 0; $k < self::NB_COLONNES;$k++){
				$this -> cases[4][$k] -> setSquare(2);
			}
			$this -> cases[1][0] -> setSquare(1);
			$this -> cases[1][4] -> setSquare(1);
			$this -> cases[3][0] -> setSquare(2);
			$this -> cases[3][4] -> setSquare(2);
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