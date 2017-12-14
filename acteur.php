<?php
	include 'connect.php';
	
	$id = $_GET['id'];
	$reponse_id_acteur = $bdd->query('SELECT * FROM person WHERE id="'.$id.'"');
	$donnee_acteur = $reponse_id_acteur->fetch();
	
	$reponse_id_picture_acteur = $bdd->query('SELECT idPicture FROM personHasPicture WHERE idPerson="'.$id.'" AND type="gallery"');
	$donnee_id_picture_acteur = $reponse_id_picture_acteur->fetch();

	$reponse_picture_acteur = $bdd->query('SELECT * FROM picture WHERE id="'.$donnee_id_picture_acteur['idPicture'].'"');
	$donnee_picture_acteur = $reponse_picture_acteur->fetch();

	$reponse_job_acteur = $bdd->query('SELECT role FROM movieHasPerson WHERE idPerson="'.$id.'"');
	$donnee_job_acteur = $reponse_job_acteur->fetch();
?>


<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<title><?php echo $donnee_acteur['lastname'];?> <?php echo $donnee_acteur['firstname'];?></title>
	</head>
		
	<body>
		<main>
			<h1><?php echo $donnee_acteur['lastname'];?> <?php echo $donnee_acteur['firstname'];?></h1>
			<nav>
				<a href="index.php">Acceuil</a>
			</nav>
		<section>
			<article>
				<figure>
					<img alt="<?php echo $donnee_picture_acteur['legend'];?>" src="<?php echo $donnee_picture_acteur['path'];?>">
				</figure>
				<ul>
					<li>Nom, Prénom : <?php echo $donnee_acteur['lastname'];?> <?php echo $donnee_acteur['firstname'];?></li>
					<li>Métier : <?php echo $donnee_job_acteur['role'];?></li>
					<li>Naissance : <time><?php echo $donnee_acteur['birthDate'];?></time></li>
				</ul>
			</article>
			<?php 
				include 'bio.php';
				include 'filmo.php';
			?>
		</section>
		<footer>
			<p>Thomas Duprez</p>
		</footer>
	</body>
</html>