<?php
require('conecta.php');

//Obtem o id Via get garantindo qu seja um numero inteiro
$id_imagem = isset($_GET['id'])? intval($_GET['id']) :0;

//Verifica se o id é valido(maior que zero)
if($id_imagem >0){
    //Cria uma query segura usando o prepared statement
    $queryExclusao= "DELETE FROM tabela_imagens where codigo = ?";

    //Prepare a query
    $stmt = $conexao->prepare($queryExclusao);
    $stmt->bind_param("i",$id_imagem); // Define o id como um inteiro
    
    //Executa a exclusão
    if($stmt->execute()){
        echo "Imagem excluida com sucesso!";
    }else{
        die("Erro ao excluir a imagem: ".$stmt->error);
    }
    $stmt->close();
}else{
    echo "ID invalido!";
}

//Redireciona para a index.php e garante que o script pare
header("Location: index.php");
exit();
?>