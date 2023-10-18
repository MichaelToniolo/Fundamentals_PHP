<?php
//WHILE
$numero = 0;
while ($numero <= 10) {
    echo (" " . $numero++ . " ");
}

echo "<br>";

//SWITCH
$porta = "Verde";
switch ($porta) {
    case "Azul":
        echo "VOCE ENCONTROU UM HOBBIT<br>";
        echo "Olá aventureiro! bla bla bla";
        break;
    case "azul":
        echo "VOCE ENCONTROU UM HOBBIT<br>";
        echo "Olá aventureiro! bla bla bla";
        break;
    case "Verde":
        echo "VOCE ENCONTROU UM GUAXINIM<br>";
        echo "LANÇAR GUAXINIM?";
        $lancamento = "s";
        break;
    default:
        echo "SELECIONE UMA OPÇÃO VIÁVEL";
}

echo ("<br>");
echo ("<br>");

//DO WHILE
$variavel1 = 4;
do {
    echo $variavel1++;
} while ($variavel1 <= 10);

echo ("<br>");

//LAÇO FOR
for ($variavel1 = 0; $variavel1 <= 10; $variavel1++) {
    echo $variavel1;
}
