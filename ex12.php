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

			<section>
		<div class="test">
			<div id="Exercices" class="text">

				<form method="POST" action="#">
					<?php
						require "classes/autoform.php";
						require "classes/user.php";
						require "classes/request.php";

						$form = new autoform();
	                    $form->getInputText("name", "Name");
	                    $form->getInputText("firstName","First Name");
	                    $form->getInputDate("birthDate","BirthDate");
	                    $form->getInputText("mail","Mail Adress");
						$arr = array("M", "F");
	                    $form->getInputTypeList("gender", $arr);
	                    $form->getInputText("postalAdress","Postal Adress");
	                    $form->getInputSubmit("submit","Submit");
	                    echo "</br>";
                        if(!empty($_POST)){

                        	$user = new user($_POST["name"], $_POST["firstName"], $_POST["birthDate"], $_POST["mail"], $_POST["gender"], $_POST["postalAdress"]);
                        	echo $user->getName() . " ";
                        	echo $user->getFirstName(). " ";
                        	echo $user->getBirthDate(). " ";
                        	echo $user->getMail(). " ";
                        	echo $user->getGender(). " ";
                        	echo $user->getPostalAdress(). " ";
	                    	echo "<br>";
	                    	$dbh = new request("root", "root", "contacts", "mysql", "localhost");
	                    	$dbh->setUser($user);
                    	}
					?>
				</form>
	</section>




            </body>
    <section class="footer">
    <a type="button" href="https://twitter.com/idcsurinternet" target="_blank">Twitter</a>
    <a type="button" href="https://www.facebook.com/anthony.pascal.5" target="_blank">Facebook</a>
    <a type="button" href="https://www.instagram.com/pnthonyaascal" target="_blank">Instagram</a>
    <div style="font-size: 9pt; color: #817D7C" class="push">© Copyright 2020 Tous droits réservés</div>
</section>
    
</html>