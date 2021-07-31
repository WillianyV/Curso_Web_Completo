<?php
    $_a = 5;
    $_b = 5;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            if($_a > $_b){
                echo "A é maior que B.";
            }else if($_a < $_b){
                echo "A é menor que B.";
            }else{
                echo "A é igual que B.";
            }
        ?>
    </body>
</html>