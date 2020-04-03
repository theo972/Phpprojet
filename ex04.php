<?php
require_once 'classes/functions_backlog.php';                                   /** call of the autoform function and functions backlog*/
require 'classes/autoform.php';
?>


<html lang="fr">
    <head>
    <link rel="stylesheet" href="php.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Projet php site vitrine</title>
</head>
    <body>
        <body>
            <header>
                <nav>
                    <div class="menu">
                        <p>
                        <a href="index.php" class="cara">Retourner a la page d'accueil</a>
                        </p>
                    </div>
                </nav>
            </header>
            <body>

            <form method="POST" action="#">
            <?php


            $form = new autoform();                                                                                         /** Initiation of the autoform class used to use a form   */
            $form->getInputNumber("number", "Secondes à soustraire");                                                        /** Creating a number form and a validation button */
            $form->getInputSubmit("Valider");

        ?>
        </form>


        <?php



        if (!empty($_POST)){                                                /** creation of a condition allowing a predefined number to know what event will happen in second */

            dateModifier($_POST["number"]);

        }

        ?>
    <section class="footer">
    <a type="button" href="https://twitter.com/idcsurinternet" target="_blank">Twitter</a>
    <a type="button" href="https://www.facebook.com/anthony.pascal.5" target="_blank">Facebook</a>
    <a type="button" href="https://www.instagram.com/pnthonyaascal" target="_blank">Instagram</a>
    <div style="font-size: 9pt; color: #817D7C" class="push">© Copyright 2020 Tous droits réservés</div>
    </section>
</body>
    
</html>