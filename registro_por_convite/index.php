<?php
	
	require 'conexao.php';
	session_start();
	

	if(empty($_SESSION['logado'])){
		header('Location: login.php');
		exit;		
	}

	$sql = "select * from usuarios where id = '".addslashes($_SESSION['logado'])."'";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0){
		$usuarios = $sql->fetch();
	}
?>
		<h1>Área interna do sistema</h1>
		<p>Usuário: <?=$usuarios['email']; ?> - <a href='sair.php'>Sair</a></p>


		<p>Convide amigos: http://localhost/php_intermediario/registro_por_convite/cadastrar.php?codigo=<?=$usuarios['codigo']; ?><p>


