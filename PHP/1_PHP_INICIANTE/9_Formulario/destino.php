<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <?php                
            if(isset($_POST['nome']) && isset($_POST['email'])){
                $_nome = $_POST['nome'];
                $_email = $_POST['email'];
                echo "Nome: " . $_nome . "<br/>E-mail: " . $_email;
            }else{
                echo "Erro: volte a página do formulário";
            }
            echo "<br/><br/><br/><br/>";
            // ou
            echo $_nome = isset($_POST['nome'])? $_POST['nome'] : "Sem nome";
            echo "<br/>";
            echo $_email = isset($_POST['email'])? $_POST['email'] : "Sem email";
        ?>
    </body>
</html>