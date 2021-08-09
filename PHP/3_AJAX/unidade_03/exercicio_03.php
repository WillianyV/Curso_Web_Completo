<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="nome"></div>
        <div id="msg"></div>
        <script src="jquery.js"></script>
        <script>
            $.ajax({
                url:'nome.php'
            }).done( function (valor){
                $('#nome').html(valor);
            }).fail(function (){
                $('#nome').html("Falha ao carregar o nome");
            }).always(function (){
                $('#msg').html("Bem vindo!");
            });
        </script>
    </body>
</html>