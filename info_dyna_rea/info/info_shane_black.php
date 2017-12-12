<?php
	include 'connect.php';
	include 'class_Directors.php';
	include 'class_Movies.php';
	
	getAllDirectors();
	
	getAllMovies();
?>
<article>
	<h3>Réalisateur :</h3>
	<figure>
		<img alt="" src="Shane_Black.jpg" />
		<img src="<?php echo $donnee2['path']; ?>" alt="<?php echo $donnee2['legend']; ?>">
	</figure>
	<ul>
		<li>Nom, Prénom <?php echo $donnee['lastname'] ;?></li>
		<li>Métier Scénariste, Acteur, Réalisateur</li>
		<li>Nationalité Américain</li>
		<li>Naissance <time><?php echo $donnee['birthDate'] ;?></time> (Pittsburgh, Pennsylvanie, USA)</li>
		<li>Age 55 ans</li>
	</ul>
</article>