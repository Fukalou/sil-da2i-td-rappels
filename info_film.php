<section>
	<div class="disposition_photo_text">
		<figure>
			<img class="Image_du_film" id="Affiche_du_film" alt="Affiche du film" src="Images/Iron_Man_3/Affiche_du_film.jpg">
		</figure>
		<ul>
			<li><?= $data ['title']?></li>
			<li>Date de sortie</li>
			<li><time><?php echo $data ['date']?></time></li>
			<li>Acteur Principaux</li>
			<li><?= $data ['acteur1']?></li>
			<li><?= $data ['acteur2']?></li>
			<li><?= $data ['acteur3']?></li>
		</ul>
	</div>
	<article class="Synopsis">
	</br>
		<h3>Synopsis :</h3>

		<p><?= $data ['synopsis']?></p>
	</article>
	<article>
		<h3>Note :</h3>
		<p><meter min="0" max="5" value=<?= $data ['note']?> ></meter> 4/5</p>
	</article>
</section>