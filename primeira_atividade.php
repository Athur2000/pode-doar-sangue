<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
    </head>
        <body>
            <?php
                $peso = 52;
                $idade = 65;

                if ($peso >= 50 and $idade >= 16 and $idade <= 69) {
                    echo 'Você antende aos requisitos para doar sangue';
                } else {
                    echo 'Você não antende aos requisitos para doar sangue';
                }
            ?>
        </body>
</html>