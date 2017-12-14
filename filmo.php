<?php
	include 'connect.php';

	$id = $_GET['id'];
	// récupere tous les id des films d'un réalisateur
	$reponse = $bdd->query('SELECT idMovie FROM movieHasPerson WHERE idPerson="'.$id.'"');
	
?>

<section>
	<article>
		<h3>Filmographie :</h3>
		<?php
			while($donnee = $reponse->fetch())
			{
				// récupere tous les id des images d'un film
				$reponse2 = $bdd->query('SELECT idPicture FROM movieHasPicture WHERE idMovie="'.$donnee['idMovie'].'" AND type="poster"');
				
				while($donnee_num_picture = $reponse2->fetch())
				{
					// récupere les données de l'affiche du film
					$reponse3 = $bdd->query('SELECT * FROM picture WHERE id="'.$donnee_num_picture['idPicture'].'"');
					while($donnee_picture = $reponse3->fetch())
					{ ?>
						<figure class="Image_du_film">
							<a href="movie.php?id=<?php echo $donnee['idMovie'];?>">
								<img alt="<?php echo $donnee_picture['legend']; ?>" src="<?php echo $donnee_picture['path']; ?>" >
							</a>
						</figure>
			<?php	}
					
				}
			}
		?>
	</article>
</section>