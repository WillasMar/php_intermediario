<?php

$nome = "Willas Mar";

$x = explode(" ", $nome); //divide a string onde existir espaço

print_r("Nome: ".$x[0]."<br/>"."Sobrenome: ".$x[1]."<br/>");

$array = array("Willas","Mar");

$nome = implode(" ", $array); //junta string acrescentando um espaço

echo "Nome completo: ".$nome."<br/>";

$x = number_format(348.282, 2); //retorna a quantidade de casas decimais conforme parametro após a vírgula

echo $x."<br/>";

$x = number_format(3400.822, 2, ",","."); //formata o numero. sendo que o primeiro parametro entre aspas é a da casa decimal, e o segundo da casa de milhar

echo $x."<br/>";

$texto = "O rato roeu a roupa!";
echo "Texto sem trocar é: ".$texto."<br/>";
$troca = str_replace("roeu", "comeu", $texto); //faz a troca do texto
echo "Texto trocado é: ".$troca."<br/>";

echo strtolower("WILLAS")."<BR/>"; //coloca texto em minuscula
echo strtoupper("willas")."<br/>"; //coloca texto em maiuscula

$texto = "Willas";
$x = substr($texto, 0, 3); //seleciona string a partir da posição 3 começando do 0
echo $x."<br/>";

$nome = 'willas mar gonzaga';
echo ucfirst($nome)."<br/>"; //coloca primeiro nome em maiusculo
echo ucwords($nome)."<br/>";//coloca todo nome em maiusculo

?>