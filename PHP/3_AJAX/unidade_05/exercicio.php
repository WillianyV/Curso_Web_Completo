<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <!-- <link href="_css/estilo.css" rel="stylesheet"> -->
    </head>

    <body>
        <button id="botao">Carregar</button>
        <div id="listagem"></div>
        <script src="jquery.js"></script>
        <script>
            $('#botao').click(function(){
                $('#listagem').click('display','block');
                carregarDados();
            });
            function carregarDados(){
                $.getJSON('_json/produtos.json', function(data){
                    var list;
                    list = "<ul>"
                    $.each(data, function(i, valor){
                        list += "<li class='nome'>" + valor.nomeproduto + "</li>";
                        list += "<li class='preco'>" + valor.precounitario + "</li>";
                    });
                    list += "</ul>";
                    $('#listagem').html(list);
                });
            }
        </script>
    </body>
</html>