<html lang="fr">
    <head>
    <link rel="stylesheet" href="php.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Projet php site vitrine</title>
    </html>
    <body>

    <form method="POST" action="#">
    <?php
        
        require "autoform.php";
        $form = new autoform();
        $form->getInputText("nombre1","Premier nombre");
        $form->getInputSubmit("submit","Submit");
	    
    ?>
    </form>


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
</html>