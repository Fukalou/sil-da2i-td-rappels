<section class="after-box">
<article>
	<h3>Réalisateur :</h3>
	<div class="disposition_photo_text">
		<figure class="photo">
			<img alt="Shane Black" src="Images/Iron_Man_3/Shane_Black.jpg">
		</figure>
		<ul>
			<li>Nom, Prenom : <?= $data ['name']?></li>
			<li>Métier : <?= $data ['job']?></li>
			<li>Nationalité : <?= $data ['nation']?></li>
			<li>Naissance : <time><?= $data ['birth day']?></time> <?= $data ['birth place']?></li>
			<li>Age : <?= $data ['age']?> ans</li>
		</ul>
	</div>
</article>