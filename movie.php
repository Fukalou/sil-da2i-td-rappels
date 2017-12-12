<?php 
	function getBlock($file, $data = [])
	{
		require $file;
	}
?>
<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<title>Iron Man 3</title>
	</head>
		
	<body>
		<main>
			<?php
				$header = ['title' => 'Iron Man 3'];
				getBlock('header.php', $header);
			?>
			<?php
				$info_film = [ 'title' => 'Iron Man 3',
					'date' => '24 Avril 2013',
					'acteur1' => 'Robert Downey Jr',
					'acteur2' => 'Gwyneth Paltrow',
					'acteur3' => 'Don Cheadle',
					'synopsis' => 'Tony Stark, l’industriel flamboyant qui est aussi Iron Man, est confronté cette fois à un ennemi qui va attaquer sur tous les fronts. Lorsque son univers personnel est détruit, Stark se lance dans une quête acharnée pour retrouver les coupables. Plus que jamais, son courage va être mis à l’épreuve, à chaque instant. Dos au mur, il ne peut plus compter que sur ses inventions, son ingéniosité, et son instinct pour protéger ses proches. Alors qu’il se jette dans la bataille, Stark va enfin découvrir la réponse à la question qui le hante secrètement depuis si longtemps : est-ce l’homme qui fait le costume ou bien le costume qui fait l’homme ?',
					'note' => '4' ];
				getBlock('info_film.php', $info_film);
				include 'liste_image.php';
			?>
		</main>
		<?php
			$info_rea = [ 'name' => 'Shane Black',
				'job' => 'Scénariste, Acteur, Réalisateur',
				'nation' => 'Américain',
				'birth day' => '16 décembre 1961 (Pittsburgh, Pennsylvanie, USA)',
				'birth place' => '(Pittsburgh, Pennsylvanie, USA)',
				'age' => '55'];
			getBlock('liste_info_rea.php', $info_rea);
			include 'liste_info_acteur.php';
		?>
		<?php
			$footer = [ 'name' => 'Thomas Duprez'];
			getBlock('footer.php', $footer);
		?>
	</body>
</html>