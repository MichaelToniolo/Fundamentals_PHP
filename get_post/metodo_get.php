<?php
##USANDO O METODO GET##
if(isset($GET['login'])){
    echo $_GET['login'];
    
}
if(isset($GET['senha'])){
    echo $_GET['senha'];
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
    <form action="metodo_get.php" method="get">
        <input type="text" name="login" placeholder="LOGIN">
        <br>
        <input type="password" name="senha" placeholder="SENHA">
        <br>
        <input type="submit" value="RODAR">
    </form>
</body>
</html>