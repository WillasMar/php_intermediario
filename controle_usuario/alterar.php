<?php

	require 'conexao.php';

	$id = 0;

	if(isset($_GET['id']) && empty($_GET['id']) == false){
		$id = addslashes($_GET['id']);
	}

	if(isset($_POST['nome']) && empty($_POST['nome']) == false){
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);

		$sql = "update usuarios set nome='$nome', email='$email' where id='$id'";
		$pdo->query($sql);

		header('Location: index.php');

	}	

	$sql= "select * from usuarios where id ='$id'";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0){
		$usuarios = $sql->fetch();
	} else {
		header('Location: index.php');
	}
	
?>

<form method="post">
	<table>
		<tr>
			<th>Nome:</th>
			<th><input type="text" name="nome" value="<?php echo $usuarios['nome']; ?>" required autofocus ></th>
		</tr>
		<tr>
			<th>E-mail:</th>
			<th><input type="email" name="email" value="<?php echo $usuarios['email']; ?>" required></th>
		</tr>
	</table>

	<p><input type="submit" value="Gravar">
</form>

<p><a href="index.php">Home</a>