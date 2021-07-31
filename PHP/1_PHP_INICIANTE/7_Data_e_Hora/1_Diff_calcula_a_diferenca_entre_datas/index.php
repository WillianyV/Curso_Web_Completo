<?php 
    $_date1 = new DateTime('2021/01/01');
    $_date2 = new DateTime('2021/07/27');
    $_intervalo = $_date1->diff($_date2);
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
            <?php        
                print_r($_intervalo);
            ?>
        </pre>
    </body>
</html>