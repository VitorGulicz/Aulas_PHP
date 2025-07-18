<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['nome1']) && isset($_GET['cnpj1']) && isset($_GET['email']) && isset($_GET['endereco']) && isset($_GET['bairro']) && isset($_GET['cidade']) && isset($_GET['cep1']) && isset($_GET['pais']) && isset($_GET['telefone1']))
    {
        echo "<h1>INFORMAÇÔES DO FORNECEDOR</h1>";
        echo "Nome do fornecedor: ".$_GET['nome1'];
        echo "<br><br>";
        echo "CNPJ do fornecedor: ".$_GET['cnpj1'];
        echo "<br><br>";
        echo "Email do fornecedor: ".$_GET['email'];
        echo "<br><br>";
        echo "Endereço do fornecedor: ".$_GET['endereco'];
        echo "<br><br>";
        echo "Bairro do fornecedor: ".$_GET['bairro'];
        echo "<br><br>";
        echo "Cidade do fornecedor: ".$_GET['cidade'];
        echo "<br><br>";
        echo "CEP do fornecedor: ".$_GET['cep1'];
        echo "<br><br>";
        echo "País do fornecedor: ".$_GET['pais'];
        echo "<br><br>";
        echo "Telefone do fornecedor: ".$_GET['telefone1'];
    }
    ?>
</body>
</html>