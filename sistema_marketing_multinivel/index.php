<?php

	session_start();
	require 'config.php';

	if(empty($_SESSION['logado'])){
		header('Location: login.php');
		exit;
	}

	$id = $_SESSION['logado'];

	$sql = $pdo->prepare("select nome from usuarios where id = :id");
	$sql->bindValue(":id", $id);
	$sql->execute();

	if($sql->rowCount() > 0){
		$sql = $sql->fetch();
		$nome = $sql['nome'];
	}else{
		header('location: login.php');
		exit;
	}
?>

<h1>Sistema de Marketing Multinível</h1>
<h2>Usuário Logado: <?=$nome; ?></h2>
<a href="Cadastrar_usuario.php">Cadastrar usuário</a> -
<a href="sair.php">Sair</a>