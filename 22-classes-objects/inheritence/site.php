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
                * Inheritance (Heraça) - é quando uma outra classe herda funcionalidades de outra classe
            */

            class Chef {

                function makeChicken() {
                    echo "The chef makes chicken <br>";
                }

                function makeSalad() {
                    echo "The chef makes salad <br>";
                }
              
                function makeSpecialDish() {
                    echo "The chef makes bbq ribs <br>";
                }

            }

            /* 
                * com a herança de class não é preciso escrever as funcionalidades
                    ¬ basta só usar "extends <class>" |> a <class> vai ser a que vai ter as funcionalidades
            */            
            class ItalianChef extends Chef {

                function makePasta() {
                    echo "Italian Chef makes pasta <br>";
                }

                function makeSpecialDish() {
                    echo "The chef makes chicken parm";
                }

            }
            
            $italianChef = new ItalianChef();
            $italianChef->makeChicken(); //! como é herdado só basta chamar a object function
            $italianChef->makePasta(); 

        ?>

    </body>
</html>