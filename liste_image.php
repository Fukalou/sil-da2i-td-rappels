<article>
	<h3>Image du film :</h3>
	<?php
		include 'connect.php';

		$id = $_GET['id'];
		$reponse_id_movie_picture = $bdd->query('SELECT idPicture FROM movieHasPicture WHERE idMovie="'.$id.'" AND type="movie_picture"');
		while($donnee_id_movie_picture = $reponse_id_movie_picture->fetch())
		{
			$reponse_movie_picture = $bdd->query('SELECT * FROM picture WHERE id="'.$donnee_id_movie_picture['idPicture'].'"');
			while($donnee_movie_picture = $reponse_movie_picture->fetch())
			{?>
				<figure class="Image_du_film">
					<img alt="<?php echo $donnee_movie_picture['legend'];?>" src="<?php echo $donnee_movie_picture['path'];?>">
				</figure>
	<?php	}
		}?>
</article>