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
        <p>stripos - Retorna a primeira ocorrência ex.: primeira ocorencia do -s- : <?php  echo stripos($_nome,"s");?></p>
        <p>strripos - Retorna última ocorrência ex.: ultima ocorencia do -a- : <?php  echo stripos($_nome,"a");?></p>
        
        <?php 
            // strripos - Retorna última ocorrência
            
            
            // strtolower - converte para letras min.
            

            // strtoupper - converte para letras min.
            

            // SUBSTR_COUNT - Conta quantas ocorreram
            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
            
        ?>
        
        
    </body>
</html>