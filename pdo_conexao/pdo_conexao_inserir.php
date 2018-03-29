<?php

	$dsn = "mysql:dbname=blog; host=localhost";
	$dbuser = "root";
	$dbpass = "";

	try{
		$pdo = new PDO($dsn, $dbuser, $dbpass);

		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = md5($_POST["senha"]);

		$sql = "select email from usuarios where email = '".$email."'";
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0){
			echo "E-mail já cadastrado: ".$email;
		}else{
			$sql = "insert into usuarios set nome='$nome', email='$email', senha='$senha'";
			$sql = $pdo->query($sql);

			echo "Usuário cadastrado: ".$pdo->lastInsertId();
		}

	}catch(PDOException $e){
		echo "Falha: ".$e->getMessage();
	}

	echo "<p><a href='index.html'>Home</a>";
?>