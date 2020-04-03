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
						require "classes/user.php";						/** call of the autoform function and request function and user function */
						require "classes/request.php";

						$form = new autoform();							 /** Initiation of the autoform class used to use a form   */
	                    $form->getInputText("name", "Name");			/** Creating a Text form a name*/
	                    $form->getInputText("firstName","First Name");	/** Creating a Text form and a Frist name */
	                    $form->getInputDate("birthDate","BirthDate");	/** Creating a Text form and a Birthdate */
	                    $form->getInputText("mail","Mail Adress");		/** Creating a Text form and a Mail adress */
						$arr = array("M", "F");							/** creation of an array that contains M/F to choose from a list */
	                    $form->getInputTypeList("gender", $arr);
	                    $form->getInputText("postalAdress","Postal Adress");	/** Creating a Text form and a Postal adress */
	                    $form->getInputSubmit("submit","Submit");
	                    echo "</br>";
                        if(!empty($_POST)){

                        	$user = new user($_POST["name"], $_POST["firstName"], $_POST["birthDate"], $_POST["mail"], $_POST["gender"], $_POST["postalAdress"]);	/** creation of a user with the elements we put in the form */
                        	echo $user->getName() . " ";
                        	echo $user->getFirstName(). " ";
                        	echo $user->getBirthDate(). " ";			/**command to display user elements */
                        	echo $user->getMail(). " ";
                        	echo $user->getGender(). " ";
                        	echo $user->getPostalAdress(). " ";
	                    	echo "<br>";
	                    	$dbh = new request("root", "", "test", "mysql", "localhost");	/** connection to the Sql database */
	                    	$dbh->setUser($user);				/** import user into database */
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