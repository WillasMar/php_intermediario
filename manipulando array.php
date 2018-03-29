<?php

$array = array(
"nome"=>"Willas",
"idade"=>25,
"cidade"=>"Janauba",
"estado"=>"MG"
	);

$array2 = array_keys($array); //salva apenas as chaves
print_r($array2);
echo "<br/>";

$array3 = array_values($array); //salva apenas os valores
print_r($array3);
echo "<br/>";

$array4 = $array;
array_pop($array4); //remove o último registro
print_r($array4);
echo "<br/>";

$array5 = $array;
array_shift($array5); //remove o primeiro registro
print_r($array5);
echo "<br/>";

$array6 = array("Willas","Any","Diego","Lucas");
asort($array6); //ordema por ordem alfabética
print_r($array6);
echo "<br/>";

$array7 = $array6;
arsort($array7);
print_r($array7); //ordena por ordem decrescente
echo "<br/>";

$array8 = array(4,2,1,3);
asort($array8); //ordema por ordem crescente
print_r($array8);
echo "<br/>";

$array9 = $array8;
arsort($array8);
print_r($array8); //ordena por ordem decrescente
echo "<br/>";

echo "Total de registros: ".count($array9); //retorna quantos registros possui o array
echo "<br/>";

$vencedor = array("Willas","Diego","Lucas","Any");
if(in_array("Lucas", $vencedor)){ //verifica se existe Lucas
	echo "O vencedor é Lucas";
}else echo "Não existe vencedor";
echo "<br/>";



?>