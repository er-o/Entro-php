<?php
	require 'Square.php';

	class Plateau {
		const NB_COLONNES = 5;
		const NB_LIGNES = 5;
		
		var $cases;

		function __construct(){
			$this -> cases = array();
			echo "lancement du remplissage";
			$this -> fill(); //on remplit le plateau
		}
		
		//creation du plateau
		public function fill(){
			for($i = 0; $i < self::NB_LIGNES;$i++){
				for($k = 0; $k < self::NB_COLONNES;$k++){
					$this -> cases[$i][$k] = new Square();
				}
			}
			echo "<br /> fin du remplissage";
		}
	}
?>