<?php
//inclui o arquivo de conexão com o bd
require_once "conexao.php";
$conexao= conectadb();
//Deifne a consulta SQL para buscar clientes
$sql= "SELECT id_cliente,nome,email FROM cliente";
//executa a consulta no banco
$result = $conexao->query($sql);
//Verifica se ha registros retornados
if($result->num_rows > 0) {
    //Itera sobre os resultados e exibe cada cliente encotrado
    while($linha = $result-> fetch_assoc()){
        echo "ID: ".$linha["id_cliente"]." - Nome: ".$linha["nome"]." - Email: ".$linha["email"]."<br/>";}
    }else{
        echo "Nenhum resultado encontrado.";
    }
        $conexao->close();
      ?>