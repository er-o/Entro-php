<?php
	require 'Pion.php';
	
	class Joueur {
		var $name;
		var $pions;

		function __construct($name){
			$this -> pions = array();
			$this -> name = $name;
			$this -> fill();
		}
		
		public function fill(){
			for($i = 0; $i < 7; $i++){
				$pions[$i] = new Pion();
			}
		}

		public function toString(){
			return $this -> name;
		}
	}
?>