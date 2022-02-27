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
            <label for="name">Nome</label> <input type="text" name="name" id="name">

            <input type="submit" value="Enviar">
        </form>
        <br>

        <?php
                echo $_GET["name"]; // $_GET[<campo>] |> vai servir para pegar e retornar o valor do campo
        ?>

    </body>
</html>