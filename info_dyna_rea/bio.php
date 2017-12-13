<?php
	include 'bio/connect.php';
	
	$id = $_GET['id'];
	$reponse = $bdd->query('SELECT biography FROM person WHERE id="'.$id.'"');
	$donnee = $reponse->fetch();
?>
<article>
	<h3>Biographie :</h3>

	<p>
		<?php echo $donnee['biography'] ; ?>
	</p>
</article>
