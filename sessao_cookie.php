<?php
	
	/*
	session_start(); //inicia a sessão

	//salva um nome com a sessão
	//$_SESSION["teste"] = "Willas Mar";
	//echo "Sessão iniciada";

	//recupera o nome salvo com a sessão
	echo "Meu nome é ".$_SESSION["teste"];
	*/

	//criando um cookie
	//nome do cookie
	//o que será armazenado no cookie
	//tempo de vida do cookie
	setcookie("meuteste", "Fulano de tal", time()+3600); 

	echo "Cookie setado com sucesso";

	echo "Meu coockie é de ".$_COOKIE["meuteste"];

?>