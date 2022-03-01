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
            $index = 0;

            while($index <= 5) {
                echo "$index <br>";
                $index++;
            }

            // do..while
           do {
                echo "$index <br>";
                $index++;
            } while($index <= 5); // preisa ter o ponto e virgular (;) no final

        ?>
    </body>
</html>