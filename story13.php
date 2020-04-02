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
			<table>
                <tr>
                    <th>Name</th>
                    <th>First Name</th>
                    <th>Birth Date</th>
                    <th>Mail Adress</th>
                    <th>Gender</th>
                    <th>Postal Adress</th>
                    <th>Register Datetime</th>
                </tr>
                <?php 
                require "classes/autoform.php";
				require "classes/user.php";
				require "classes/request.php";

                $dbh = new request("root", "", "test", "mysql", "localhost");
                $dbh->getUserRows("users" , "Name, First_Name, Birth_Date, Mail_Adress, Gender, Postal_Adress, Sign_DateTime ");

                ?>

            </table>
			<!--<?php
				require "classes/autoform.php";
				require "classes/user.php";
				require "classes/request.php";
		    	$dbh = new request("root", "", "test", "mysql", "localhost");
		        $dbh->getUserRows("users" , "Name, First_Name, Birth_Date, Mail_Adress, Gender, Postal_Adress, Sign_DateTime ");
		    ?>-->
		</div>
	</section>
</body>
</html>