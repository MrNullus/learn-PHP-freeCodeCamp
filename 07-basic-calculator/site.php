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
            <input type="number" name="num1" id="num1">
            <br>
            <input type="number" name="num2" id="num2">

            <br>
            <input type="submit" value="Enviar">
        </form>
        
        Answers: <?php echo $_GET["num1"] + $_GET["num2"] ?>

    </body>
</html>