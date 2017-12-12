<?php
	include 'connect.php';

	$id = $_GET['id'];
	$reponse = $bdd->query('SELECT idPicture FROM personHasPicture WHERE idPerson="'.$id.'"');
?>

<section>
	<article>
		<h3>Filmographie :</h3>
		<?php
		
			while($donnee = $reponse->fetch())
			{
				$num_picture = $donnee['idPicture'];
				unset($donnee[0]);
				
				$reponse2 = $bdd->query('SELECT * FROM picture WHERE id="'.$num_picture.'"');
				$donnee_picture = $reponse2->fetch();
				?>
				<figure>
					<img alt="<?php echo $donnee_picture['legend']; ?>" src="<?php echo $donnee_picture['path']; ?>" >
					<figcaption><?php echo $donnee_picture['legend']; ?></figcaption>
				</figure>
			<?php }?>
	</article>
</section>