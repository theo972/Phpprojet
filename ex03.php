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
    
    <div id ="exo3">
    <form method="POST" action="#">
    <?php
        
        require "classes/autoform.php";
        $form = new autoform();
        $form->getInputText("nombre1","Premier nombre");
        $form->getInputSubmit("submit","Submit");
	    
    ?>
    </form>
    </div>

    <?php

    $a = 2;

    if(!empty($_POST)){
        echo $_POST["nombre1"];
        

        while($_POST["nombre1"] > $a % 2){
            if($_POST["nombre1"] % $a == 0){
                break;
            }
            $a++;
        }
        if($a > $_POST["nombre1"] / 2){
            echo " le nombre est premier";
        }else{
            echo " le nombre n'est pas premier";
        }
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