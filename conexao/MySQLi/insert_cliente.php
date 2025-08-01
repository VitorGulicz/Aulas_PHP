<?php
require_once "conexao.php";
$conexao=conectadb();
$nome="Vitin Gulicz";
$endereco="Vila Hobbit";
$telefone="(47)40028922";
$email ="vitu@gmail.com";
//Prepara a consulta SQL usando "prepare()" para evitar SQL Injection
$stmt=$conexao->prepare("INSERT INTO cliente(nome, endereco, telefone, email)VALUES(?,?,?,?)");
//Associa os parametros aos valores da consulta
$stmt->bind_param("ssss",$nome,$endereco,$telefone,$email);
//Executa a inserção
if ($stmt->execute()){
    echo"Cliente adicionado com sucesso!";
}else{
    echo"Erro ao adicionar cliente: ".$stmt->error;
}

$stmt->close();
$conexao->close();?>