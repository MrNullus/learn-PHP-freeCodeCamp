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

                function __construct($aTitle, $aAuthor, $aPages) {
                    $this->title = $aTitle;
                    $this->author = $aAuthor;
                    $this->pages = $aPages;
                }

            }

            $book1 = new Book("SpaceAss", "Date Hendris", 900); //! new <NomeClass> |> Instancia uma nova classe

            echo "<br>";
            echo $book1->title;
            echo "<br>";
            echo $book1->author;
            echo "<br>";
            echo $book1->pages;

            echo "<hr>";

            $book2 = new Book("La'de Matri'e", "Laurencia de L'avoi", 1000);

            echo $book2->title;
            echo "<br>";
            echo $book2->author;
            echo "<br>";
            echo $book2->pages;

        ?>

    </body>
</html>