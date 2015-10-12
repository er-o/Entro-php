<?php

	class Square {
		var $pion;
		
		function __construct($pion){
			$this -> pion = $pion;
		}
		
		public function setSquare($pion){
			$this -> pion = $pion;
		}
		
		public function setEmpty(){
			$this -> pion = null;
		}

		public function toString(){
			switch ($this -> pion -> getName()) {
				case "j1":
					return " x &nbsp;";
					break;
				case "j2":
					return " o &nbsp;";
					break;
				default:
					return " - &nbsp;&nbsp;";
					break;
			}
		}
	}
?>