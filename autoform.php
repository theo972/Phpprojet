<?php

class autoform {

	public function getInputText($name, $label){
		echo '<label for="'.$name.'">'.$label.'</label><br>';
		echo '<input type="text" id="'.$name.'" name="'.$name. '"><br>';
	}

	public function getInputNumber($name, $label){
		echo '<label for="'.$name.'">'.$label.'</label><br>';
		echo '<input type="number" id="'.$name.'" name="'.$name. '"><br>';
	}

	public function getInputMail($mail, $label){
		echo '<label for="'.$mail.'">'.$label.'</label><br>';
		echo '<input type="mail" id="'.$mail.'" name="'.$mail. '"><br>';
	}

	public function getInputDate($date, $label){
		echo '<label for="'.$date.'">'.$label.'</label><br>';
		echo '<input type="text" id="'.$date.'" name="'.$date. '"><br>';
	}

	public function getInputSubmit($label){
		echo '<input type="submit" value="'.$label. '">';

	}

	public function getInputRadio($label, $radio){
		echo '<label for="'.$label.'">'.$label.'</label>';
		echo '<input type="radio" id="'.$label.'" name="'.$radio.'" value="'.$label.'"><br>';

	}

}



?>