<?php 
session_start();
require_once 'conexao.php';

if(!isset($_SESSION['usuarios'])){
    header("Location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js"></script>
</head>
<body>
<ul>
        <li><a href="#">MENU </a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Usuario </a>
            <div class="dropdown-content">
                <a href="cadastrar.php">Cadastro</a>
                <a href="excluir.php">Excluir</a>
                <a href="alterar.php">Alterar</a>
                <a href="buscar.php">Buscar</a>
            </div>
        </li>
    
    </ul>
    <header>
    <div class="saudacao">
        <h2>Bem vindo, <?php echo $_SESSION['usuarios'];?>! Perfil: <h2>
    </div>

    <div class="logout">
        <form action="logout.php" method="POST">
            <button type="submit">Logout</button>
        </form>
    </div>
</header>

</body>
</html>