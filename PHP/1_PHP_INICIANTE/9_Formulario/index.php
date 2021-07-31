<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php 
            if(!isset($_POST['formulario'])){
        ?>
            <form action="index.php" method="POST">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome">
                
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                
                <input type="submit" name="formulario" value="Enviar Cadastro">
            </form>
        <?php
            }else{
            echo $_nome = isset($_POST['nome'])? $_POST['nome'] : "Sem nome";
            echo "<br/>";
            echo $_email = isset($_POST['email'])? $_POST['email'] : "Sem email";
            }
        ?>
        
    </body>
</html>