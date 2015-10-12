<?php
	require 'Case.php';
	class Plateau {
		private $cases;

		function __construct(){
			$this -> cases = array();
			$this -> fill(); //on remplit le plateau
		}
		
		//creation du plateau
		public function fill(){
			for($i = 0; $i < 5;$i++){
				for($k = 0; $k < 5;$k++){
					$case = new Case();
					$cases[$i][$k] = $case;
				}
			}
		}
	}
?>