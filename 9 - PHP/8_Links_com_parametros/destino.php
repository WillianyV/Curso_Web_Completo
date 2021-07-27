<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <?php $_frutas = array('imagens/laranja.jpg','imagens/maca.jpg','imagens/abacate.jpg'); ?>
        <img src="<?php echo $_frutas[$_GET['codigo']]?>" alt="<?php echo $_frutas[$_GET['codigo']]?>">
    </body>
</html>