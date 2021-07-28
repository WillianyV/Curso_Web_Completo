<?php require_once("../../conexao/connection.php"); ?>
<?php
    
    if(isset($_GET["codigo"])){
        $produtoID = $_GET["codigo"];
    }else{
        Header("location: index.php");
    }
    
    $_query = "SELECT * FROM produtos WHERE produtoID = {$produtoID} ";
    
    $_result = mysqli_query($_conexao,$_query);

    if(!$_result){
        die("Falha ao consultar o Banco de Dados");
    }else{
        $_dados_detalhes = mysqli_fetch_assoc($_result);

        $_produtoID = $_dados_detalhes["produtoID"];
        $_nome_produto = $_dados_detalhes["nomeproduto"];
        $_descricao = $_dados_detalhes["descricao"];
        $_codigo_barra = $_dados_detalhes["codigobarra"];
        $_tempo_entrega = $_dados_detalhes["tempoentrega"];
        $preco_revenda = $_dados_detalhes["precorevenda"];
        $preco_unitario = $_dados_detalhes["precounitario"];
        $_estoque = $_dados_detalhes["estoque"];
        $_imagem_grande = $_dados_detalhes["imagemgrande"];
        // $_imagem_pequena = $_dados_detalhes["imagempequena"];
        // $_descontinuado = $_dados_detalhes["descontinuado"];
        // $_fornecedorID = $_dados_detalhes["fornecedorID"];
        // $_categoriaID = $_dados_detalhes["categoriaID"];
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produto_detalhe.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?>
        
        <main> 
            <div id="detalhe_produto">
                <ul>
                    <li class="imagem"><img src="<?php echo $_imagem_grande?>" alt="<?php echo $_nome_produto?>"></li>
                    <li><h2><?php echo $_nome_produto?></h2></li>
                    <li>Descrição: <?php echo $_descricao?></li>
                    <li>Cógido de Barra: <?php echo $_codigo_barra?></li>
                    <li>Entrega: <?php echo $_tempo_entrega?> dias</li>
                    <li>Valor de Revenda: <?php echo  real_format($preco_revenda)?></li>
                    <li>Valor de Venda: <?php echo  real_format($preco_unitario)?></li>
                    <li>Estoque: <?php echo $_estoque?></li>                  
                </ul>
            </div>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?> 
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($_conexao);
?>