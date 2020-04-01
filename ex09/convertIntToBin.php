<?php
	class ConvertIntToBin {
		private $_res;
		private $_digit;

		public function __construct() {
			$this->_res = "";
			$this->_digit = 0;
			$this->_nbDig = 0;
		}

		public function getInputText($name, $label) {
					echo '<label for ="'.$name.'">'.$label.'</label></br>';
					echo '<input type="text" id="'.$name.'" name="' .$name.'"><br>';
				}

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

		public function getInputSubmit($label) {	
			echo '<input type="submit" value"'.$label.'"><br>';
		}
	}
?>