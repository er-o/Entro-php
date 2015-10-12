<?php

	class Square {
		var $value;
		
		function __construct(){
		}
		
		public function setSquare($value){
			$this -> value = $value;
		}
		
		public function setEmpty(){
			$this -> value = null;
		}

		public function toString(){
			switch ($this -> value -> getName()) {
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