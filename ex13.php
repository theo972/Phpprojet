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

                $dbh = new request("root", "root", "contacts", "mysql", "localhost");
                $dbh->getUserRows("users" , "Name, First_Name, Birth_Date, Mail_Adress, Gender, Postal_Adress, Sign_DateTime ");

                ?>

            </table>




            </body>
    <section class="footer">
    <a type="button" href="https://twitter.com/idcsurinternet" target="_blank">Twitter</a>
    <a type="button" href="https://www.facebook.com/anthony.pascal.5" target="_blank">Facebook</a>
    <a type="button" href="https://www.instagram.com/pnthonyaascal" target="_blank">Instagram</a>
    <div style="font-size: 9pt; color: #817D7C" class="push">© Copyright 2020 Tous droits réservés</div>
</section>
    
</html>