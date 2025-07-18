<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $texto = file_get_contents("texto.txt");
    echo nl2br($texto)."<br>";
    $texto= $texto. " extra";
    echo nl2br($texto)."<br>";
    file_put_contents("texto.txt",$texto); #grava uma string em ym arquivo susbtituindo qualquer conteudo anterior
    ?>
</body>
</html>