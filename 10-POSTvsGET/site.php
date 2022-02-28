<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Learn PHP - freeCodeCamp</title>
    </head>
    <body>
        <?php 
            // * POST vs GET
            // POST => não envia os dados pela URL |> mais seguro para senhas;
            // GET => envia os dados passando pela URL |> menos seguro se for senhas;
        ?>

        <form action="site.php" method="get">
            Password: <input type="password" name="password" id="password">

            <br>
            <input type="submit" value="Enviar">
        </form>
        
        <br>

        <?php
            /* 
                * Quando se usa o metodo "get" deve se usar a variavel $_GET
            */
            echo $_GET["password"];

            /*
                * Qunado se usa o metodo "post" deve se usar a variavel $_POST
            */
            echo $_POST["password"];
        ?>
    </body>
</html>