<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            date_default_timezone_set('Brazil/East');
            setlocale(LC_TIME,"portuguese");

            $_time_now = getdate();

            print_r($_time_now);

            echo "<br/><br/>";
            
            //criar elementos
            $_seconds = $_time_now["seconds"];
            $_minutes = $_time_now["minutes"];
            $_hours = $_time_now["hours"];

            
            $_mday = $_time_now["mday"];
            $_month = strftime('%B');
            $_year = $_time_now["year"];

            echo $_hours . ":" . $_minutes . ":" . $_seconds . " | " . $_mday . "/" . $_month . "/" . $_year;
        ?>
    </body>
</html>