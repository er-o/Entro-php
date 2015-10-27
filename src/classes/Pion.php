<?php
	class Pion {
		var $isole;
		var $joueur;
		var $id;


		function __construct($joueur, $id){
			$this -> isole = False;
			$this -> joueur = $joueur;
			$this -> id = $id;
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
