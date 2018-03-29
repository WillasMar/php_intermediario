<?php

	require 'conexao.php';

	if(isset($_POST['nome']) && !empty($_POST['nome'])){
		if(isset($_POST['comentario']) && !empty($_POST['comentario'])){

			$nome = addslashes($_POST['nome']);
			$comentario = addslashes($_POST['comentario']);

			$sql = $pdo->prepare("insert into comentarios set nome = :nome, comentario = :comentario, data = now()");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":comentario", $comentario);
			$sql->execute();


			header('Location: index.php');
		}
	}

?>