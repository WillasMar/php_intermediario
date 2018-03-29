<?php

	try{
		$pdo = new PDO("mysql:dbname=blog;host=localhost","root","", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
		//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Falha: ".$e->getMesssage();
	}

	$sql = $pdo->query("select * from usuariosS"); //tabela deve ser 'usuarios'

	echo "Total de usuários: ".$sql->rowCount();

?>