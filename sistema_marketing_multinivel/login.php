<?php

	session_start();
	require 'config.php';

	if(!empty($_POST['email'])){
		if(!empty($_POST['senha'])){
			
			$email = addslashes($_POST['email']);
			$senha = md5(addslashes($_POST['senha']));

			$sql = $pdo->prepare("select * from usuarios where email = :email and senha = :senha");
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", $senha);
			$sql->execute();
			//print_r($sql);

			if($sql->rowCount() > 0){

				$sql = $sql->fetch();
				$_SESSION['logado'] = $sql['id'];
				header('Location: index.php');
				exit;

			}else{
				echo "<p>Usuário não cadastrado!</p>";
			}
		}
	}

?>

<form method="post">
	E-mail:<br>
	<input type="email" name="email" required autofocus placeholder="seu e-mail"><br><br>
	Senha:<br>
	<input type="password" name="senha" required placeholder="sua senha"><br><br>

	<input type="submit" value="Entrar">
</form>