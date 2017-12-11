<?php
	include 'connect.php';
	include 'fonction.php';
?>

<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Shane Black</title>
	</head>
		
	<body>
		<main>
			<h1>Shane Black</h1>
			<nav>
				<a href="index.html">Acceuil</a>
				<a href="realisateur.html">Réalisateur</a>
				<a href="acteur.html">Acteurs</a>
			</nav>
			<section>
					<?php
						include 'info_dyna_rea/info/info_shane_black.php';
						include 'info_dyna_rea/bio/bio_shane_black.php';
					?>
			</section>
		</main>
		<?php
			include 'info_dyna_rea/filmo/filmo_shane_black.php';
		?>
		<section>
			<h3>Acteur Fétiches :</h3>
			<ul>
				<li></li>
			</ul>
		</section>
		<footer>
			<p>Thomas Duprez</p>
		</footer>
	</body>
</html>