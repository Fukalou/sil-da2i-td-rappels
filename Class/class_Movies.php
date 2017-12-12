<?php
include '../connect.php';
	Class Movie
	{
		public function getAllMovies()
		{
			$reponse2 = $bdd->query('SELECT * FROM picture');
			$donnee2 = $reponse2->fetch();
		}
		
		public function getBaseInfos()
		{
			
		}
	}
?>