<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Learn PHP - freeCodeCamp</title>
    </head>
    <body>
        <form action="site.php" method="post">
            <!-- 
                fruits[] -> é tratado como um array e todo checkbox 
                que tiver fruits[] vai ter o value armazenado
            -->
            Maças: <input type="checkbox" name="fruits[]" value="apples"> <br>
            Laranjas: <input type="checkbox" name="fruits[]" value="oranges"> <br>
            Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>

            <br>
            <input type="submit" value="Enviar">
        </form>

        <?php 

            $fruits = $_POST["fruits"];
            echo $fruits[0];

        ?>

    </body>
</html>