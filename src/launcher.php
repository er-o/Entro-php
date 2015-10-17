<?php
	session_start();


	$_SESSION["plateau"] = null;


	
?>

<html>
	<head>
		<title>Jeu de l'Entropie</title>
		<meta charset="utf-8" />
	</head>
	
	<body>
	
		<h1>Jeu de l'entropie</h1>
	
		<p>Bienvenue sur le jeu de l'entropie. Le but est simple : devenir bloqué le plus rapidement possible.</p>

		<form action="init.php" method="GET">
			<label>Nom du Joueur 1</label><input type="text" name="nom_j1" /><br/>
			<label>Nom du Joueur 2</label><input type="text" name="nom_j2" /><br/>
			<button onclick="lanceur">Jouer maintenant</button>
		</form>

	</body>
</html>