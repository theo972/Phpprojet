
<?php

require_once 'classes/functions_backlog.php';                       /** call of the autoform function and functions backlog*/
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


	$form = new autoform();                             /** Initiation of the autoform class used to use a form   */
	$form->getInputMail("mail", "Mail");                /** Creating a mail form and a validation button */
	$form->getInputSubmit("Valider");

	$form->getInputDate("date", "Date");                /** Creating a date form and a validation button */
	$form->getInputSubmit("Valider");


?>
</form>


<?php



if (!empty($_POST)){                                    /** Creation of a condition to check whether in a form the dates or address enter and valid */


	controlMail($_POST["mail"]);
	controlDate($_POST["date"]);

}


?>




            </body>
    <section class="footer">
    <a type="button" href="https://twitter.com/idcsurinternet" target="_blank">Twitter</a>
    <a type="button" href="https://www.facebook.com/anthony.pascal.5" target="_blank">Facebook</a>
    <a type="button" href="https://www.instagram.com/pnthonyaascal" target="_blank">Instagram</a>
    <div style="font-size: 9pt; color: #817D7C" class="push">© Copyright 2020 Tous droits réservés</div>
</section>
    
</html>