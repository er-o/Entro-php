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
							$this -> cases[$x][$y] = new Pion(new Joueur("null", "null"), "null");
						}
					} else if ($x == 3)
					{
						if($y == 0 || $y == 4)
						{
							$this -> cases[$x][$y] = new Pion($this -> j2, "j2");
						} else
						{
							$this -> cases[$x][$y] = new Pion(new Joueur("null", "null"), "null");
						}
					} else if ($x == 4)
					{
						$this -> cases[$x][$y] = new Pion($this -> j2, "j2");
					} else {
						$this -> cases[$x][$y] = new Pion(new Joueur("null", "null"), "null");
					}
				}
			}
		}


		//Fonction affichant, mais servant aussi à gérer les coups possibles
		public function affichage() {
			echo '<table style="border: 1px solid black;">';
			for ($x = 0; $x < 5; $x++) {
				echo '<tr>';
				for ($y = 0; $y < 5; $y++) {
					echo '<td>';
					if (isset($_SESSION["origin"])) {
						//Mouvement vers la prochaine case
						$origin = unserialize($_SESSION["origin"]);
						$target = [$x, $y];
						//IMPORTANT : FAIRE LA FONCTION MOUVEMENTSPOSSIBLES (code bloqué en attendant)
						if(in_array($target, $this -> mouvementsPossibles($origin[0], $origin[1]))) {
							echo '<a href="Application.php?action=move_target&x='.$x.'&y='.$y.'" class="'.$this -> cases[$x][$y] -> getId().'">';
						} else {
							echo '<a href="Application.php?action=invalid_mouvement&x='.$x.'&y='.$y.'" class="'.$this -> cases[$x][$y] -> getId().'">';
						}

					} else {
						//Choix du pion à déplacer (en fonction du tour du joueur)
						if ($this -> getTurn() ->getId() == $this ->cases[$x][$y] ->getId()) {
							//IMPORTANT : FAIRE LA FONCTION MOUVEMENTPOSSIBLE (code bloqué en attendant)
							if($this -> mouvementPossible($x, $y)) {
								//Pion appartenant au joueur, et bougeable
								echo '<a href="Application.php?action=move_origin&x='.$x.'&y='.$y.'" class="'.$this -> cases[$x][$y] -> getId().'">';
							}	else {
								//Pion appartenant au joueur mais isolé / imbougeable
								echo '<a href="Application.php?action=invalid_origin&x='.$x.'&y='.$y.'" class="'.$this -> cases[$x][$y] -> getId().'">';
							}
						} else {
							//Pion n'appartenant pas au joueur
							echo '<a href="Application.php?action=invalid_joueur&x='.$x.'&y='.$y.'" class="'.$this -> cases[$x][$y] -> getId().'">';
						}
					}

					echo '</a>';
					echo '</td>';
				}

				echo '</tr>';
			}
			echo '</table>';
		}



		//A FAIRE
		//param : coord x et y d'un pion
		//return  : true ou false si le mouvement est possible (ie. pas isolé/pion alié proche)
		public function mouvementPossible($x, $y) {
			return false;
		}

		//A FAIRE
		//param : coord x et y d'un pion
		//return : un array avec toutes les positions possibles
		public function mouvementsPossibles($x, $y) {
			return array([-1,-1],[-2,-2]);
		}


	}
?>
