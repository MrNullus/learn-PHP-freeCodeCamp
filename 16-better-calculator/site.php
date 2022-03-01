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
            First Number: <input type="number" step="0.1" name="number1" id="number1"><br>
            OP: <input type="text" name="op"> <br>
            Second Number: <input type="number" name="number2" id="number2">

            <br>
            <input type="submit" value="Enviar">
        </form>

        Results: 
        <?php 
            $num1 = $_POST["number1"];
            $num2 = $_POST["number2"];
            $op = $_POST["op"];

            if ($op == "+") {
                echo $num1 + $num2;
            } elseif ($op == "-") {
                echo $num1 - $num2;
            } elseif ($op == "*") {
                echo $num1 * $num2;
            } elseif ($op == "/") {
                echo $num1 / $num2;
            } else {
                echo "ERRO: Invalid operator";
            }
        ?>

    </body>
</html>