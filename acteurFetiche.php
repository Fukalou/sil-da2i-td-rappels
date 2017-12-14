<section >
	<h3>Acteur Fétiches :</h3>
	<ul>
		<?php
			include 'connect.php';

			$id = $_GET['id'];
			// recupere tous les id des acteurs fétiche du réalisateur
			$reponse = $bdd->query('SELECT idActeur FROM acteurFeticheHasRealisateur WHERE idRealisateur="'.$id.'"');
			while($donnee = $reponse->fetch())
			{
				// recupere les id des images des acteurs
				$reponse2 = $bdd->query('SELECT idPicture FROM personHasPicture WHERE idPerson="'.$donnee['idActeur'].'"');
				while($donnee_num_picture = $reponse2->fetch())
				{
					// recupere les données des images des acteurs
					$reponse3 = $bdd->query('SELECT * FROM picture WHERE id="'.$donnee_num_picture['idPicture'].'"');
					$donnee_picture = $reponse3->fetch();
					// recupere le nom et le prénom des acteurs
					$reponse4 = $bdd->query('SELECT lastname, firstname FROM person WHERE id="'.$donnee['idActeur'].'"');
					$donnee_person = $reponse4->fetch();

					$donnee_person_donnee_picture = array_merge($donnee_person, $donnee_picture);
					?>
						<li>
							<a href="acteur.php?id=<?php echo $donnee['idActeur'];?>">
								<img class="Image_du_film" alt="<?php echo $donnee_person_donnee_picture['legend']; ?>" src="<?php echo $donnee_person_donnee_picture['path']; ?>"/>
							</a>
						</li>
						<ul>
							<li>
								<p>Nom : <?php echo $donnee_person_donnee_picture['lastname'];?></p>
							</li>
							<li>
								<p>Prénom : <?php echo $donnee_person_donnee_picture['firstname'];?></p>
							</li>
						</ul>
<?php	}
	}?>
	</ul>
</section>
