<?php

require_once 'functions_backlog.php';
require 'autoform.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Semaine PHP Anthony Pascal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<section>

<form method="POST" action="#">
<?php


	$form = new autoform();
	$form->getInputNumber("number", "Fonction factorielle");
	$form->getInputSubmit("Valider");




?>
</form>


<?php



if (!empty($_POST)){

	
	fact($_POST["number"]);
	

}


?>

</body>
</html>