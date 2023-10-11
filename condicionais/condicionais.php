<?php


$var1 = 3;
$var2 = "3";

#CONDICIONAL DE IGUALDADE (COMPLETA)
if($var1 == $var2){
    echo("SÃO AS MESMAS PESSOAS");
}
else{
    echo("NÃO SÃO AS MESMAS PESSOAS");
}

echo("<br><br>");


#CONDICIONAL QUE VERIFICA MESMO DATA TYPE
if($var1 === $var2){
    echo("MESMO DATA TYPE");
}
else{
    echo("DATA TYPE DIFERENTE");
}

echo("<br><br>");

##OPERADOR TERNÁRIO##
echo($var1 === $var2?"É IGUAL":"É DIFERENTE");


?>