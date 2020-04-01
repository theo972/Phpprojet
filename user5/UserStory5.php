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
        $form->getInputText("nombre2","Deuxieme nombre");
        $form->getInputText("nombre3","Troisieme nombre");
        $form->getInputSubmit("submit","Submit");
	    

    ?>
    </form>

    <?php
     if(!empty($_POST)){
       echo $_POST["nombre1"];
       echo "<br>";
       echo $_POST["nombre2"];
       echo "<br>";
       echo $_POST["nombre3"];
       echo "<br>";
     }

    ?>

    <?php
        if($_POST["nombre1"] < $_POST["nombre2"] && $_POST["nombre1"] < $_POST["nombre3"]){
            echo 'le nombre '.$_POST["nombre1"].' est le plus petit nombre';
        }elseif($_POST["nombre2"] < $_POST["nombre1"] && $_POST["nombre2"] < $_POST["nombre3"]){
            echo 'le nombre '.$_POST["nombre2"].' est le plus petit nombre';
        }elseif($_POST["nombre3"] < $_POST["nombre2"] && $_POST["nombre3"] < $_POST["nombre1"]){
            echo 'le nombre '.$_POST["nombre3"].' est le plus petit nombre';
        }
    
    ?>
    </body>
</html>