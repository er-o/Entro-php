<?php
	class Pion {
		var $isole;
		var $joueur;
		var $id;
		var $coord;


		function __construct($joueur, $id, $x, $y){
			$this -> isole = False;
			$this -> joueur = $joueur;
			$this -> id = $id;
			$this -> coord = [$x, $y];
		}

		public function toString(){
			echo "nom joueur : ".$this -> joueur -> toString()."\t isole : ".$this -> estIsole();
		}

		public function getJoueur() {
			return $this -> joueur;
		}
		public function getId() {
			return $this -> id;
		}
		public function getCoord() {
			return $this -> coord;
		}
		public function setCoord($x, $y) {
			$this -> coord = [$x, $y];
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
