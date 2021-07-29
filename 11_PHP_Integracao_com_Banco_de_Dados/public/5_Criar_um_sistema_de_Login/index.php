<?php require_once("../../conexao/connection.php"); ?>
<?php
    //iniciando a sessão
    session_start();   

    if(isset($_POST["usuario"]) && isset($_POST["senha"])){
        $_user = $_POST["usuario"];
        $_password = $_POST["senha"];

        //query da pesquisa
        $_query = "SELECT * FROM clientes ";
        $_query .= " WHERE usuario = '{$_user}' AND senha = '{$_password}'";
        //pesquisa no banco
        $_result = mysqli_query($_conexao,$_query);
        //se deu erro na conecção ao banco de dados morre
        if(!$_result){
            die("Falha na consulta do banco de dados");
        }
        //se conseguiu se conenctar 
        $_info = mysqli_fetch_assoc($_result);
        //testa se veio algum paramentro da busca, ou seja, verifica se existe um user com o login e senha passado, se não a consulta volta vazia
        if(empty($_info)){
            $_msg = "Login sem sucesso";        
        }else{
            //criando a varavel de sessão
            $_SESSION["user_portal"] = $_info["clienteID"];
            header("location:list.php");
        }
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
        <link href="_css/login.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?>
        
        <main>
            <div id="janela_login">
                <form action="index.php" method="POST">
                    <h2>Tela de Login</h2>
                    <input type="text" name="usuario" placeholder="Login">
                    <input type="password" name="senha" placeholder="Senha">
                    <input type="submit" value="Entrar">
                    <?php
                        if(isset($_msg)){
                    ?>
                            <p><?php echo $_msg ?></p>
                    <?php
                        }
                    ?>
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