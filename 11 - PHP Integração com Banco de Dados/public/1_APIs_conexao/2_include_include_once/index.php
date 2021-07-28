<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- include - ele incluir, se tiver erro, mostar o erro e segue o baile -->
    <?php //include("components/curso2.php"); ?>
    <?php // echo "<br>"; ?>
    <!-- inclui uma vez -->
    <?php //include_once("components/curso1.php"); ?>
    <?php //echo "<br>"; ?>
    <!-- inclui uma vez -->
    <?php //include("components/curso3.php"); ?>
    <?php //echo "<br><br><br>"; ?>

    <!-- no require - se tiver erro ele para o sistema -->
    <?php require("components/curso2.php"); ?>
    <?php echo "<br>"; ?>
    <!-- inclui uma vez -->
    <?php require_once("components/curso1.php"); ?>
    <?php echo "<br>"; ?>
    <!-- inclui uma vez -->
    <?php require("components/curso3.php"); ?>
    
</body>
</html>