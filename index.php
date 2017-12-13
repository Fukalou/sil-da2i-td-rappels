<?php
	include 'connect.php';
?>
<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<title>Iron Man 3</title>
	</head>
		
	<body>
		<main>
			<h3>Liste des films</h3>
			<ul>
				<?php
					// recupere les id de tous les films
					$reponse_film = $bdd->query('SELECT idPicture, idMovie FROM movieHasPicture WHERE type="poster"');
					while($donnee_film = $reponse_film->fetch())
					{
						// recupere toutes les données des images des films
						$reponse_picture_film = $bdd->query('SELECT * FROM picture WHERE id="'.$donnee_film['idPicture'].'"');
						while($donnee_picture = $reponse_picture_film->fetch())
						{?>
							<li><a href="<?php echo $donnee_film['idMovie'];?>"><img class="Image_du_film" alt="<?php echo $donnee_picture['legend']?>" src="<?php echo $donnee_picture['path']; ?>"></a></li>
				<?php	}
					}?>
				
			</ul>

			<h3>Liste des réalisateur</h3>
			<ul>
				<?php
					// recupere les id de tous les realisateurs
					$reponse_realisateur = $bdd->query('SELECT DISTINCT idPerson FROM movieHasPerson WHERE role="Réalisateur"');
					while($donnee_id_realisateur = $reponse_realisateur->fetch())
					{
						// recupere les id des images de films
						$reponse_delete_movie_picture = $bdd->query('SELECT idPicture FROM personHasPicture WHERE idPerson="'.$donnee_id_realisateur['idPerson'].'"');
						while($donnee_delete_movie_picture = $reponse_delete_movie_picture->fetch())
						{
							//recupere les id des images qui ne sont pas des images de films des réalisateurs
							$reponse_picture_realisateur_film = $bdd->query('SELECT idPicture FROM movieHasPicture WHERE idPicture!="'.$donnee_delete_movie_picture['idPicture'].'"');
							while($donnee_picture_realisateur = $reponse_picture_realisateur_film->fetch())
							{
								// recupere toutes les données des images des realisateurs
								$reponse_donnee_picture_realisateur = $bdd->query('SELECT * FROM picture WHERE id="'.$donnee_delete_movie_picture['idPicture'].'"');
								while($donnee_picture = $reponse_donnee_picture_realisateur->fetch())
								{?>
									<li><a href="<?php echo $donnee_id_realisateur['idPerson'];?>"><img class="Image_du_film" alt="<?php echo $donnee_picture['legend']?>" src="<?php echo $donnee_picture['path']; ?>"></a></li>
						<?php	}
							}
						}
					}?>
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