<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    #rand - gera um inteiro aleatorio
    $sorteio = rand( 0 , 5 );
    echo "Sorteado : $sorteio <hr>";
    #array_merge - Combins um ou mais arrays
    #range - Cria um array contemdo uma faixa de elementos
    #(inicio,fim, passo)
    $vetor = array_merge(range(0 , 10),
                        range( $sorteio, 10 , 2),
                        array( $sorteio ) );
    print_r($vetor);
    echo "<hr>";
    #embaralha
    shuffle($vetor);
    print_r($vetor);
    echo "<hr>";
    foreach( $vetor as $valor)
    {
        echo "O valor ",$valor , " tem 3 elementos. <br>";
    }
    ?>
</body>
</html>