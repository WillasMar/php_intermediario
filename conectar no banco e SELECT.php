<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	
	$nome = "Testador";
	$email = "teste@email.com";
	$senha = md5("123");

	$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email',senha = '$senha'";
	$sql = $pdo->query($sql);

	echo "Usuário inserido com sucesso!";
	
	if($sql->rowCount() > 0){
		foreach ($sql->fetchAll() as $usuario) {
			echo "Nome: ".$usuario["nome"]." - "."E-mail: ".$usuario["email"]."<br/>";
		}
	}else{
		echo "Não há usuários!";
	}

}catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
}

?>