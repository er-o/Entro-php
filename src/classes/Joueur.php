<?php
	/**
	* Class permettant d'avoir un Joueur, et de l'identifier
	*
	*/
	class Joueur {
		var $name;
		var $id;

		/**
		*	Fonction construisant la class
		* @param string $name Le nom du Joueur
		* @param string $id l'identifiant, j1 ou j2, afin de différencier les joueurs
		*/
		function __construct($name, $id){
			$this -> name = $name;
			$this -> id = $id;
		}

		/**
		* Fonction récupérant le nom du joueur
		* @return string Le nom du joueur
		*/
		public function toString(){
			return $this -> name;
		}

		/**
		* Fonction récupérant l'identifiant du joueur
		* @return string La valeur j1 ou j2, permettant de différencier les joueurs
		*/
		public function getId() {
			return $this -> id;
		}

	}
?>
