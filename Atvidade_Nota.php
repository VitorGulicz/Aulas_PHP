<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nota = 6.8;
    $aprovado= ($nota >= 7);
    if ($aprovado)
    {
        echo"Aluno aprovado";
    }
    $exame=($nota >3 && $nota<7);
    if ($exame)
    {
        echo"Aluno em exame";
    }
    $reprovado =($nota <=3);
    if ($reprovado)
    {
        echo"Reprovado";
    }
    ?>
</body>
</html>