<?php

	require 'conexao.php';

	if(isset($_GET['id']) && empty($_GET['id']) == false){
		$id = addslashes($_GET['id']);
		$sql = "delete from usuarios where id = '$id'";
		$pdo->query($sql);
	}

	header('Location: index.php');

?>