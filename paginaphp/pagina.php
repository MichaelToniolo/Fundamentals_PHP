<?php

if(isset($_POST['numero1'])?$_POST['numero']= $numero1:"");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- PAGINA PARA FAZER SOMA ENTRE NUMEROS -->
    <form action="pagina.php" method="post">
        <label>DIGITE UM NUMERO</label>
        <input type="number" name="numero1">
        <br>
        <label>DIGITE OUTRO NUMERO</label>
        <input type="number" name="numero2">
        <br>
        <label>O RESULTADO É: <?=$numero1 + $numero2?></label>
        <br>
        <input type="submit" value="SOMAR">
    </form>
</body>
</html>