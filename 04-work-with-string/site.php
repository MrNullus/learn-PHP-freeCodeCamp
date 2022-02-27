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
                *> Trabalhandp com strings:
                    + strtolower(string) -> Transforma a string em minusculas;

                    + strtoupper(string) -> Transforma a string em maiusculas;

                    + strtolen(string) -> Retorna o tamanho da string;

                    + Trabalhando com dotação de [] com strings:
                        #> Selecionar caractere:
                            $myString = "Hello World!!";
                            $myString[0]; |> "H"
                            
                        #> Substituir caractere:
                            $myString[0] = "F; |> "Fello World!!"

                        ! 0 => index do caractere
                    
                    + str_replace(<str>, <str_for_replace>, <locale_to_replace>)
                        #> expl:
                            str_replace("World", "Planet", $myString); ||> "Hello Planet!!!"
                                         # Valor  \   # Valor  |  # variavel 
                                        a ter o   | do replace | que vai 
                                        replace   |  (troca)   |  ocorrer o 
                                        (vai pegar\            |    replace
                                        todas as   \           \
                                        ocorrencias)\           \

                    + substr(<variable>, <index_init>, <qtd_carac>)
                        #> Retorna uma copiar da string passada, copiado a partir do <index_init>;
                            ? variable => variavel associada a essa copia que vai ter
                            #-----------
                            ? index_init => index que vai servir como inicio para a copia
                            #-----------
                            ? qtd_carac => é a quantidade de caracteres a serem copiados, 
                            ¬ se não for informado ele vai retornar do <index_init> até o fim da string;
                            #-----------

                        #> expl:
                            substr($phrase, 8);
            */

            $phrase = "To be or not to be";
            
            strtolower($phrase);
            strtoupper($phrase);
            strlen($phrase);

            $phrase[0] = "F";

            echo $phrase;

            str_replace("To", "How", $phrase);
            echo "<br>";
            echo substr($phrase, 8);
            echo "<br>";
            echo substr($phrase, 8, 2);

        ?>

    </body>
</html>