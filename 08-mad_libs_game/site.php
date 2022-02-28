<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Learn PHP - freeCodeCamp</title>
    </head>
    <body>
        <form action="site.php" method="get">
            Cor: <br>
                <input type="text" name="color" id="color">
            <br>
            Substantivo no Plural: <br>
                <input type="text" name="pluralNoun" id="pluralNoun">
            <br>
            Celebridade: <br>
                <input type="text" name="celebrity" id="celebrity">

            <br>
            <input type="submit" value="Enviar">
        </form>
        
        <?php
            $color = $_GET["color"];
            $pluralNoun = $_GET["pluralNoun"];
            $celebrity = $_GET["celebrity"];

            echo "Rosas $color <br>";
            echo "$pluralNoun é azul <br>";
            echo "Eu amo $celebrity <br>";
        ?>

    </body>
</html>