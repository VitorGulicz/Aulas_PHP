
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de formulario</title>
    <style rel="stylesheet">
        *,*:before,*:after{
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .clear{clear:both}
    body{
        font:18px/1.4 arial, sans-serif;
        color: #333;
        background: #ccc;
    }

    #tudo{
        width:100%;
        max-width: 1200px;
        min-width: 860px;
        margin: 0 auto;
        background: #fff;
    }

    h1,h2,h3,h4,h5,h6 {color:#036;}

    .topo_header{
        background: #036;
        padding: 5px 20px;
    }

    .topo_header h1{
        font-size: 36px;
        margin: 4px 0 2px 0;
    }

    .topo_header a{
        color: #fff;
        text-decoration: nome;
    }

    .topo_header h2{
        font-size: 20px;
        margin: 2px 0 4px 0;
        color: #fff;
    }

    .principal{
        width: 100%;
        padding: 20px 15px;
    }

    .rodape{
        background: #036;
        color: #fff;
        padding: 5px 0;
        text-align: center;
    }

    pre{font-size: 14px;}
    @media(max-width:1040px){
        pre{font-size: 12;}
    }


/* Formulario */

    </style>
</head>
<body class="home"> 
<div id="tudo">
    <div class="topo">
        <header class="topo_header">
            <hgroup>
                <h1><a>Formularios</a></h1>
            </hgroup>
        </header>
    </div> <!--.topo-->

    <div class="principal">
        <main>
            <section>
                <h1>Cadastro de produtos</h1>
<form action="formulario.php" method="post">
    <fieldset>
        <legend>Dados do Produto</legend>
        <label>Nome do produto:<input type="text" name="nome"></label>
        <br/><br/>
        <label>SKU do produto:<input type="text" name="sku"></label>
        <br/><br/>
        <label>Quantidade do Produto:<input type="text" name="qntd"></label>
        <br/><br/>
        <label>Preço do produto:<input type="text" name="preco"></label>
        <br/><br/>
        <input type="submit" value="Cadastrar">
    </fieldset>

    <fieldset>
    <legend>Informações Cadastradas</legend>
    <div class="cadastro">
    <?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome  = $_POST['nome'];
    $sku  = $_POST['sku'];
    $qntd  = $_POST['qntd'];
    $preco  = $_POST['preco'];
    
    echo "Nome : $nome<br/> <br/>";
    echo "SKU : $sku<br/> <br/>";
    echo "Quantidade : $qntd<br/> <br/>";
    echo "Preço : $preco<br/> <br/>";
}
?>
</fieldset>
    </fieldset>
</form>
            </section>
        </main>
    </div> <!-- Principal -->

    <div class="rodape">
        <footer>
            <small> VITOR GULICZ</small>
        </footer>
    </div><!--./rodape-->
</div><!-- /.tudo-->

</body>
</html>


