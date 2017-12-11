<?php
	include 'connect.php';
	
	$reponse = $bdd->query('SELECT * FROM person WHERE id=8');
	$donnee = $reponse->fetch();
	
	$reponse2 = $bdd->query('SELECT * FROM picture WHERE id=9');
	$donnee2 = $reponse2->fetch();
?>
<article>
	<h3>Réalisateur :</h3>
	<figure>
		<img alt="<?php echo $donnee2['legend'] ; ?>" src="<?php echo $donnee2['path']; ?>"/>
	</figure>
	<ul>
		<li>Nom, Prénom <?php echo $donnee['lastname'] ;?></li>
		<li>Métier Scénariste, Acteur, Réalisateur</li>
		<li>Nationalité Américain</li>
		<li>Naissance <time><?php echo $donnee['bithDate'] ;?></time> (Pittsburgh, Pennsylvanie, USA)</li>
		<li>Age 55 ans</li>
	</ul>
</article>