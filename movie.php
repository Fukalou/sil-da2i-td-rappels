<?php 
	include 'connect.php';
	
	$id = $_GET['id'];
	$reponse_movie = $bdd->query('SELECT * FROM movie WHERE id="'.$id.'"');
	$donnee_movie = $reponse_movie->fetch();
?>
<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<title><?php echo $donnee_movie['title'];?></title>
	</head>
		
	<body>
		<main>
			<h1><?php echo $donnee_movie['title'];?></h1>
			<nav>
				<a href="index.php">Acceuil</a>
			</nav>
			<?php
				include 'info_film.php';
				include 'liste_image.php';
			?>
		</main>
		<footer>
			<p>Thomas Duprez</p>
		</footer>
	</body>
</html>