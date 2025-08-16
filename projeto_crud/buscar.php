<?php
session_start();
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            // Exibe os dados do usuário com segurança
            $nome = htmlspecialchars($usuario['nome']); // Substitua 'nome' pelo nome correto da coluna
            $email = htmlspecialchars($usuario['email']);
            echo "<script>alert('Nome: $nome \\nEmail: $email'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Usuário não encontrado.'); window.location.href='buscar.php';</script>";
        }
    } else {
        echo "<script>alert('Erro ao buscar!');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h2>Cadastro:</h2>
    <form action="buscar.php" method="POST">


        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>
        </br>



        <button type="submit">buscar</button>
    </form>

    <p><a href="index.php">Menu principal</a>
</body>
</html>