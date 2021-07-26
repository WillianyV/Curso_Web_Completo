<?php
    $_salario = 1100; // nº inteiro
    $_gasolina = 6.09; // nº racional
    $_telefone = "3877-2328"; //só é nº se for para fazer um calculo matematico, se não é uma string
    
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "É um numero? <br/>";
            echo "O Salário: R$ $_salario é um numero? " . is_numeric($_salario) . "<br/>"; 
            echo "A Gasolina: R$ $_gasolina é um numero inteiro? " . is_numeric($_gasolina) . "<br/>"; 
            echo "O Telefone: R$ $_telefone é um numero inteiro? " . is_numeric($_telefone) . "<br/>"; 
            echo "<br/>  --------- <br/><br/>";

            // testar se é inteiro (10, -10, ...)
            
            echo "É inteiro? <br/>";
            echo "O Salário: R$ $_salario é um numero? " . is_int($_salario) . "<br/>"; 
            echo "A Gasolina: R$ $_gasolina é um numero inteiro? " . is_int($_gasolina) . "<br/>"; 
            echo "O Telefone: R$ $_telefone é um numero inteiro? " . is_int($_telefone) . "<br/>";
            echo "<br/>  --------- <br/> <br/> "; 

            // testar se é float (racional (1/2, 0.5, ...))

            echo "É float (racional)? <br/>";
            echo "O Salário: R$ $_salario é um numero? " . is_float($_salario) . "<br/>"; 
            echo "A Gasolina: R$ $_gasolina é um numero inteiro? " . is_float($_gasolina) . "<br/>"; 
            echo "O Telefone: R$ $_telefone é um numero inteiro? " . is_float($_telefone) . "<br/>";
        
        ?>
        
        
    </body>
</html>