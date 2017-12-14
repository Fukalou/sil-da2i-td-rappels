<?php 
	include 'connect.php';

	$id = $_GET['id'];
	$reponse_id_movie_picture = $bdd->query('SELECT idPicture FROM movieHasPicture WHERE idMovie="'.$id.'" AND type="poster"');
	$donnee_id_movie_picture = $reponse_id_movie_picture->fetch();

	$reponse_movie_picture = $bdd->query('SELECT * FROM picture WHERE id="'.$donnee_id_movie_picture['idPicture'].'"');
	$donnee_movie_picture = $reponse_movie_picture->fetch();

	$reponse_movie = $bdd->query('SELECT * FROM movie WHERE id="'.$id.'"');
	$donnee_movie = $reponse_movie->fetch();
?>
<section>
	<div class="disposition_photo_text">
		<figure>
			<img class="Image_du_film" id="Affiche_du_film" alt="<?php echo $donnee_movie_picture['legend'];?>" src="<?php echo $donnee_movie_picture['path'];?>">
		</figure>
		<ul>
			<li><?php echo $donnee_movie['title'];?></li>
			<li>Date de sortie</li>
			<li><time><?php echo $donnee_movie['releaseDate'];?></time></li>
			<li>Réalisateur</li>
			<?php
				$reponse_id_realisateur = $bdd->query('SELECT idPerson FROM movieHasPerson WHERE idMovie="'.$id.'" AND role="Réalisateur"');
				while($donnee_id_realisateur = $reponse_id_realisateur->fetch())
				{
					$reponse_realisateur = $bdd->query('SELECT * FROM person WHERE id="'.$donnee_id_realisateur['idPerson'].'"');
					while($donnee_realisateur = $reponse_realisateur->fetch())
					{?>
						<a href="acteur.php?id=<?php echo $donnee_id_realisateur['idPerson'];?>">
							<li><?php echo $donnee_realisateur['lastname'];?> <?php echo $donnee_realisateur['firstname'];?></li>
						</a>
			<?php	}
				}?>
			<li>Acteur Principaux</li>
			<?php
				$reponse_id_acteur = $bdd->query('SELECT idPerson FROM movieHasPerson WHERE idMovie="'.$id.'" AND role="Acteur"');
				while($donnee_id_acteur = $reponse_id_acteur->fetch())
				{
					$reponse_acteur = $bdd->query('SELECT * FROM person WHERE id="'.$donnee_id_acteur['idPerson'].'"');
					while($donnee_acteur = $reponse_acteur->fetch())
					{?>
						<a href="acteur.php?id=<?php echo $donnee_id_acteur['idPerson'];?>">
							<li><?php echo $donnee_acteur['lastname'];?> <?php echo $donnee_acteur['firstname'];?></li>
						</a>
			<?php	}
				}?>
		</ul>
	</div>
	<article class="Synopsis">
	</br>
		<h3>Synopsis :</h3>

		<p><?php echo $donnee_movie['synopsis']?></p>
	</article>
	<article>
		<h3>Note :</h3>
		<p><meter min="0" max="5" value=<?php echo $donnee_movie['rating'];?> ></meter> <?php echo $donnee_movie['rating'];?>/5</p>
	</article>
</section>