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
        
            class Movie {
                /* 
                    * public -> é um modificador de visibilidade, vai servir para definir se o codigo pode ser ou não visto:
                        ¬ com o public o codigo é visto por todo o codigo; 
                        ¬ com o private o codigo só é visto dentro do seu escopo;
                */
                public $title;
                private $rating;

                function __construct($title, $rating) {
                    $this->title = $title;
                    $this->rating = $rating;
                }

                function setRating($rating) {
                    if (
                        $rating == "G" ||
                        $rating == "PG" ||
                        $rating == "P-13" ||
                        $rating == "R" ||
                        $rating == "NR"
                    ) {
                        $this->rating = $rating;
                    } else {
                        $this->rating = "NR";
                    }
                }

                function getRating() {
                    return $this->rating;
                }
              
            }

            $avengers = new Movie("Avengers", "PG-13");

            $avengers->setRating("Dog");
            echo $avengers->getRating();

        ?>

    </body>
</html>