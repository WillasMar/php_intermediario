<?php
	try{
		$pdo = new PDO("mysql:dbname=estoque;host=localhost","root","");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		"Falha ao conectar no BD: ".$e->getMessage();
	}
?>