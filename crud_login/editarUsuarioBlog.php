<?php
require 'conexao_blog.php';

$id = 0; //inicia variável id

//pega o id passado pela url
if(isset($_GET['id']) && empty($_GET['id']) == false){
	$id = addslashes($_GET['id']);
}

//altera os dados conforme informações enviadas
if(isset($_POST['nome']) && empty($_POST['nome']) == false){
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = "UPDATE usuarios SET nome='$nome',email='$email',senha='$senha' WHERE id='$id'";
	$pdo->query($sql);

	header("Location: index.php");
}

//preenche o formulário
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
	$dado = $sql->fetch();
}else{
	header("Location: index.php");
}
?>

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome" value="<?php echo $dado['nome'];?>" /><br/><br/>
	E-mail:<br/>
	<input type="text" name="email" value="<?php echo $dado['email'];?>" /><br/><br/>
	<input type="password" name="senha" value="<?php echo $dado['senha'];?>" /><br/><br/>

	<input type="submit" value="Salvar" />
	<a href="index.php"><input type="button" value="Cancelar"></a>
</form>
