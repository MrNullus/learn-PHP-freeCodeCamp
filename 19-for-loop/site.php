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
            $luckyNumbers = array(12, 2, 6, 23, 45, 10, 56);

            for($i = 0; $i <= count($luckyNumbers); $i++) {
                echo "$luckyNumbers[$i] <br>";
            }

        ?>
    </body>
</html>