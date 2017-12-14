<?php
	include 'connect.php';
	
	$id = $_GET['id'];
	$reponse = $bdd->query('SELECT idPicture FROM personHasPicture WHERE idPerson="'.$id.'"');
	$donnee_num_picture = $reponse->fetch();
	$num_picture = $donnee_num_picture['idPicture'];
	
	$reponse = $bdd->query('SELECT * FROM person WHERE id="'.$id.'"');
	$donnee_person = $reponse->fetch();
	
	$reponse = $bdd->query('SELECT * FROM picture WHERE id="'.$num_picture.'"');
	$donnee_picture = $reponse->fetch();

	$reponse = $bdd->query('SELECT * FROM movieHasPerson WHERE idPerson="'.$id.'"');
	$donnee_role = $reponse->fetch();
?>
<article>
	<figure>
		<img src="<?php echo $donnee_picture['path']; ?>" alt="<?php echo $donnee_picture['legend']; ?>">
	</figure>
	<ul>
		<li>Nom, Prénom <?php echo $donnee_person['lastname'] ; ?></li>
		<li>Métier <?php echo $donnee_role['role']; ?></li>
		<li>Naissance <time><?php echo $donnee_person['birthDate'] ;?></time></li>
	</ul>
</article>