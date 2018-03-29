<?php

	session_start();
	require 'conexao.php';

	if(isset($_POST['email']) && empty($_POST['email']) == false){
		if(isset($_POST['senha']) && empty($_POST['senha']) == false){

			$email = addslashes($_POST['email']);
			$senha = md5(addslashes($_POST['senha']));		
			$sql = "select * from usuarios where email = '$email' and senha = '$senha'";
			$sql = $pdo->query($sql);

			if($sql->rowCount() > 0){
			
				$usuarios = $sql->fetch();
				$_SESSION = $usuarios;
				header('Location: index.php');
			
			}else{
				echo "Usuário não cadastrado!";
			}
		}
	}

?>

<form method="post">
	<table>
		<tr>
			<th>E-mail</th>
			<th><input type="email" name="email" required autofocus placeholder="seu e-mail"></th>
		</tr>
		<tr>
			<th>Senha</th>
			<th><input type="password" name="senha" required placeholder="sua senha"></th>
		</tr>
		<tr>
			<th><input type="submit" value="Entrar"></th>
		</tr>
	</table>
</form>



