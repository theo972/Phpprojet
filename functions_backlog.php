<?php

function dateModifier($number){

	$date = new DateTime("now", new DateTimeZone('Europe/Paris'));
	$today = $date->getTimestamp() - $number;
	echo "<p>The event took place the ".date('d F Y', $today)."</p>";
}

function fact($number){
    
    $facto = 1;

    for ($i=1; $i<=$number; $i++) {
    $facto = $facto * $i;
	}

	echo "<p>The result is ".$facto."</p>";
}


function controlMail($mail){

	if ( preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $mail)){
		echo "<p>L'adresse mail est valide.</p>";
}
	else {
		echo "<p>L'adresse mail est invalide.</p>";
	}
}

function controlDate($date){

	if ( preg_match ( " /^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/ " , $date)){
	echo "<p>La date saisie est valide.</p>";
}

	else {
		echo "<p>La date saisie est invalide. Saisir une date au format DD/MM/YYYY</p>";
	}
}

function convertStringtoArray(){
	$stringtest = "Maurice,Robert,Denis,Patrick";
	$result = array(explode(",", $stringtest));

echo $result[1];
}

?>