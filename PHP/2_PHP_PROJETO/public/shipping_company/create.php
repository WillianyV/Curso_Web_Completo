<?php require_once("../../conexao/connection.php"); ?>
<?php
    //inserir no DB
    if(isset($_POST["nometransportadora"])){
        $nometransportadora =  $_POST["nometransportadora"];
        $endereco =  $_POST["endereco"];
        $telefone =  $_POST["telefone"];
        $cidade =  $_POST["cidade"];
        $estadoID =  $_POST["estados"];
        $cep =  $_POST["cep"];
        $cnpj =  $_POST["cnpj"];

        $_insert_query = "INSERT INTO transportadoras ";
        $_insert_query .= " (nometransportadora, endereco, telefone, cidade, estadoID, cep, cnpj) ";
        $_insert_query .= " VALUES ";
        $_insert_query .= " ('$nometransportadora','$endereco','$telefone','$cidade',$estadoID,'$cep','$cnpj') ";
    
        $_insert_result = mysqli_query($_conexao,$_insert_query);
        if(! $_insert_result){
            die("Falha ao se conectar ao banco de dados");
        }
    }

    //listar no select
    $_query = "SELECT estadoID, nome FROM estados";
    $_result = mysqli_query($_conexao,$_query);    
    if(!$_result){
        die("Falha a se conectar com o Banco de dados");
    }
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANDES</title>

    <!-- estilo -->
    <link href="../_css/estilo.css" rel="stylesheet">
    <link href="../_css/crud.css" rel="stylesheet">
    <link href="../_css/produto_pesquisa.css" rel="stylesheet">
</head>
<body>
    <?php include_once("../_incluir/topo.php"); ?>
    <?php include_once("../_incluir/funcoes.php"); ?>
    <main>
        <?php include_once("../_incluir/nav.php"); ?> 
        <div id="janela_formulario">
            <form action="create.php" method="POST">
                <input type="text" name="nometransportadora" placeholder="Nome da transportadora">
                <input type="text" name="endereco" placeholder="Endereco">
                <input type="text" name="telefone" placeholder="Telefone">
                <input type="text" name="cidade" placeholder="Cidade">
                <select name="estados">
                    <?php
                    while($_linha = mysqli_fetch_assoc($_result)){
                    ?>
                        <option value="<?php echo $_linha['estadoID'] ?>"><?php echo $_linha["nome"] ?></option>
                    <?php
                    }
                    ?>
                </select>
                <!-- <input type="text" name="estadoID" placeholder="estadoID"> -->
                <input type="text" name="cep" placeholder="CEP">
                <input type="text" name="cnpj" placeholder="CNPJ">
                <input type="submit" value="Cadastrar">
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