<?php 
    //passo 1 
    $_servidor = "localhost";
    $_usuario = "root";
    $_senha = "";
    $_banco = "andes";
    //abrindo a conexao:
    $_conexao = mysqli_connect($_servidor,$_usuario,$_senha,$_banco);

    //passo 2
    //testando a conexao:
    if(mysqli_connect_errno()){
        die("Conexão falhou: " . mysqli_connect_errno());
    }
?>