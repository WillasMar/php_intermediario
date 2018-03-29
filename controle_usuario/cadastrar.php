<?php

	require 'conexao.php';

	if(isset($_POST['nome']) && empty($_POST['nome']) == false){
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));
		//$senha = addslashes($_POST['senha']);

		$sql = "insert into usuarios set nome='$nome', email='$email', senha='$senha'";
		$sql = $pdo->query($sql);

		header('Location: index.php');
	}
	
?>

<form method="post">
	<table>
		<tr>
			<th>Nome:</th>
			<th><input type="text" name="nome" required autofocus ></th>
		</tr>
		<tr>
			<th>E-mail:</th>
			<th><input type="email" name="email" required></th>
		</tr>
		<tr>
			<th>Senha</th>
			<th><input  type="password" name="senha" required></th>
		</tr>
	</table>

	<p><input type="submit" value="Cadastrar">
</form>

<p><a href="index.php">Home</a>