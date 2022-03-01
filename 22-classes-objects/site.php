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
                * Para se criar classes no PHP se deve usar a seguinte sintaxe:
            */
            class Book {
                //! var |> define que é um atributo
                var $title;
                var $author;
                var $pages;

                function __construct($name) {
                    echo "$name <br>";
                }

            }

            $book1 = new Book("Karau"); //! new <NomeClass> |> Instancia uma nova classe

            //! "->" |> usado para acessar attributos, não precisa de cifrão($)
            $book1->title = "SpaceAss";
            $book1->author = "Date Hendris";
            $book1->pages = 900;

            echo $book1->title;
            echo "<br>";
            echo $book1->author;
            echo "<br>";
            echo $book1->pages;

            echo "<hr>";

            $book2 = new Book("Terau");
            $book2->title = "La'de Matri'e";
            $book2->author = "Laurencia de L'avoi";
            $book2->pages = 1000;

            echo $book2->title;
            echo "<br>";
            echo $book2->author;
            echo "<br>";
            echo $book2->pages;

        ?>

    </body>
</html>