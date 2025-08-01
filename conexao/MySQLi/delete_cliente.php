<?php
require_once "conexao.php";
$conexao=conectardb();
//define o id do cliente a ser excluido
$id_cliente=3;
$stmt=$conexao->prepare("DELETE FROM cliente WHERE id_cliente=?");
//Associa o parametro com o valor da consulta
$stmt->bind_param("i",$id_cliente);
//Executa a exclusão
if($stmt->execute()){
    echo"Cliente removido com sucesso!";
}else{
    echo "Erro ao remover cliente: ".$stmt->error;
}
$stmt->close();
$conexao->close();
?>