<?php
	class Case {
		private $pion;
		
		function __construct(){
			$this -> pion = 0;
		}
		
		public function setCase($valeur){
			$this -> pion = $valeur;
		}
		
		public function setEmpty(){
			$this -> pion = 0;
		}
	}
?>