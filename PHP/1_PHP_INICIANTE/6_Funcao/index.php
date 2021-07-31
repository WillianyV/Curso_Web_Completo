<?php 
    function letItBe(){
        echo "Let it be, let it be, let it be, let it be";
    }
    function oneLetItBe(){
        echo "let it be";
    }

    function retornarDiaria($_salario, $_dia) {
        return number_format( $_salario/$_dia, 2);
    }

    function converterCF($_tempo){
        return ($_tempo*1.8)+32;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>    
    When I find myself in times of trouble, Mother Mary comes to me <br/>
    Speaking words of wisdom, <?php echo oneLetItBe()?> <br/>
    And in my hour of darkness she is standing right in front of me <br/>
    Speaking words of wisdom, <?php echo oneLetItBe()?> <br/>
    <?php echo letItBe()?> <br/>
    Whisper words of wisdom, <?php echo oneLetItBe()?> <br/>
    And when the broken hearted people living in the world agree <br/>
    There will be an answer, <?php echo oneLetItBe()?> <br/>
    For though they may be parted, there is still a chance that they will see <br/>
    There will be an answer, <?php echo oneLetItBe()?> <br/>
    <?php echo letItBe()?> <br/>
    There will be an answer, <?php echo oneLetItBe()?> <br/>
    <?php echo letItBe()?> <br/>
    Whisper words of wisdom, <?php echo oneLetItBe()?> <br/>
    <?php echo letItBe()?> <br/>
    Whisper words of wisdom, <?php echo oneLetItBe()?>, be <br/>
    And when the night is cloudy there is still a light that shines on me <br/>
    Shinin' until tomorrow, <?php echo oneLetItBe()?> <br/>
    I wake up to the sound of music, Mother Mary comes to me <br/>
    Speaking words of wisdom, <?php echo oneLetItBe()?> <br/>
    <?php echo letItBe() . ", "; echo oneLetItBe()?> <br/>
    Whisper words of wisdom, <?php echo oneLetItBe()?> <br/>
    <?php echo letItBe() . ", "; echo oneLetItBe()?> <br/>
    Whisper words of wisdom, <?php echo oneLetItBe()?> <br/><br/>
    
    <?php 
       echo "Diaria: " . retornarDiaria(1100,30) . "<br/>";
       echo "de 25°C para " . converterCF(25) . "°F <br/>"; 
    ?>
</body>
</html>