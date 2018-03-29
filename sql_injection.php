<?php
	
	//como mostra o exemplo mais abaixo, ele adiciona contra barras separando o conteúdo
	$autor = addcslashes($_POST["autor"]);

	$sql = "select * from posts where autor = 'willas\mar'";

?>