<?php
//verifica se enviou dados

/* //não recomendado verificar se o $_POST está vazio
if (isset($_POST['email']) && $_POST['email'] != "") {
	echo "O usuário enviou os dados!";
}*/

/* //comando ! inverte resultado
if (isset($_POST['email']) && !empty($_POST['email']) == false) {
	echo "O usuário enviou os dados!";
}*/

 //comando empty verifica true ou false, vazio ou não
if (isset($_POST['email']) && empty($_POST['email']) == false)
{
	if (isset($_POST['senha']) && empty($_POST['senha']) == false)
	{
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		echo "Email é: ".$email.", Senha é: ".$senha;
	}	
}
?>
<hr/>
<form method="POST">
	E-MAIL:<br/>
	<input type="text" name="email" /><br/><br/>

	SENHA:<br/>
	<input type="password" name="senha" /><br/><br/>

	<input type="submit" value="Enviar Dados" />
</form>