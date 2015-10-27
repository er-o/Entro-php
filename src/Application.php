<?php
	session_start();

	include classes/Plateau.php;

	if (isset($_GET['reset']) && $_GET['reset'] == 1)
	{
	    session_destroy();
	    header('Location: index.php');
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
					$j1 = new Joueur($_GET["nomj1"]);
					$_SESSION["j1"] = $j1;
				} else {
					$j1 = new Joueur("joueur 1");
					$_SESSION["j1"] = $j1;
				}
			} else {
				$j1 = $_SESSION["j1"];
			}

			if(!isset($_SESSION["j2"])) {
				if(isset($_GET["nomj2"])) {
					$j1 = new Joueur($_GET["nomj2"]);
					$_SESSION["j2"] = $j2;
				} else {
					$j1 = new Joueur("joueur 2");
					$_SESSION["j2"] = $j2;
				}
			} else {
				$j1 = $_SESSION["j2"];
			}


			//Si le plateau n'est pas crée, le créer
			if(!isset($_SESSION["plateau"])) {
				$plateau = new Plateau();
				$plateau -> reset($_SESSION["j1"], $_SESSION["j2"]);

			} else {
				$plateau = unserialize($_SESSION["plateau"]);
			}



			$partie = new Game($_SESSION["j1"], $_SESSION["j2"], $plateau);



			$_SESSION["plateau"] = $plateau;

?>
