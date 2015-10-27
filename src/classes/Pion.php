<?php
	class Pion {
		var $isole;
		var $joueur;


		function __construct($joueur){
			$this -> isole = False;
			$this -> joueur = $joueur;
		}

		public function toString(){
			echo "nom joueur : ".$this -> joueur -> toString()."\t isole : ".$this -> estIsole();
		}

		public function estIsole(){
			if(!$this -> isole){
				return "false";
			}
			else{
				return "true";
			}
		}

		public function getName(){
			return $this -> joueur -> toString();
		}
	}
?>