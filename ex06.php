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
						require "ex06/convertIntToRom.php";         /** call of the convertIntToRom function */

						$form = new convertIntToRom();               /** Initiation of the convertIntToRom class used to use a form   */
						$form->getInputText("number","Number");             
	                    $form->getInputSubmit("submit","Submit");               /** Creating a text form and a validation button */
	                    echo "</br>";

                        if(!empty($_POST)){
                        	$form->checking($_POST["number"]);
                    	}
					?>	
				</form>




            </body>
    <section class="footer">
    <a type="button" href="https://twitter.com/idcsurinternet" target="_blank">Twitter</a>
    <a type="button" href="https://www.facebook.com/anthony.pascal.5" target="_blank">Facebook</a>
    <a type="button" href="https://www.instagram.com/pnthonyaascal" target="_blank">Instagram</a>
    <div style="font-size: 9pt; color: #817D7C" class="push">© Copyright 2020 Tous droits réservés</div>
</section>
    
</html>