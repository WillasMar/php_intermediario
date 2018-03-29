<?php

$nome = "Willas";
$nome2 = md5($nome);
$nome3 = base64_encode($nome);
$nome4 = base64_decode($nome3);

echo $nome;
echo "<br/>";
echo $nome2;
echo "<br/>";
echo $nome3;
echo "<br/>";
echo $nome4;

?>