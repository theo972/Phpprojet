<?php
	class ConvertIntToHex {
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

		public function getInputSubmit($label) {	
			echo '<input type="submit" value"'.$label.'"><br>';
		}
	}
?>