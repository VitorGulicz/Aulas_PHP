<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$j=1;
while ($j<=10){
    $i=1;
    while ($i<=10){

    echo "$j x $i = ",$i*$j," <br><br>";
    $i++;
    }
    $j++;
    echo"<br><br>";
}
?>
</body>
</html>