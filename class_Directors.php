<?php
	include 'connect.php';
	Class Directory
	{
		public function getAllDirectors()
		{
			$reponse = $bdd->query('SELECT * FROM person');
			$donnee = $reponse->fetch();
		}

		public function getBaseInfos()
		{

		}
	}
?>
