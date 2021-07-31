<?php
    $_mega_sena= array();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php                    
           for($_i = 0; $_i <=6; $_i++){
                $_n_sorteados = rand(1,60);
                if(!(in_array($_n_sorteados, $_mega_sena))){
                    $_mega_sena[] = $_n_sorteados;
                }                
           }
           //deixar do maior pra menor:
           sort($_mega_sena);
           print_r($_mega_sena);
        ?>
    </body>
</html>