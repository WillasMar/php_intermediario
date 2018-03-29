<?php

	$arquivo = $_FILES['arquivo'];

	if(isset($arquivo['tmp_name']) && empty($arquivo['tmp_name']) == false){

		$nomeArquivo = rand(0,999).date("_d-m-Y_h-i-s_").$arquivo['name'];

		move_uploaded_file($arquivo['tmp_name'], "arquivo/".$nomeArquivo);

		echo "Arquivo enviado com sucesso!";
	}
?>