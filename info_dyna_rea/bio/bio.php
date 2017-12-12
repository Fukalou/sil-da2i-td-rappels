<?php
	include 'connect.php';

	$reponse = $bdd->query('SELECT biography FROM person WHERE id=8');
	$donnee = $reponse->fetch();
?>
<article>
	<h3>Biographie :</h3>

	<p>
		<?php echo $donnee['biography'] ; ?>
	</p>
</article>
