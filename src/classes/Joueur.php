<?php

	class Joueur {
		var $name;
		var $id;

		function __construct($name, $id){
			$this -> name = $name;
			$this -> id = $id
		}

		public function toString(){
			return $this -> name;
		}

		public function getId() {
			return $this -> id;
		}

	}
?>
