<?php session_start(); 

if(isset($_get['nome']) && $_get['nome'] !=''){
    $tarefa=array();
    $tarefa['nome'] = $_get['nome'];

if(isset($_get['descricao'])) {
    $tarefa['descricao'] =$_get['descricao'];

}else{
    $tarefa['descricao']= '';
}

if(isset($_get['prazo'])) {
    $tarefa['prazo'] =$_get['prazo'];

}else{
    $tarefa['prazo']= '';
}
$tarefa['prioridade'] = $_get['prioridade'];

if(isset($_get['concluida'])) {
    $tarefa['concluida'] =$_get['concluida'];

}else{
    $tarefa['concluida']= '';
}

$_SESSION['lista_tarefas'][] =$tarefa;
}

    if (array_key_exists('lista_tarefas', $_SESSION)){
        $lista_tarefas=$_SESSION['lista_tarefas'];
    }else{
        $lista_tarefas=[];
    }
        include "template.php"
        //include "template1.php";
        //session_destroy()
?>
