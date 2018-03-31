<?php
	
	session_start();
	require 'conexao.php';	

	if (isset($_POST['email']) && !empty($_POST['email'])) {
		if (isset($_POST['senha']) && !empty($_POST['senha'])) {
			
			$email = addslashes($_POST['email']);
			$senha = md5(addslashes($_POST['senha']));

			$sql = "select * from usuarios where email = '$email' and senha = '$senha'";
			$sql = $pdo->query($sql);

			if($sql->rowCount() > 0){
				$usuarios = $sql->fetch();
				$_SESSION['logado'] = $usuarios['id'];
				header('Location: index.php');
				exit;
			}else{
				echo "Usuário não cadastrado!<br><br>";
			}
		}
	}

?>

<form method="post">
	E-mail:<br>
	<input type="email" name="email" required autofocus placeholder="seu email"><br><br>

	Senha:<br>
	<input type="password" name="senha" required placeholder="sua senha"><br><br>

	<input type="submit" value="Entrar"> - <a href="cadastrar.php">Cadastrar</a>

</form>

