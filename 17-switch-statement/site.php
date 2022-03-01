<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Learn PHP - freeCodeCamp</title>
    </head>
    <body>
        <form action="site.php" method="post">
            What was your grade?

            <br>
            <input type="text" name="grade">

            <br>
            <input type="submit" value="Enviar">
        </form>

        <br>

        <?php 
            $grade = $_POST["grade"];

            switch($grade) {
                case "A":
                    echo "You did amazing!!!!";
                    break;

                case "B":
                    echo "You did pretty good";
                    break;

                case "C":
                    echo "You did poorly";
                    break;

                case "D":
                    echo "You did  very bad";
                    break;

                case "F":
                    echo "You FAIL!!";
                    break;

                default:
                    echo "ERROR: Invalid Grade";
                    break;
            }

        ?>
    </body>
</html>