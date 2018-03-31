<?php

	session_start();
	require 'conexao.php';

	$codigo = '0';
	$convite = 0;

	if(isset($_GET['codigo']) && !empty($_GET['codigo'])){

		$codigo = addslashes($_GET['codigo']);
		$sql = "select codigo, convite from usuarios where codigo = '$codigo'";
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0){
			$usuarios = $sql->fetch();
			$convite = $usuarios['convite'];

			if($convite >= 5){
				header('Location: login.php');
				exit;
			}else{
				$convite = $convite + 1;
			}			
		}else{
			header('Location: login.php');
			exit;
		}

	}else{
		header('Location: login.php');
		exit;
	}

	if(isset($_POST['nome']) && !empty($_POST['nome'])){
		if(isset($_POST['email']) && !empty($_POST['email'])){
			if(isset($_POST['senha']) && !empty($_POST['senha'])){

				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$senha = md5(addslashes($_POST['senha']));
				$codigo_novo = md5($email);

				$sql = "select email from usuarios where email = '$email'";
				$sql = $pdo->query($sql);

				if($sql->rowCount() > 0){
					
					echo "<p>E-mail já cadastrado!<p>";

				}else{

					$sql = "insert into usuarios (nome, email, senha, codigo, convite) values ('$nome', '$email', '$senha', '$codigo_novo', 0)";
					$pdo->query($sql);

					$sql = "update usuarios set convite = $convite where codigo = '$codigo'";
					$pdo->query($sql);

					header('Location: login.php');
					exit;					
				}
			}

		}
	}

?>

<form method="post">
	Nome:<br>
	<input type="text" name="nome" required autofocus placeholder="seu nome"><br><br>

	E-mail:<br>
	<input type="email" name="email" required placeholder="seu email"><br><br>

	Senha:<br>
	<input type="password" name="senha" required placeholder="sua senha"><br><br>

	<input type="submit" value="Gravar">
</form>