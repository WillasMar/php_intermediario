<?php
$arrayName = array(
	"nome" => "willas",
	"sobrenome" => "Mar",
	"idade" => 25,
	"masculino" => "masculino"
 );

$arrayName2 = array("willas" , "Mar");

$arrayName["idade"] = 30;

$arrayName2[0] = "Willas";

$produto = array(
	"produto1" => array("descricao" =>'calça',
						"valor" => 25.3 ),
	"produto2" => array("descricao" =>'meia',
				"valor" => 5.0 )
	);

$produto["produto3"] = array("descricao" =>'sapato',
				"valor" => 100.99 );
$produto[]= array('teste');
$produto["produto1"] = array("descricao"=>'bermuda',
							"valor"=>80.0);

//echo $arrayName["nome"]
//echo $arrayName2[0];
//echo $arrayName["idade"];
//print_r($arrayName["idade"]); //exibe todo o array, índice e informação
print_r{$produto(produto1["descricao"])};
//echo $produto[produto1["descricao"];
//print_r($produto);

?>