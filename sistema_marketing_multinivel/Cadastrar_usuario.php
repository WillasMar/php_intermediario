<?php

	session_start();
	require 'config.php';

	if(!empty($_POST['nome']) && !empty($_POST['email'])){

		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));
		$id_pai = $_SESSION['logado'];

		$sql = $pdo->prepare("select email from usuarios where email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() == 0){

			$sql = $pdo->prepare("insert into usuarios (id_pai, nome, email, senha) values (:id_pai, :nome, :email, :senha)");
			$sql->bindValue(":id_pai", $id_pai);
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", $senha);
			$sql->execute();

			header('Location: index.php');
			exit;

		}else{
			echo "<p>E-mail já cadastrado!</p>";
		}

	}	

?>

<form method="post">
	Nome:<br>
	<input type="text" name="nome" required autofocus placeholder="nome do usuário"><br><br>
	E-mail:<br>
	<input type="email" name="email" required placeholder="email do usuário"><br><br>
	Senha:<br>
	<input type="password" name="senha" required placeholder="senha do usuário"><br><br>

	<input type="submit" value="Gravar">
</form>