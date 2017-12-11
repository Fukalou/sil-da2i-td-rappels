<?php
	include 'connect.php';
	
	$reponse = $bdd->query('SELECT * FROM person WHERE id=8');
	$donnee = $reponse->fetch();
	
	$reponse2 = $bdd->query('SELECT * FROM picture WHERE id=8');
	$donnee2 = $reponse2->fetch();

	$alt = $donnee2['legend'];
	$src = $donnee2['path'];
?>
<article>
	<h3>Réalisateur :</h3>
	<figure>
		<img alt="" src="Shane_Black.jpg" />
		<img src="../../Images/Iron_Man_3/Shane_Black.jpg" alt="Flowers in Chania">
	</figure>
	<ul>
		<li>Nom, Prénom <?php echo $donnee['lastname'] ;?></li>
		<li>Métier Scénariste, Acteur, Réalisateur</li>
		<li>Nationalité Américain</li>
		<li>Naissance <time><?php echo $donnee['birthDate'] ;?></time> (Pittsburgh, Pennsylvanie, USA)</li>
		<li>Age 55 ans</li>
	</ul>
</article>