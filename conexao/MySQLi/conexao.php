<?php
//habilita relatorio detalhado de erros no mysqli
mysqli_report(MYSQLI_REPORT_ERROR| MYSQLI_REPORT_STRICT);

function conectadb(){
    $endereco="localhost";
    $usuario="root";
    $senha="";
    $banco="empresa";

try{
    //criacão de conexao
    $con=new mysqli($endereco, $usuario, $senha, $banco);
    //Definição do conjunto de caracteres para evitar problemas de acentuação
    $con->set_charset("utf8mb4");
    return $con;
}catch(Exception $e){
    //Exibe a mensagem de erro e eencerera o script
die("Erro na conexão: ".$e->getMessage());
}
}