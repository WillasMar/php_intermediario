<?php

/*
session_start();

$_SESSION["teste"] = "Willas Mar";

echo "A sessão foi feita";
echo "<br/>";
echo "Meu nome é: ",$_SESSION["teste"];
*/

setcookie("meuteste","fulano de tal", time()+3600);

echo "Cookie criado";
echo "<br/>";
echo "Meu cookie é: ",$_COOKIE["meuteste"];

?>