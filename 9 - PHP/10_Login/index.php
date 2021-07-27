<?php
    //iniciando a sessao
    session_start();

    if(isset($_POST['login']) && isset($_POST['password'])){     
        if($_POST['login'] == "Usuário" && $_POST['password'] == 123){
            $_SESSION["user"] = "usuario";
        }else if($_POST['login'] == "Admin" && $_POST['password'] == 1234){
            $_SESSION["user"] = "admin";
        }else{
            $_msg = "Login ou Senha incorretos";
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
      <div>
          <form action="index.php" method="POST">
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Senha">
            <button type="submit" name="btn-login">Entrar</button>
          </form>
      </div>
      <?php
        if(isset($_msg)){
            echo $_msg;
        }
      ?>
    </main>    
</body>
</html>