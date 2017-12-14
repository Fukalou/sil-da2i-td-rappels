<?php
	include('connect.php');
	
	$id = $_GET['id'];
	$reponse = $bdd->query('SELECT * FROM person WHERE id="'.$id.'"');
	$person = $reponse->fetch();
?>

<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<title><?php echo $person['lastname'];?> <?php echo $person['firstname']; ?></title>
	</head>
		
	<body>
		<main>
			<h1><?php echo $person['lastname'];?> <?php echo $person['firstname']; ?></h1>
			<nav>
				<a href="index.php">Acceuil</a>
			</nav>
			<section>
					<?php
						include('info.php');
						include('bio.php');
					?>
			</section>
		</main>
		<?php
			include('filmo.php');
			include('acteurFetiche.php');
			
		?>
		<footer>
			<p>Thomas Duprez</p>
		</footer>
	</body>
</html>