<?php
    //array parte 1
    $_frutas = array("Uva","Maça","Laranja");
    //array parte 2
    $_megasena = array(47,28,16,34,52,58);
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <p>array parte 1</p>
        <?php 
        
            echo $_frutas[0] . "<br/>";
            echo $_frutas[1] . "<br/>";
            echo $_frutas[2] . "<br/>";
            // adicionar na ultima posição:
            $_frutas[] = "Abacaxi";

            echo $_frutas[3] . "<br/>";

            //impre a qunatidade de posições no array
            echo "Qtd de frutas : " . count($_frutas) . "<br/>";

            //imprime o array
            print_r($_frutas) . "<br/>";
        ?>
        <p>array parte 2</p>
        <?php
            //retorna o menor valor
            echo min($_megasena) . "<br/>";
            //retorna o maior valor
            echo max($_megasena) . "<br/>";
            print_r($_megasena) . "<br/>";
        ?>

        <p>array parte 3 - pesquisando dentro do array</p>
        <?php 
            //retornar true (1) ou false
            echo "Existe o elemento laranja no array de frutas? " . in_array("Laranja", $_frutas) . "<br/>";
            //retornar a posição do array
            echo "Existe o elemento laranja no array de frutas? " . array_search("Laranja", $_frutas) . "<br/>";
        ?>
    </body>
</html>