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

            <form method="POST" action="#">
            <?php
        
        require "classes/autoform.php";
        $form = new autoform();
        $form->getInputText("nombre1","Premier nombre");
        $form->getInputText("nombre2","Deuxieme nombre");
        $form->getInputText("nombre3","Troisieme nombre");
        $form->getInputSubmit("submit","Submit");
	    

    ?>
    </form>

    <?php
        if (!empty($_POST)) {
            if($_POST["nombre1"] < $_POST["nombre2"] && $_POST["nombre1"] < $_POST["nombre3"]){
                echo 'le nombre '.$_POST["nombre1"].' est le plus petit';
            }elseif($_POST["nombre2"] < $_POST["nombre1"] && $_POST["nombre2"] < $_POST["nombre3"]){
                echo 'le nombre '.$_POST["nombre2"].' est le plus petit';
            }elseif($_POST["nombre3"] < $_POST["nombre2"] && $_POST["nombre3"] < $_POST["nombre1"]){
                echo 'le nombre '.$_POST["nombre3"].' est le plus petit';
            }
        }
    
    ?>

    </body>
  
    
</html>