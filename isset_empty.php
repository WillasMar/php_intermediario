<?php

	$nome="";


	if(isset($nome)){

		echo $nome."<br><br>";

	}else{
		echo "A variável não existe.<br><br>";
	}

	if(!empty($nome)){

		echo $nome."<br><br>";

	}else{
		echo "A variável não possui dados.<br><br>";
	}

	if(isset($nome) && !empty($nome)){

		echo $nome."<br><br>";

	}else{
		echo "A variável não existe ou a variável não possui dados.<br><br>";
	}
		

?>