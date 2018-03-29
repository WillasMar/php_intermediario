<?php
echo abs(-10.6)."<br/>"; //retorna o número real
echo round(2.1)."<br/>"; //arredonda
echo ceil(3.6)."<br/>"; //arredonda sempre pra cima
echo floor(3.6)."<br/>"; //arredonda sempre pra baixo
echo rand(3,7)."<br/>"; //retorna um inteiro entre dois números

$lista = array("Willas","Diego","Lucas","Any");

$x = rand(0,3);

echo "O escolhido foi: ".$lista[$x];

?>