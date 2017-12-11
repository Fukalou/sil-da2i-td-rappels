<?php
	try
	{
		$bdd = new PDO('mysql:host=mysql-thomas-duprez.alwaysdata.net;dbname=thomas-duprez_iron_man2;charset=utf8', '147286', 'Laaacqclt13');
		$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
?>