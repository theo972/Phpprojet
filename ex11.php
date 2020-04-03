<?php

require_once 'classes/functions_backlog.php';
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
                            <a href="#exo" class="cara">Story</a>
                        </p>
                        <p>
                            <a href="#Algorithme" class="cara">Algorithme</a>
                        </p>
                        <p>
                            <a href="#BDD" class="cara">Base de donnée</a> </p>
                        <p>
                            <a href="#Laposte" class="cara">La poste</a>
                        </p>
                    </div>
                </nav>
            </header>
            <body>


<form method="POST" action="#">
<?php


	$form = new autoform();

	$form->getInputText("list", "Liste de prénoms");
	$form->getInputSubmit("Valider");


?>
</form>


<?php



if (!empty($_POST)){
	//dateModifier($_POST["number"]);
	//fact($_POST["number"]);
	//controlMail($_POST["mail"]);
	//controlDate($_POST["date"]);
	croissant($_POST["list"]);
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