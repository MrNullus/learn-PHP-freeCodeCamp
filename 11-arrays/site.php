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
            // * Arrays    
            /* 
                &> No PHP se define um array por:
                    + {
                        $myVar = array() |> forma literal
                        ///! dentro dos parenteses coloca-se os elementos do array;
                    }

                &> Dotação por []:
                    + Acessar elementos
                        ? $array[index];
                        exp |> $myArray[4];
                
                &> No PHP dá para adicionar e criar valores em arrays, mesmo não tendo esse index;

                &> funções e metodos:
                    #> count()
                        couunt($myArray) |> retorna o numero de elementos;
            */

            $friends = array("Kevin", "Karen", "Oscar", "Jim");
            echo $friends;

            $friends[2] = "Gustavo";
            echo $friends[2];

            $friends[10] = "Angela";
            echo $friends[10]

        ?>

    </body>
</html>