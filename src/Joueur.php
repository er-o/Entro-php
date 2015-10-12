<?php
	require 'Pion.php';
	
	class Joueur {
		private $pions;

		function __construct(){
			$this -> $pions = array();
			$this -> fill();
		}
		
		public function fill(){
			for($i = 0; $i < 7; $i++){
				$pion = new Pion();
				$pions[$i] = $pion;
			}
		}
	}
?>