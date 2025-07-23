<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Fornecedor</title>
    <style>
                table {
            width: 80%;
            margin: 20px auto;
        }
        th  {
            border: 1px solid ;
            padding: 8px;
            text-align: center;
        }
        td {
            border: 1px solid ;
            padding: 8px;
            text-align: center;
        }
        </style>
</head>
<body>

<?php
session_start();

if (
    isset($_GET['nome1']) && isset($_GET['cnpj1']) && isset($_GET['email']) &&
    isset($_GET['endereco']) && isset($_GET['bairro']) && isset($_GET['cidade']) &&
    isset($_GET['cep1']) && isset($_GET['pais']) && isset($_GET['telefone1'])
) {
    // Cria um novo fornecedor
    $novoFornecedor = [
        'nome' => $_GET['nome1'],
        'cnpj' => $_GET['cnpj1'],
        'email' => $_GET['email'],
        'endereco' => $_GET['endereco'],
        'bairro' => $_GET['bairro'],
        'cidade' => $_GET['cidade'],
        'cep' => $_GET['cep1'],
        'pais' => $_GET['pais'],
        'telefone' => $_GET['telefone1']
    ];

    // Adiciona ao array de sessão
    $_SESSION['fornecedores'][] = $novoFornecedor;
}

// Recupera os fornecedores armazenados
$fornecedores = $_SESSION['fornecedores'] ?? [];
?>

    <h1 style="text-align:center;">Dados dos Fornecedores</h1>
    <?php if (count($fornecedores) > 0): ?>
        <table>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>CEP</th>
                <th>País</th>
                <th>Telefone</th>
            </tr>
            <?php foreach ($fornecedores as $fornecedor): ?>
                <tr>
                    <td><?= ($fornecedor['nome']) ?></td>
                    <td><?= ($fornecedor['cnpj']) ?></td>
                    <td><?= ($fornecedor['email']) ?></td>
                    <td><?= ($fornecedor['endereco']) ?></td>
                    <td><?= ($fornecedor['bairro']) ?></td>
                    <td><?= ($fornecedor['cidade']) ?></td>
                    <td><?= ($fornecedor['cep']) ?></td>
                    <td><?= ($fornecedor['pais']) ?></td>
                    <td><?= ($fornecedor['telefone']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
       <? echo "Nenhum fornecedor registrado ainda." ?>
    <?php endif; ?>

</body>
</html>