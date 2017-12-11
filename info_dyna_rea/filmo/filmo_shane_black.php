<?php
	include 'connect.php';
?>

<section>
	<article>
		<h3>Filmographie :</h3>
		<figure>
		<?php 
			$reponse = $bdd->query('SELECT * FROM picture WHERE id=11');
			$donnee = $reponse->fetch();
		?>
		<img alt="<?php $donnee['path']; ?>" src="<?php $donnee['path']; ?>" >
		<figcaption>Affiche du film Predator</figcaption>
		</figure>
		<figure>
			<?php 
				$reponse = $bdd->query('SELECT * FROM picture WHERE id=12');
				$donnee = $reponse->fetch();
			?>
			<img alt="<?php echo $donnee['legend']; ?>" src="<?php echo $donnee['path']; ?>" >
			<figcaption>Affiche du film Nice Guys</figcaption>
		</figure>
		<figure>
			<?php 
				$reponse = $bdd->query('SELECT * FROM picture WHERE id=13');
				$donnee = $reponse->fetch();
			?>
			<img alt="<?php echo $donnee['legend']; ?>" src="<?php echo $donnee['path']; ?>" >
			<figcaption>Affiche du film Kiss Kiss Bang Bang</figcaption>
		</figure>
	</article>
</section>