<?php

	class Joueur {
		var $name;

		function __construct($name){
			$this -> name = $name;
		}

		public function toString(){
			return $this -> name;
		}
	}
?>
