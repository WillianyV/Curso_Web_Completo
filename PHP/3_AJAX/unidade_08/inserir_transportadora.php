  <?php
    $conecta = mysqli_connect("localhost","root","","andes");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    if(isset($_POST["nometransportadora"])) {
        $nome       = utf8_decode($_POST["nometransportadora"]);
        $endereco   = utf8_decode($_POST["endereco"]);
        $cidade     = utf8_decode($_POST["cidade"]);
        $estado     = $_POST["estados"];
        
        $inserir    = "INSERT INTO transportadoras ";
        $inserir    .= "(nometransportadora,endereco,cidade,estadoID) ";
        $inserir    .= "VALUES ";
        $inserir    .= "('$nome','$endereco','$cidade', $estado)";  
        
        $operacao_insercao = mysqli_query($conecta,$inserir);

        if($operacao_insercao){
            $retorn["sucesso"] = true;
            $retorn["mensagem"] = "Cadastro realizado com sucesso";
        }else{
            $retorn["sucesso"] = false;
            $retorn["mensagem"] = "Falha ao realziar o cadastro";
        }

        echo json_encode($retorn);
    }
?>