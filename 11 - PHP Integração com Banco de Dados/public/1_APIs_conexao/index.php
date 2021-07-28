<?php
    //passo 1 e 2 estão no :
    require_once("../../conexao/connection.php");

    //passo 3
    $_query_produtos = "SELECT nomeproduto, precounitario,tempoentrega FROM produtos ";
    //filtro:
   // $_query_produtos .= " WHERE tempoentrega = 5";
    $_produtos = mysqli_query($_conexao, $_query_produtos);

    if(!$_produtos){
        die("Falha na consulta com o Banco de dados");
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
    </head>

    <body>
        <ol>
            <?php
                while($_registro = mysqli_fetch_assoc($_produtos)){
            ?>
                    <li>
                        <?php 
                            echo "Nome do Produto: ". $_registro["nomeproduto"] . "<br/>";
                            echo "Valor: R$ " . $_registro["precounitario"] . "<br/>";
                            echo "Tempo de entrega: " . $_registro["tempoentrega"] . " dias"."<br/>";
                        ?>
                    </li>
            <?php
                }
            ?>
        </ol>

        <?php
            // liberando o resultado, pois quando fazemos uma consulta no BD fica salvo no cache de memoria
            // para a pagina não ficar enta precisamos liberar ela
            mysqli_free_result($_produtos);
        ?>
    </body>
</html>

<?php
    //ultimo passo
    //fechando a conexao:
    mysqli_close($_conexao);
?>
