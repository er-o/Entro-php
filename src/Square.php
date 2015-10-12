<?php

	class Square {
		var $value;
		
		function __construct(){
			$this -> value = 0;
		}
		
		public function setSquare($value){
			$this -> value = $value;
		}
		
		public function setEmpty(){
			$this -> value = 0;
		}

		public function toString(){
			switch ($this -> value) {
				case 1:
					return " x &nbsp;";
					break;
				case 2:
					return " o &nbsp;";
					break;
				default:
					return " - &nbsp;&nbsp;";
					break;
			}
		}
	}
?>