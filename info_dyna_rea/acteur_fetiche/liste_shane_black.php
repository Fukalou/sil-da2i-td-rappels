<?php
	include 'connect.php';
	
	$reponse = $bdd->query('SELECT * FROM picture WHERE id=1');
	$donnee = $reponse->fetch();

	$reponse2 = $bdd->query('SELECT * FROM picture WHERE id=2');
	$donnee2 = $reponse2->fetch();
?>

<section>
	<h3>Acteur Fétiches :</h3>
	<ul>
		<li><img alt="<?php echo $donnee['legend']; ?>" src="<?php echo $donnee['path']; ?>"/></li>
		<li><img alt="<?php echo $donnee2['legend']; ?>" src="<?php echo $donnee2['path']; ?>"/></li>
	</ul>
</section>