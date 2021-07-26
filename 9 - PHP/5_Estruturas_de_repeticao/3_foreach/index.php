<?php
    $_frutas = array("Uva","Laranja","Maça","Abacaxi");

    $_agenda = array("nome" => "Williany",
                     "idade" => 25,
                     "telefone" => "999999999",
                     "salario" => 100);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php    
        for($_i = 0; $_i < count($_frutas) ; $_i++){
            echo $_frutas[$_i] . "<br/>";
        }

        echo "<br/> Foreach <br/>";
        foreach($_frutas as $_fruta){
            echo $_fruta . "<br/>";
        }
    ?>
    <?php    
        echo "<br/> Foreach <br/>";
        foreach($_agenda as $_pessoa => $_valor){
            echo $_pessoa . ":" . $_valor ."<br/>";
        }
    ?>
</body>
</html>