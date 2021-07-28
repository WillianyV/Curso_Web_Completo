<?php require_once("../../conexao/connection.php"); ?>
<?php
    //iniciando a sessão
    session_start();

    //criando a varavel de sessão
    $_SESSION["user"] = "Williany";

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