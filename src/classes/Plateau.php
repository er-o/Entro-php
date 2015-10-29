<?php
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

		public function getTurn() {
			return $this -> turn;
		}

		public function init() {

			for ($x = 0; $x < 5; $x++)
			{
				$this -> cases[$x] = array();
				for ($y = 0; $y < 5; $y++)
				{
					if ($x == 0)
					{
						$this -> cases[$x][$y] = new Pion($this -> j1, "j1");
					} else if ($x == 1)
					{
						if ($y == 0 || $y == 4)
						{
							$this -> cases[$x][$y] = new Pion($this -> j1, "j1");
						} else
						{
							$this -> cases[$x][$y] = new Pion(new Joueur("null"), "null");
						}
					} else if ($x == 3)
					{
						if($y == 0 || $y == 4)
						{
							$this -> cases[$x][$y] = new Pion($this -> j2, "j2");
						} else
						{
							$this -> cases[$x][$y] = new Pion(new Joueur("null"), "null");
						}
					} else if ($x == 4)
					{
						$this -> cases[$x][$y] = new Pion($this -> j2, "j2");
					} else {
						$this -> cases[$x][$y] = new Pion(new Joueur("null"), "null");
					}
				}
			}
		}



		public function affichage() {
			echo '<table style="border: 1px solid black;">';
			for ($x = 0; $x < 5; $x++) {
				echo '<tr>';
				for ($y = 0; $y < 5; $y++) {
					echo '<td>';
					if (isset($_SESSION["origin"])) {
						echo '<a href="Application.php?action=move_target&x='.$x.'&y='.$y.'" id="'.$this -> cases[$x][$y] -> getId().'">';
					} else {
						echo '<a href="Application.php?action=move_origin&x='.$x.'&y='.$y.'" id="'.$this -> cases[$x][$y] -> getId().'">';
					}

					echo '</a>';
					echo '</td>';
				}

				echo '</tr>';
			}
			echo '</table>';
		}


	}
?>
