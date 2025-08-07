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
    imagecopyresampled($nova_imagem,$imagem_original,0,0,0,0,$largura,$altura,$larguraOriginal,$alturaOriginal);
    //Inicia um buffer para guardar a imagem como texto binario
    //ob_start() -- Inicia o "output buffering" Guardando a saida
    ob_start();
    //imagejpeg() Envia a imagem para o output (que vai pro buffer)
    imagejpeg($nova_imagem);

    //OB_GET_CLEAN() -- Pegar o conteudo do buffer e limpa
    $dadosImagem = ob_get_clean();

    //libera a memoria usada pelas imagens
    //imagedestroy() -- limpa a memoria da imagem criada
    imagedestroy($novaImagem);
    imagedestoy($imagemOriginal);

    //retorna a imagem redimensionanda em formato binario
    return $dadosImagem
}
    //configuração do banco de dados
    $host='localhost';
    $dbname='armazena_imagem';
    $usuername='root';
    $password='';

    try{
        //conexao do banco usando pdo
        $pdo = new PDO("mysql:host=$host;dbname:$dbname",
        $username,)
    }
?>
