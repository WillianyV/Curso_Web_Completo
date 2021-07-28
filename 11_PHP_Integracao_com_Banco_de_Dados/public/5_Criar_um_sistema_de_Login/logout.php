<?php
    //iniciando a sessão
    session_start();

    unset($_SESSION["user"]);

    header("location:index.php");
?>