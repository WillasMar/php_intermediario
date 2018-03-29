<?php

/*
function somar($x,$y){
	$soma = $x + $y;
	return $soma;
}

$a = 20;
$b = 20;
$result = somar($a,$b);

echo $a."+".$b."=".$result;
*/

/*
function nome(){
	$nome = "Willas";
	return $nome;
}

$nome = nome();

echo "Meu nome é: ".$nome;
*/

/*erro comum ao montar uma function, não retornar valor ou retornar errado, como no caso abaixo. A function imprime na tela e retornar outro valor.
*/
function nome(){

	echo "Willas";
	return "Fulano";
}

$nome = nome();

echo "Meu nome é: ".$nome;
?>