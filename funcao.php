<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
# index 0123456789012345
$name = "Stefanie Hatcher";
echo $name, " = Nome <br/> <br/>";

$length = strlen($name);
echo $length, " = Tamanho do nome <br/> <br/>";

$cmp = strcmp($name, "Brian Le");
echo $cmp, " = Verifica qual dos dois nomes tem mais (1=primeira maior | -1=segunda maior | 0=iguais) <br/> <br/>";

$index = strpos ($name, "e");
echo $index, " = Indíce da letra 'e' no nome 'Stefanie' <br/> <br/>";

$first = substr($name, 9, 5);
echo $first, " = Imprime o nome de acordo com o indíce <br/> <br/>";

$name = strtoupper($name); 
echo $name, " = Coloca o nome em capslock <br/> <br/>";

    ?>
</body>
</html>