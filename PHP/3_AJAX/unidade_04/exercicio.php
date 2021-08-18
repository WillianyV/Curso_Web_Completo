<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <link href="_css/style.css" rel="stylesheet">
    </head>

    <body>
        <button id="butao">Carregar</button>
        <div id="listagem"></div>
        
        <script src="jquery.js"></script>
        <script>
            $('#butao').click(function(){
                $('#listagem').css('display','block');
                carregarDados();
            });

            function carregarDados(){
                $.ajax({
                url:'_xml/produtos.xml'
                }).then(sucesso,falha);

                function sucesso(arquivo){
                    var lista;
                    lista = "<ul>";
                    $(arquivo).find('produto').each(function(){
                            var nome = $(this).find('nomeproduto').text();
                            var preco = $(this).find('precounitario').text();
                            lista += "<li class='nome'>" + nome + "</li>";
                            lista += "<li class='preco'>" + preco + "</li>";
                    });
                    lista += "</ul>";
                    $('#listagem').html(lista);
                }

                function falha(){
                    $('#listagem').html("Erro ao caregar a lista");
                }
            }           
        </script>
    </body>
</html>