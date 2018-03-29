<?php

	
	echo "<pre>";
	print_r($_FILES);
	$enviados = array();
	$naoEnviados = array();
	$auxEnviados = 0;
	$auxNaoEnviados = 0;

	if(isset($_FILES['arquivo']) && empty($_FILES['arquivo']) == false){
		if (count($_FILES['arquivo']['tmp_name']) > 0) {

			for ($i=0; $i < count($_FILES['arquivo']['tmp_name']); $i++) { 
				
				if(empty($_FILES['arquivo']['tmp_name'][$i]) == false){

					$nomeArquivo = rand(0,999).date("_d-m-Y_h-i-s_").$_FILES['arquivo']['name'][$i];

					move_uploaded_file($_FILES['arquivo']['tmp_name'][$i], "arquivo/".$nomeArquivo);

					$enviados[$auxEnviados] = $_FILES['arquivo']['name'][$i];
					$auxEnviados++;

				}else{
					$naoEnviados[$auxNaoEnviados] = $_FILES['arquivo']['name'][$i];
					$auxNaoEnviados++;
				}
			}			
			if($auxEnviados > 0){
				echo "<b>Arquivos enviados:</b><p>";
				for ($i=0; $i < $auxEnviados; $i++) { 
					echo $enviados[$i]."<br>";
				}
			}

			echo "<p>";
			
			if($auxNaoEnviados > 0){
				echo "<b>Arquivos não enviados:</b><p>";
				for ($i=0; $i < $auxNaoEnviados; $i++) { 
					echo $naoEnviados[$i]."<br>";
				}
			}

		}
		
	}		

?>