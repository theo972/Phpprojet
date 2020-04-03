<?php

/**
* Displays the date backwards since how many seconds passed from now
*/
function dateModifier($number){

	$date = new DateTime("now", new DateTimeZone('Europe/Paris'));
	$today = $date->getTimestamp() - $number;
	echo "<p>The event took place the ".date('d F Y', $today)."</p>";
}


/**
* Calculate the factorial number of the specified number
*/
function fact($number){
    
    $facto = 1;

    for ($i=1; $i<=$number; $i++) {
    $facto = $facto * $i;
	}

	echo "<p>The result is ".$facto."</p>";
}

/**
* Regex check to verify if the mail is well writed
*/
function controlMail($mail){

	if ( preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $mail)){
		echo "<p>L'adresse mail est valide.</p>";
}
	else {
		echo "<p>L'adresse mail est invalide.</p>";
	}
}

/**
* Regex check to verify if the Date is well writed
*/
function controlDate($date){

	if ( preg_match ( " /^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/ " , $date)){
	echo "<p>La date saisie est valide.</p>";
}

	else {
		echo "<p>La date saisie est invalide. Saisir une date au format DD/MM/YYYY</p>";
	}
}

/**
* Explode and return the String to Array of string
*/
function convertStringtoArray(){
	$stringtest = "Maurice,Robert,Denis,Patrick";
	$result = array(explode(",", $stringtest));

echo $result[1];
}

/**
* Check which one of the specified numbers is the lowest
*/
function croissant($pieces){

	$pieces = explode(", ",$pieces);

    for ($i = 0; $i < count($pieces) ; $i++) {

    	for ($j = 0; $j < count($pieces) ; $j++){

    		if ($pieces[$i][1] < $pieces[$j][1]) {

	        	$stock = $pieces[$i];
	            $pieces[$i] = $pieces[$j];
	            $pieces[$j] = $stock;
        	}

    	}
    }
    echo "Sort alphabetically, " . $pieces[0] . " is before " . $pieces[1] . " and this last is before " . $pieces[2] . ".";
}

?>