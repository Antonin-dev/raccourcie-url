<?php

class Vue
{
    
    public function display()
    {
        echo <<<EOT
        <!DOCTYPE html>
        <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="design/style.css">
                <title>Raccourcisseur d'url</title>
                <link rel="icon" href="img/favico.png" type="image/png">
            </head>
            <body>
                <section id="hello">
                    <div class="container">
                        <header>
                            <img src="img/logo.png" id="logo">
                        </header>
                    </div>
                </section>
            </body>
        </html>
        EOT;
    }


}




