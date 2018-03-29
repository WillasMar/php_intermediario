<?php

	$dsn = "mysql:dbname=blog; host=localhost";
	$dbuser = "root";
	$dbpass = "";			

	try{
		$pdo = new PDO($dsn, $dbuser, $dbpass);

		$sql = "select * from usuarios where id = ".$_GET["id"];
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0){
			$sql = "delete from usuarios where id = ".$_GET["id"];
			$sql = $pdo->query($sql);

			echo "<p>Usuário deletado: ".$_GET["id"];
		}else{
			echo "<p>Usuário não cadastrado: ".$_GET["id"];
		}

	}catch(PDOException $e){
		echo "Falha: ".$e->getMessage();
	}

	echo "
		<p><a href='pdo_conexao_deletar.html'>Voltar</a> |
		<a href='index.html'>Home</a>
	";

?>