<?php
require_once "conexao.php";
$conexao=conectadb();
$nome="Vitin Stark";
$endereco="Vila Hobbit";
$telefone="(47)40028922";
$email ="vitu@gmail.com";

//Define o ID do cliente a ser atualizado
$id_cliente=3;
$stmt= $conexao->prepare("UPDATE cliente SET nome=?,endereco=?,telefone=?,email=? WHERE id_cliente=?");
//Associa os parametros aos valores da consulta
$stmt->bind_param("ssssi",$nome,$endereco,$telefone,$email,$id_cliente);
//Executa a atualização
if($stmt->execute()){
    echo "Cliente atualizado com sucesso!";
}else{
    echo "Erro ao atualizar cliente: ".$stmt->error;}
    $stmt->close();
    $conexao->close();?>