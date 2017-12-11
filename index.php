<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=thomas-duprez_iron_man;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
?>
<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Iron Man 3</title>
	</head>
		
	<body>
		<main>
			<h3>Liste des films</h3>
			<ul>
				<li><a href="#"><img class="Image_du_film" alt=<?php $reponse = $bdd->query('SELECT * FROM picture WHERE id = 5'); $donnee = $reponse->fetch(); echo $donnee['legend']; ?> src=<?php echo $donnee['path']; ?>></a>
				<li><a href="#"><img class="Image_du_film" alt=<?php $reponse = $bdd->query('SELECT * FROM picture WHERE id = 4'); $donnee = $reponse->fetch(); echo $donnee['legend']; ?> src=<?php echo $donnee['path']; ?>></a>
			</ul>

			<h3>Liste des réalisateur</h3>
			<ul>
				<li><a href="#"><img class="Image_du_film" alt=<?php $reponse = $bdd->query('SELECT * FROM picture WHERE id = 9'); $donnee = $reponse->fetch(); echo $donnee['legend']; ?> src=<?php echo $donnee['path']; ?>></a>
				<li><a href="#"><img class="Image_du_film" alt=<?php $reponse = $bdd->query('SELECT * FROM picture WHERE id = 10'); $donnee = $reponse->fetch(); echo $donnee['legend']; ?> src=<?php echo $donnee['path']; ?>></a>
			</ul>

			<h3>Liste des acteurs</h3>
			<ul>
				<li><a href="#"><img class="Image_du_film" alt=<?php $reponse = $bdd->query('SELECT * FROM picture WHERE id = 1'); $donnee = $reponse->fetch(); echo $donnee['legend']; ?> src=<?php echo $donnee['path']; ?>></a>
				<li><a href="#"><img class="Image_du_film" alt=<?php $reponse = $bdd->query('SELECT * FROM picture WHERE id = 2'); $donnee = $reponse->fetch(); echo $donnee['legend']; ?> src=<?php echo $donnee['path']; ?>></a>
				<li><a href="#"><img class="Image_du_film" alt=<?php $reponse = $bdd->query('SELECT * FROM picture WHERE id = 3'); $donnee = $reponse->fetch(); echo $donnee['legend']; ?> src=<?php echo $donnee['path']; ?>></a>
				<li><a href="#"><img class="Image_du_film" alt=<?php $reponse = $bdd->query('SELECT * FROM picture WHERE id = 6'); $donnee = $reponse->fetch(); echo $donnee['legend']; ?> src=<?php echo $donnee['path']; ?>></a>
				<li><a href="#"><img class="Image_du_film" alt=<?php $reponse = $bdd->query('SELECT * FROM picture WHERE id = 7'); $donnee = $reponse->fetch(); echo $donnee['legend']; ?> src=<?php echo $donnee['path']; ?>></a>
				<li><a href="#"><img class="Image_du_film" alt=<?php $reponse = $bdd->query('SELECT * FROM picture WHERE id = 8'); $donnee = $reponse->fetch(); echo $donnee['legend']; ?> src=<?php echo $donnee['path']; ?>></a>
			</ul>
		</main>
	</body>
</html>