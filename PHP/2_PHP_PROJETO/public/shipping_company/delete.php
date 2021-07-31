<?php require_once("../../conexao/connection.php"); ?>
<?php
    //delete
    if(isset($_POST["excluir"])){
        $tID =  $_POST["transportadoraID"];
        $_delete_query = "DELETE FROM transportadoras WHERE transportadoraID = {$tID}";
        $_delete_result = mysqli_query($_conexao,$_delete_query);
        if(!$_delete_result){
            die("Falha na consulta ao banco de dados");
        }else{
            header("location:index.php");
        }
    }
    //consulta no bd
    if(isset($_GET["codigo"])){
        $_select_query = "SELECT * FROM transportadoras WHERE transportadoraID = {$_GET['codigo']}";
        $_select_result = mysqli_query($_conexao,$_select_query);
        $_data_transportadora =  mysqli_fetch_assoc($_select_result);
        if(!$_select_result){
            die("Falha a se conectar ao Banco de dados");
        }        
    }
    //CONSULTA AOS ESTADOS
    $_query = "SELECT * FROM estados";
    $_result = mysqli_query($_conexao,$_query);    
    if(!$_result){
        die("Falha a se conectar com o Banco de dados");
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="../_css/estilo.css" rel="stylesheet">
        <link href="../_css/alteracao.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?> 
        
        <main>  
        <?php include_once("../_incluir/nav.php"); ?> 
            <div id="janela_formulario">
                <form action="delete.php" method="POST">
                    <h2>Excluir transportadora</h2>
                    <input type="hidden" name="transportadoraID" value="<?php echo $_data_transportadora["transportadoraID"]?>">
                    <label for="nometransportadora">Nome da Transportadora</label>
                    <input type="text" name="nometransportadora" value="<?php echo $_data_transportadora["nometransportadora"]?>" id="nometransportadora">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" value="<?php echo $_data_transportadora["endereco"]?>" id="endereco">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" value="<?php echo $_data_transportadora["telefone"]?>" id="telefone">
                    <input type="submit" name="excluir" value="Excluir">
                </form>
            </div>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($_conexao);
?>