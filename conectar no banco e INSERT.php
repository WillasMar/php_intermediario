<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
	$pdo = new PDO($dsn,$dbuser,$dbpass);

	$nome = "Testador 2";
	$email = "teste2@email.com";
	$senha = md5("123");

	$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email',senha = '$senha'";
	$sql = $pdo->query($sql);

	echo "Usuário cadastrado com sucesso: ".$pdo->lastInsertId();

}catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
}

?>