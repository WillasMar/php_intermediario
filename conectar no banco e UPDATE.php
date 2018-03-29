<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
	$pdo = new PDO($dsn,$dbuser,$dbpass);

	$sql = "UPDATE usuarios SET email='a@email.com' WHERE id=10";
	$sql = $pdo->query($sql); //usado quando precisa retonar dados
	//$pdo->query($sql); //usado quando não precisa retonar dados

	echo "Usuário alterado com sucesso!";

}catch(PDOException $e){
	echo "Falho: ".$e->getMessage();
}

?>