<?php
	session_start();

	include "classes/Plateau.php";
	include "classes/Joueur.php";

	if (isset($_GET['reset']) && $_GET['reset'] == 1)
	{
	    session_destroy();
			if(isset($_GET['nomj1']) && isset($_GET['nomj2'])) {
	    	header('Location: Application.php?nomj1='.$_GET['nomj1'].'&nomj2='.$_GET['nomj2']);
			} else if (isset($_GET['nomj1'])) {
				header('Location: Application.php?nomj1='.$_GET['nomj1'].'&nomj2=joueur2');
			} else if (isset($_GET['nomj2'])) {
				header('Location: Application.php?nomj1=joueur1&nomj2='.$_GET['nomj2']);
			}
	}
?>
<html lang="fr">
	<head>
			<meta charset="utf-8" />
			<title>Entro-php</title>
			<link href="style/style.css" type="text/css" rel="stylesheet" media="all" />
	</head>
	<body>

		<?php
			//Création ou récupération des joueurs
			if(!isset($_SESSION["j1"])) {
				if(isset($_GET["nomj1"])) {
					$j1 = new Joueur($_GET["nomj1"], "j1");
					$_SESSION["j1"] = $j1;
				} else {
					$j1 = new Joueur("joueur 1", "j1");
					$_SESSION["j1"] = $j1;
				}
			} else {
				$j1 = $_SESSION["j1"];
			}

			if(!isset($_SESSION["j2"])) {
				if(isset($_GET["nomj2"])) {
					$j2 = new Joueur($_GET["nomj2"], "j2");
					$_SESSION["j2"] = $j2;
				} else {
					$j2 = new Joueur("joueur 2", "j2");
					$_SESSION["j2"] = $j2;
				}
			} else {
				$j2 = $_SESSION["j2"];
			}


			//Si le plateau n'est pas crée, le créer
			if(!isset($_SESSION["plateau"])) {
				$plateau = new Plateau($j1, $j2);
				$plateau -> init();

			} else {
				$plateau = unserialize($_SESSION["plateau"]);
			}


			if(isset($_GET["action"])) {
				switch($_GET["action"]) {
					case 'move_origin' :
						if(isset($_GET['x']) && isset($_GET['y'])) {
							$origin = [$_GET['x'], $_GET['y']];
							$_SESSION['origin'] = serialize($origin);
						}
						break;
					case 'move_target' :
						if(isset($_GET['x']) && isset($_GET['y'])) {
							$origin = unserialize($_SESSION['origin']);

							$plateau -> move($origin[0], $origin[1], $_GET['x'], $_GET['y']);

							unset($_SESSION['origin']);
						}
						break;
					case 'invalid_joueur' :
							echo 'Ce n\'est pas votre pion';
						break;
					case 'invalid_mouvement' :
							echo 'Vous ne pouvez pas déplacer votre pion ici';
						break;
					default:
						break;
				}


			}






			$plateau -> affichage();
			$_SESSION["plateau"] = serialize($plateau);



			?>
		</body>
</html>
