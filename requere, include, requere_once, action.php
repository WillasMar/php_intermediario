<?php
require "recebedor.php"; //para de executar no momento do erro
//include "recebedor.php"; //apenas exibe uma msg do erro
//require_once "recebedor.php"; //importa apenas uma vez

?>

<form method="POST" action="recebedor.php">
<form method="POST">
	E-MAIL:<br/>
	<input type="text" name="email"><br/>

	<input type="submit" value="Enviar Dados" />
</form>
