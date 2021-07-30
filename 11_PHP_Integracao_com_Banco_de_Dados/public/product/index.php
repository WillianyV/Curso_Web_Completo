<?php require_once("../../conexao/connection.php"); ?>

<?php
    //iniciando a sessão
    // session_start();
    // if(!(isset($_SESSION["user_portal"]))){
    //     header("location:login.php");
    // }
    //Determinar a localidade BR
    setlocale(LC_ALL, 'pt_BR');
    $_query = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena FROM produtos ";
    if(isset($_GET["produto"])){
        $_pesquisa = $_GET["produto"];
        $_query .= " WHERE nomeproduto LIKE '%{$_pesquisa}%' " ;   
    }
    $_result = mysqli_query($_conexao,$_query);    
    if(!$_result){
        die ("Falha na consulta");
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="../_css/estilo.css" rel="stylesheet">
        <link href="../_css/produtos.css" rel="stylesheet">
        <link href="../_css/produto_pesquisa.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?>
        
        <main> 
            <div id="janela_pesquisa">
                <form action="index.php" method="GET">
                    <input type="text" name="produto" placeholder="Pesquise o produto">
                    <input type="image" name="pesquisa" src="../_assets/botao_search.png">
                </form>
            </div>            
            <div id="listagem_produtos">
                <?php
                    while($linha = mysqli_fetch_assoc($_result)){
                ?> 
                    <ul>
                        <li class="imagem">
                            <a href="show.php?codigo=<?php echo $linha["produtoID"]?>">
                                <img src="../<?php echo $linha["imagempequena"]?>" alt="<?php echo $linha["nomeproduto"]?>">
                            </a>
                        </li>
                        <li><h3><?php echo $linha["nomeproduto"];?></h3></li>
                        <li>Entrega: <?php echo $linha["tempoentrega"];?> dias</li>
                        <li>Valor: R$ <?php echo $linha["precounitario"];?></li>
                    </ul>
                <?php
                    }
                ?>
            </div>
            
        </main>

        <?php include_once("../_incluir/rodape.php"); ?> 
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($_conexao);
?>