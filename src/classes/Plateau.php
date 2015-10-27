<?php
session_start();

	require 'Pion.php';

	class Plateau {
		const NB_COLONNES = 5;
		const NB_LIGNES = 5;

		var $cases;
		var $turn;
		var $j1;
		var $j2;

		function __construct($joueur1, $joueur2){
			$this -> cases = array();
			$this -> j1 = $joueur1;
			$this -> j2 = $joueur2;
			$this -> turn = $this -> j1;
		}

		public function init() {

			for ($x = 0; $x < 5; $x++)
			{
				$this -> cases[$x] = array();
				for ($y = 0; $y < 5; $y++)
				{
					if ($x == 0)
					{
						cases[$x][$y] = new Pion($this -> j1);
					} else if ($x == 1)
					{
						if ($y == 0 || $y == 4)
						{
							cases[$x][$y] = new Pion($this -> j1);
						} else
						{
							cases[$x][$y] = new Pion(new Joueur("null"));
						}
					} else if ($x == 3)
					{
						if($y == 0 || $y == 4)
						{
							cases[$x][$y] = new Pion($this -> j2);
						} else
						{
							cases[$x][$y] = new Pion(new Joueur("null"));
						}
					} else if ($x == 4)
					{
						cases[$x][$y] = new Pion($this -> j2);
					}
				}
			}
		}



		public function affichage() {
			echo '<table style="border: 1px solid black;"><tr>';
			for ($x = 0; $x < 5; $x++) {

				for ($y = 0; $y < 5; $y++) {


				}

			}

		}


	}
?>
