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
                * Sintaxe do if:
                    if (condicion) {
                        /// code block
                    }

                * Sintaxe do else:
                    else {
                        /// code block
                    }

                * Sintaxe if-else:
                    if (condicion) {
                        /// code block
                    } else {
                        /// code block
                    }

                * Sintaxe if-elesif-else:
                    if (condicion) {
                        /// code block
                    } elseif {
                        /// code block
                    } else {
                        /// code block
                    }

            */

            $isMale = true;
            $isTall = false;

            if($isMale || $isTall) {
                echo "you are a tall male";
            } elseif ($isMale && !$isTall) {
                echo "you are a short male";
            } elseif (!$isMale && $isTall) {
                echo "you are not male but are tall";
            } else {
                echo "you are not male";
            }

        ?>

    </body>
</html>