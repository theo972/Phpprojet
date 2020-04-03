<?php
	class ConvertIntToBin {
		private $_res;

		/**
		* Construct method for the class
		* @res -> the String result of calculations
		*/
		public function __construct() {
			$this->_res = "";
		}

		/**
		* Should be replaced by autoform.php->getInputText()
		* displays the content of a text imput + label
		*/
		public function getInputText($name, $label) {
					echo '<label for ="'.$name.'">'.$label.'</label></br>';
					echo '<input type="text" id="'.$name.'" name="' .$name.'"><br>';
				}

		/**
		* Research the digit to check into the number
		* The result is calculated while the number > 0
		* Once done, the result is displayed
		*/
		public function checking($number) {
			echo "Nombre entré : " . $number . ".<br>";

			while ($number > 0) {

				if ((int)($number % 2) == 0) {
					$this->_res = "0" . $this->_res;
				}
				else {
					$this->_res = "1" . $this->_res;
				}
				$number = (int)($number / 2);
			}
			echo "Résultat : " . $this->_res;
		}

		/**
		* Once click, launch the submit of the number
		* Displays the button to validate
		*/
		public function getInputSubmit($label) {	
			echo '<input type="submit" value"'.$label.'"><br>';
		}
	}
?>