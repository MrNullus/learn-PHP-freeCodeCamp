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
            <input type="text" name="student" id="student">

            <br>
            <input type="submit" value="Enviar">
        </form>

        <?php 
            /*
                * Vai servir como um array a qual faz associações:
                index => "valor associado"
            */

            $grades = array("Jim"=>"C+", "Pam"=>"A+", "Oscar"=>"B+");
            echo $grades[$_POST["student"]];

        ?>

    </body>
</html>