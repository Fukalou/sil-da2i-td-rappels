<section class="Image_du_film">
	<h3>Acteur Fétiches :</h3>
	<ul>
<?php
	include 'connect.php';
	
	$id = $_GET['id'];
	$reponse = $bdd->query('SELECT idActeur FROM acteurFeticheHasRealisateur WHERE idRealisateur="'.$id.'"');
	while($donnee = $reponse->fetch())
	{
		$reponse2 = $bdd->query('SELECT idPicture FROM personHasPicture WHERE idPerson="'.$donnee['idActeur'].'"');
		while($donnee_num_picture = $reponse2->fetch())
		{
			$reponse3 = $bdd->query('SELECT * FROM picture WHERE id="'.$donnee_num_picture['idPicture'].'"');
			while($donnee_picture = $reponse3->fetch())	
			{ ?>
						<li><img alt="<?php echo $donnee_picture['legend']; ?>" src="<?php echo $donnee_picture['path']; ?>"/></li>
	<?php 	}
		}
	}?>
	</ul>
</section>
