<html>
<head>
	<title>Achetez des timbres, envoyez courriez, colis, blablabla</title>
	<meta charset="utf-8">
	<meta name="language" content="fr">
	<meta name="description" content="Accueil">
	<link rel="stylesheet" href="styles/style.css">
</head>
<body>
	<section>
		<div class="test">
			<div id="Exercices" class="text">

				<form method="POST" action="#">
					<?php
						require "classes/autoform.php";
						require "classes/user.php";					 /** call of the autoform function and functions user and request */
						require "classes/request.php";

						$dbh = new request("root", "", "test", "mysql", "localhost");		  /** call of the query function that allows to connect to the database */
                		$list = $dbh->getCol("users", "ID, Name, First_Name");					

						$form = new autoform();
						$result = new autoform();
	                    $form->getInputTypeList("listName", $list);
						$form->getInputSubmit("submit","Select");
					?>
				</form>
				<form method="POST" action='#'>
					<?php
					if (!empty($_POST["listName"])) {
	                    	$choice = array();
	                    	$choice = explode(" ", $_POST["listName"]);
	                    	$user = array();
	                    	$user = $dbh->getChoice("users", $choice[0], $choice[1]);

                    		$result->setInputText("name", "Last Name", $user[0]);
                    		$result->setInputText("firstName", "First Name", $user[1]);
                    		$result->setInputDate("birthDate", "Birth Date", $user[2]);
                    		$result->setInputText("mail", "Mail Adress", $user[3]);
                    		$arr = array('M', 'F');
                    		$result->setInputTypeList("gender", "Gender", $user[4], $arr);
                    		$result->setInputText("postalAdress", "Postal Adress", $user[5]);
                    		$result->setInputText("id", "ID", $user[6]);
                    		$result->getInputSubmit("submit","Select");
	                	}
	                if(!empty($_POST["name"])){
						$updateUser = new user($_POST["name"], $_POST["firstName"], $_POST["birthDate"], $_POST["mail"], $_POST["gender"], $_POST["postalAdress"]);
                    	echo "<br>";
                    	//Contact update request into the database
                    	$dbh->updateUser($updateUser, $_POST["id"]);
                	}
	                ?>
				</form>
			</div>
		</div>
	</section>
	<footer>
	</footer>
</body>
</html>