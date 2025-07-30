<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    #File_ignore_new_lines ignorar o \n de cada linha
    $linhas = file ("texto.txt", FILE_IGNORE_NEW_LINES);
    var_dump($linhas);
    foreach ($linhas as $linhas_num => $linhas){
        echo "Linha #{$linhas_num} : ".$linhas." <br>";
    }
    ?>
</body>
</html>