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
            /* 
                *> Trabalhandp com números:
            */

            echo (2 * 3)."<br>";            // Basic Arithmetic: +, -, /, *
            echo (2**3)."<br>";             // Basic Arithmetic: +, -, /, *
            echo (10 % 3)."<br>";           // Modulus Op. : returns remainder of 10/3
            echo (1 + 2 * 3)."<br>";        // order of operations
            echo (10 / 3.0)."<br><br>";     // int's and doubles


            $num = 10;
            $num += 100;          // +=, -=, /=, *=
            echo $num."<br>";

            $num++;
            echo $num."<br><br>";

            // useful math methods  
            echo max(2, 3)."<br>";
            echo sqrt(144)."<br>";
            echo round(2.7)."<br>"; //arredonta para cima
            echo floor(2.7)."<br>"; //arredonta para baixo

        ?>

    </body>
</html>