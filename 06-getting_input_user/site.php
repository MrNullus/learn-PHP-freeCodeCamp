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
            <br>

            <label for="name">Idade</label> <input type="number" name="age" id="age">

            <br>
            <input type="submit" value="Enviar">
        </form>
        <br>

        <?php // $_GET[<campo>] |> vai servir para pegar e retornar o valor do campo ?>
        <p>
            Meu nome é <?php echo $_GET["name"]; ?>
        </p>

        <p>
            Minha idade <?php echo $_GET["age"]; ?>
        </p>
        

    </body>
</html>