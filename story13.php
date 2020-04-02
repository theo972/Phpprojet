<html>
<head>
	<title>Contact List</title>
	<meta charset="utf-8">
	<meta name="language" content="fr">
	<meta name="description" content="Accueil">
	<link rel="stylesheet" href="styles/style.css">
</head>
<body>
	<section>
		<div>
			<?php
				require "classes/autoform.php";
				require "classes/user.php";
				require "classes/request.php";
		    	$dbh = new request("root", "", "test", "mysql", "localhost");
		        $dbh->getUserRows("users" , "Name, First_Name, Birth_Date, Mail_Adress, Gender, Postal_Adress, Sign_DateTime ");
		    ?>
		</div>
	</section>
</body>
</html>