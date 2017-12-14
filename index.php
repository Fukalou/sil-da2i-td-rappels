<?php
	include 'connect.php';
?>
<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<title>Index</title>
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
							<figure class="Image_du_film">
								<li>
									<a href="movie.php?id=<?php echo $donnee_film['idMovie'];?>"><img alt="<?php echo $donnee_picture['legend']?>" src="<?php echo $donnee_picture['path']; ?>"></a>
								</li>
							</figure>
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
						// recupere les id des images des réalisateurs
						$reponse_picture_realisateur = $bdd->query('SELECT idPicture FROM personHasPicture WHERE idPerson="'.$donnee_id_realisateur['idPerson'].'" AND type="gallery"');
						while($donnee_picture_realisateur = $reponse_picture_realisateur->fetch())
						{
							// recupere toutes les données des images des realisateurs
							$reponse_picture = $bdd->query('SELECT * FROM picture WHERE id="'.$donnee_picture_realisateur['idPicture'].'"');
							while($donnee_picture = $reponse_picture->fetch())
							{?>
								<li><a href="realisateur.php?id=<?php echo $donnee_id_realisateur['idPerson'];?>"><img class="Image_du_film" alt="<?php echo $donnee_picture['legend']?>" src="<?php echo $donnee_picture['path']; ?>"></a></li>
					<?php	}
						}
					}?>
			</ul>

			<h3>Liste des acteurs</h3>
			<ul>
				<?php
					// recupere les id de tous les realisateurs
					$reponse_acteur = $bdd->query('SELECT DISTINCT idPerson FROM movieHasPerson WHERE role="Acteur"');
					while($donnee_id_acteur = $reponse_acteur->fetch())
					{
						// recupere les id des images des réalisateurs
						$reponse_picture_acteur = $bdd->query('SELECT idPicture FROM personHasPicture WHERE idPerson="'.$donnee_id_acteur['idPerson'].'" AND type="gallery"');
						while($donnee_picture_acteur = $reponse_picture_acteur->fetch())
						{
							// recupere toutes les données des images des realisateurs
							$reponse_picture = $bdd->query('SELECT * FROM picture WHERE id="'.$donnee_picture_acteur['idPicture'].'"');
							while($donnee_picture = $reponse_picture->fetch())
							{?>
								<li><a href="acteur.php?id=<?php echo $donnee_id_acteur['idPerson'];?>"><img class="Image_du_film" alt="<?php echo $donnee_picture['legend']?>" src="<?php echo $donnee_picture['path']; ?>"></a></li>
					<?php	}
						}
					}?>
			</ul>
		</main>
	</body>
</html>