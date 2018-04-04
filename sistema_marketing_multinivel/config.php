<?php

	global $pdo;
	$limite = 3;

	$patentes = array(

	);

	try{
		$pdo = new PDO("mysql:dbname=marketing_multinivel;host=localhost", "root","");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		echo "Falha: ".$e->getMessage();
	}

?>