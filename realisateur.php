<?php
	include('connect.php');
	include('fonction.php');
	
	$id = $_GET['id'];
	$reponse = $bdd->query('SELECT * FROM person WHERE id="'.$id.'"');
	$person = $reponse->fetch();
?>

<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<title><?php echo $person['lastname']; echo $person['firstname']; ?></title>
	</head>
		
	<body>
		<main>
			<h1><?php echo $person['lastname']; echo $person['firstname']; ?></h1>
			<nav>
				<a href="index.html">Acceuil</a>
				<a href="realisateur.html">Réalisateur</a>
				<a href="acteur.php">Acteurs</a>
			</nav>
			<section>
					<?php
						include('info_dyna_rea/info.php');
						include('info_dyna_rea/bio.php');
					?>
			</section>
		</main>
		<?php
			include('info_dyna_rea/filmo.php');
			include('info_dyna_rea/liste.php');
			
		?>
		<footer>
			<p>Thomas Duprez</p>
		</footer>
	</body>
</html>