<html lang="fr">
    <head>
    <link rel="stylesheet" href="php.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Convert number to Bin</title>
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

            <!-- form to enter an arabic number that gonna be converted as a binary one-->
            <form method="POST" action="#">
					<?php
						require "ex09/convertIntToBin.php";

						$form = new convertIntToBin();
						$form->getInputText("number","Number");
	                    $form->getInputSubmit("submit","Submit");
	                    echo "</br>";

                        //launches only if the number container isn't empty
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