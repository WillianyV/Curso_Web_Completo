<?php require_once("../../conexao/connection.php"); ?>
<?php
    //atualizar no DB
    if(isset($_POST["nometransportadora"])){
        $tID =  $_POST["transportadoraID"];
        $nometransportadora =  $_POST["nometransportadora"];
        $endereco =  $_POST["endereco"];
        $telefone =  $_POST["telefone"];
        $cidade =  $_POST["cidade"];
        $estadoID =  $_POST["estados"];
        $cep =  $_POST["cep"];
        $cnpj =  $_POST["cnpj"];

        $_update_query = "UPDATE transportadoras ";
        $_update_query .= " SET ";
        $_update_query .= " nometransportadora = '{$nometransportadora}', ";
        $_update_query .= " endereco = '{$endereco}', ";
        $_update_query .= " telefone = '{$telefone}', ";
        $_update_query .= " cidade = '{$cidade}', ";
        $_update_query .= " estadoID = {$estadoID}, ";
        $_update_query .= " cep = '{$cep}', ";
        $_update_query .= " cnpj = '{$cnpj}' ";
        $_update_query .= " WHERE transportadoraID = {$tID} ";

        $_update_result = mysqli_query($_conexao,$_update_query);
        if(! $_update_result){
            die("Falha ao se conectar ao banco de dados");
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
            die("Fala a se conectar ao Banco de dados");
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
                <form action="edit.php" method="POST">
                    <h2>Alteração de transportadoras</h2>
                    <input type="hidden" name="transportadoraID" value="<?php echo $_data_transportadora["transportadoraID"]?>">
                    <label for="nometransportadora">Nome da Transportadora</label>
                    <input type="text" name="nometransportadora" value="<?php echo $_data_transportadora["nometransportadora"]?>" id="nometransportadora">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" value="<?php echo $_data_transportadora["endereco"]?>" id="endereco">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" value="<?php echo $_data_transportadora["telefone"]?>" id="telefone">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" value="<?php echo $_data_transportadora["cidade"]?>" id="cidade">
                    <label for="estados">Estados</label>
                    <select name="estados" id="estados">  
                        <?php
                            $_my_state = $_data_transportadora["estadoID"];
                            while($_linha = mysqli_fetch_assoc($_result)){
                                $_estados_br = $_linha["estadoID"];
                                if($_my_state == $_estados_br ){
                        ?> 
                                    <option value="<?php echo $_linha["estadoID"]?>" selected>
                                        <?php echo $_linha["nome"]?>
                                    </option>
                        <?php
                                }else{
                                ?>
                                    <option value="<?php echo $_linha["estadoID"]?>">
                                        <?php echo $_linha["nome"]?>
                                    </option>
                                <?php    
                                }
                            }
                        ?>                      
                    </select>
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" value="<?php echo $_data_transportadora["cep"]?>" id="cep">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" name="cnpj" value="<?php echo $_data_transportadora["cnpj"]?>" id="cnpj">
                    <input type="submit" value="Atualizar">
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