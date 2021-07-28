<?php require_once("../../conexao/connection.php"); ?>

<?php
    $_query = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena  FROM produtos ";
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
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produtos.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?>
        
        <main> 
            <div id="listagem_produtos">
                <?php
                    while($linha = mysqli_fetch_assoc($_result)){
                ?> 
                    <ul>
                        <li class="imagem"><img src="<?php echo $linha["imagempequena"]?>" alt="<?php echo $linha["nomeproduto"]?>"></li>
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