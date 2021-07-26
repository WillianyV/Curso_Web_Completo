<?php 
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <p>Texto: <?php echo $_nome?></p>
        <p>strlen - Retorna o nº de caracteries : <?php echo strlen($_nome);?></p>
        <p>stripos - Retorna a primeira ocorrência ex.: primeira ocorencia do (s) : <?php  echo stripos($_nome,"s");?></p>
        <p>strripos - Retorna última ocorrência ex.: ultima ocorencia do (a) : <?php  echo stripos($_nome,"a");?></p>
        <p>strtolower - Converte para letras min : <?php  echo strtolower($_nome);?></p>
        <p>strtoupper - Converte para letras maiuscula : <?php  echo strtolower($_nome);?></p>
        <p>SUBSTR_COUNT - Conta quantas ocorreram ex. letra (a): <?php  echo SUBSTR_COUNT($_nome,"a");?></p>
        <!-- Faz diferença Maiusculas e minusculas -->
        
    </body>
</html>