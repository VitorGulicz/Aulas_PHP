<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['nome']) && isset($_GET['cnpj']) && isset($_GET['email']) && isset($_GET['endereco']) && isset($_GET['bairro']) && isset($_GET['cidade']) && isset($_GET['cep']) && isset($_GET['pais']) && isset($_GET['telefone']))
    {
        echo "Nome do fornecedor: ".$_GET['nome'];
        echo "<br><br>";
        echo "CNPJ do fornecedor: ".$_GET['cnpj'];
        echo "<br><br>";
        echo "Email do fornecedor: ".$_GET['email'];
        echo "<br><br>";
        echo "Endereço do fornecedor: ".$_GET['endereco'];
        echo "<br><br>";
        echo "Bairro do fornecedor: ".$_GET['bairro'];
        echo "<br><br>";
        echo "Cidade do fornecedor: ".$_GET['cidade'];
        echo "<br><br>";
        echo "CEP do fornecedor: ".$_GET['cep'];
        echo "<br><br>";
        echo "País do fornecedor: ".$_GET['pais'];
        echo "<br><br>";
        echo "Telefone do fornecedor: ".$_GET['telefone'];
    }
    ?>
</body>
</html>