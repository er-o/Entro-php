<?php
	class Square {
		var $pion;
		
		function __construct(){
			$this -> pion = 0;
		}
		
		public function setCase($pion){
			$this -> pion = $pion;
		}
		
		public function setEmpty(){
			$this -> pion = null;
		}

		public function toString(){
			return $this -> pion;
		}
	}
?>