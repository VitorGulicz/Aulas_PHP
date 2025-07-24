<?php session_start(); ?>

<?php
if(isset($_get['nome']) && $_get['nome'] !=''){
    $tarefa=array(

    $tarefa['nome'] = $_get['nome']
    )
}
if(isset($_get['descricao'])) {
    $tare
}
$lista_tarefas = array();
    if (isset($_GET['nome'])){
        $_SESSION['lista_tarefas'][] = $_GET['nome'];
    }
        $lista_tarefas = array();

    if (isset($_SESSION['lista_tarefas'])){
        $lista_tarefas=$_SESSION[
            'lista_tarefas'];
        }else{
            $lista_tarefas= array();
        }
        include "template.php"
        //include "template1.php";
        //session_destroy()
?>
