<?php
$servidor="localhost";
$usuario="root";
$senha="";
$banco="empresa_teste";

//conexao usando MySQLI sem proteção contra SQL Injection

$conexao=new mysqli($servidor,$usuario,$senha,$banco);

//verifica se há erro na conexao
if ($conexao->connect_error){
    die("Erro de conexao: ".$conexao->connect_error);
}
//captura os dados do formulario(nome do usuario)
$nome=$_POST["nome"];

//Prepara a consulta SQL segura
$stmt=$conexao->prepare("SELECT * FROM cliente_teste where nome=?");
$stmt->bind_param("s",$nome);
$stmt->execute();
$result=$stmt->get_result();

//se houver resultado, o login é considerado bem sucedido
if($result->num_rows > 0){
    header("Location: area_restrita.php");
    //Garante que o codigo pare aqui para evitar execução indevida
    exit();
}else{
    echo"Nome não encontrado.";
}
//Fecha conexao
$stmt->close();
$conexao->close();
?>