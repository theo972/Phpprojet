<?php
	class ConvertIntToHex {
		private $_res;
		private $_digit;

		/**
		* Construct method for the class
		* @res -> the String result of calculations
		* @digit -> The value of the selected digit
		* @nbDig -> the count of digit on a number
		*/
		public function __construct() {
			$this->_res = "";
			$this->_digit = 0;
			$this->_nbDig = 0;
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
		* Add the result to the previous result by reversed concatenation
		*/
		public function checking($number) {
			echo "Nombre entré : " . $number . ".<br>";

			while ($number != 0) {
				$remainder = (int)$number % 16;

				if ($remainder < 10) {
					$this->_res = $remainder . $this->_res;
				}
				else {
					switch ($remainder) {
						case '15':
							$this->_res = "F" . $this->_res;
							break;
						case '14':
							$this->_res = "E" . $this->_res;
							break;
						case '13':
							$this->_res = "D" . $this->_res;
							break;
						case '12':
							$this->_res = "C" . $this->_res;
							break;
						case '11':
							$this->_res = "B" . $this->_res;
							break;
						case '10':
							$this->_res = "A" . $this->_res;
							break;
						
						default:
							echo "ERREUR<br>";
							break;
					}
				}
				$number = (int)($number / 16);
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