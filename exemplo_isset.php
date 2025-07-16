<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Xenia";
    $name = "NULL";
    if (isset($name)) {
        print "Essa linha esra sendo imprimida pois a variavel 'nome' possui algum valor.\nCaso não tivesse valor não seria imprimida";
    }
    ?>
</body>
</html>