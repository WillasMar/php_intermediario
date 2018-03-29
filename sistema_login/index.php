<?php

	session_start();

	if (isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
		$nome = $_SESSION['nome'];
		echo "Seja bem vindo ".$nome;
	}else{
		header('Location: login.php');
	}

?>