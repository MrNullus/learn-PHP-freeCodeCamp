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
            Nome: <input type="text" name="name" id="name">

            <br>
            <input type="submit" value="Enviar">
        </form>
        
        <?php
            echo "O nome é ".$_GET["name"];
        ?>

    </body>
</html>