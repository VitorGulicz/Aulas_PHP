<?php
//configuração do banco de dados
$host='localhost';
$dbname='armazena_imagem';
$username='root';
$password='';

try{
    //conexao do banco usando pdo
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //Recupera todos os funcionarios do banco de dados
    $sql= "SELECT id,nome FROM funcionario";
    $stmt = pdo->prepare($sql);
    $stmt->execute();
    $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC); //Busca todos os resultados como uma matriz associativa

    //Verifica se foi solicitado a exclusão de um funcionario
    if($_SERVER['REQUEST_METHOD']== 'POST' && isset ($_POST['excluir_id'])){
        $excluir_id = $_POST['excluir_id'];
        $sql_excluir = "DELETE FROM funcionarios WHERE id=:id";
        $stmt_excluir = $pdo->prepare($sql_excluir);
        $stmt_excluir->bindparam('id',$excluir_id,PDO::PARAM_INT);
        $stmt_excluir->execute();

        //Redireciona para evitar reenvio do formulario
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
}catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>