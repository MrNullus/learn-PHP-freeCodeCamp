<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Learn PHP - freeCodeCamp</title>
    </head>
    <body>
        <!-- <form action="site.php" method="post">
            <input type="text" name="student" id="student">

            <br>
            <input type="submit" value="Enviar">
        </form> -->

        <?php 
            /* 
                * Sintaxe de functions

                function nameFunction(<args>) {
                    /// codes block
                }
            */

            sayHi("Gagu");
            sayHi("Caio");
            sayHi("Pedro");
            sayHi("Eloisa");

            echo "<br>";
            echo "#--------------";

            function sayHi($name) {
                echo "Hello $name!! <br>";
            }

            // * return -> usado para retornar algo de uma funcão
            function cube($number) {
                return $number * $number * $number;
            }

            $cubeResult = cube(12);

            echo "<br>";
            echo $cubeResult;
        ?>

    </body>
</html>