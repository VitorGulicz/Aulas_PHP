<?php
//Funcao para dimensionar a imagem
function redimensionarImagem($imagem,$largura,$altura){
    //Obtem as dimensoes originais da imagem
    //getimagesize() retorna a altura e largura de uma imagem
    list($larguraOriginal,$alturaOriginal)=getimagesize($imagem);

    //Cria uma nova imagem em branco com as novas dimensoes
    //imagecreatetruecolor() cria uma nova imagem em branco em alta qualidade
    $novaImagem = imagecreatetruecolor($largura,$altura);

    //Carrega a imagem original(jpeg) a partir do arquivo
    //imagecreatefromjpeg() Cria a imagem php a partir de um jpeg
    $imagemOriginal = imagecreatefromjpeg($imagem);

    //Copia e redimensiona a imagem original para a nova
    //imagecopyresampled() -- Copia e redimensionamento e suavização
    imagecopyresampled($novaImagem,$imagemOriginal,0,0,0,0,$largura,$altura,$larguraOriginal,$alturaOriginal);
    //Inicia um buffer para guardar a imagem como texto binario
    //ob_start() -- Inicia o "output buffering" Guardando a saida
    ob_start();
    //imagejpeg() Envia a imagem para o output (que vai pro buffer)
    imagejpeg($novaImagem);

    //OB_GET_CLEAN() -- Pegar o conteudo do buffer e limpa
    $dadosImagem = ob_get_clean();

    //libera a memoria usada pelas imagens
    //imagedestroy() -- limpa a memoria da imagem criada
    imagedestroy($novaImagem);
    imagedestroy($imagemOriginal);

    //retorna a imagem redimensionanda em formato binario
    return $dadosImagem;
}
    //configuração do banco de dados
    $host='localhost';
    $dbname='armazena_imagem';
    $username='root';
    $password='';

    try{
        //conexao do banco usando pdo
        $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_FILES['foto'])){

            if($_FILES['foto']['error'] == 0){
                $nome = $_POST['nome'];
                $telefone= $_POST['telefone'];
                $nomeFoto= $_FILES['foto']['name']; //Pega o nome original do arquivo
                $tipoFoto = $_FILES['foto']['type']; //Pega o tipo 'mime' da imagem
                
                //Redimensiona a imagem
                //O codigo abaixo cuja variavel é tmp_name é o caminho temporario do arquivo
                $foto = redimensionarImagem($_FILES['foto']['tmp_name'],300,400);
                
                //Insere no banco de dados usando o SQL prepared
                $sql = "INSERT into funcionarios(nome,telefone,nome_foto,tipo_foto,foto)
                VALUES(:nome,:telefone,:nome_foto,:tipo_foto,:foto)";
                $stmt = $pdo->prepare($sql); // Responsavel por prerarar a query contra sql injector
                $stmt->bindparam(':nome',$nome); //Liga os parametros às variaveis
                $stmt->bindparam(':telefone',$telefone); //Liga os parametros às variaveis
                $stmt->bindparam(':nome_foto',$nomeFoto); //Liga os parametros às variaveis
                $stmt->bindparam(':tipo_foto',$tipoFoto); //Liga os parametros às variaveis
                $stmt->bindparam(':foto',$foto,PDO::PARAM_LOB); //LOB = Large Object Usado para os dados binarios como imagem

                if ($stmt->execute()){
                    echo"Funcionario cadastrado com sucesso";
                }else{
                    echo"Erro ao cadastrar o funcionario";
                }
                
            }else{
                echo "Erro ao fazer upload da foto! Codigo: ".$_FILES['foto']['error'];
            }
        }
    }catch(PDOException $e){
        echo "Erro. ".$e->getMessage();
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Imagens</title>
</head>
<body>
    <h1>Lista de Imagens</h1>

    <a href="consulta_funcionario.php">Listar Funcionarios</a>
</body>
</html>
