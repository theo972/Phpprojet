<?php
	class ConvertIntToRom {
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

				$this->_nbDig++;

				if ($this->_nbDig == 1) {
					$this->checkUnit($number % 10);
				}

				if ($this->_nbDig == 2) {
					$this->checkDec($number % 10);
				}

				if ($this->_nbDig == 3) {
					$this->checkCent($number % 10); 
				}

				if ($this->_nbDig == 4) {
					$this->checkMil($number % 10);
				}
				
				$number = (int)($number / 10);
			}
			echo "Résultat : " . $this->_res;
		}

		public function checkMil($number) {
			if ($number == 4 || $number == 9) {
				if ($number == 4) {
					$this->_res = "<b>V</b>" . $this->_res;
				}
				else {
					$this->_res = "<b>X</b>" . $this->_res;
				}
				$this->_res = "<b>M</b>" . $this->_res;
			}
			else if ($number >= 5 && $number < 9) {
				$this->_digit = $number - 5;
				while ($this->_digit > 0) {
					$this->_res = "M" . $this->_res;
					$this->_digit--;
				}
				$this->_res = "<b>V</b>" . $this->_res;
			}
			else {
				$this->_digit = $number;
				while ($this->_digit > 0) {
					$this->_res = "M" . $this->_res;
					$this->_digit--;
				}
			}
		}

		public function checkCent($number) {
			if ($number == 4 || $number == 9) {
				if ($number == 4) {
					$this->_res = "D" . $this->_res;
				}
				else {
					$this->_res = "M" . $this->_res;
				}
				$this->_res = "C" . $this->_res;
				}
			else if ($number >= 5 && $number < 9) {
				$this->_digit = $number - 5;
				while ($this->_digit > 0) {
					$this->_res = "C" . $this->_res;
					$this->_digit--;
				}
				$this->_res = "D" . $this->_res;
			}
			else {
				$this->_digit = $number;
				while ($this->_digit > 0) {
					$this->_res = "C" . $this->_res;
					$this->_digit--;
				}
			}
		}

		public function checkDec($number) {
			if ($number == 4 || $number == 9) {
				if ($number == 4) {
					$this->_res = "L" . $this->_res;
				}
				else {
					$this->_res = "C" . $this->_res;
				}
				$this->_res = "X" . $this->_res;
			}
			else if ($number >= 5 && $number < 9) {
				$this->_digit = $number - 5;
				while ($this->_digit > 0) {
					$this->_res = "X" . $this->_res;
					$this->_digit--;
				}
				$this->_res = "L" . $this->_res;
			}
			else {
				$this->_digit = $number;
				while ($this->_digit > 0) {
					$this->_res = "X" . $this->_res;
					$this->_digit--;
				}
			}
		}

		public function checkUnit($number) {
			if ($number == 4 || $number == 9) {
				$this->_res = $this->_res . "I";
				if ($number == 4) {
					$this->_res = $this->_res . "V";
				}
				else {
					$this->_res = $this->_res . "X";
				}
			}
			else if ($number >= 5 && $number < 9) {
				$this->_res = $this->_res . "V";
				$this->_digit = $number - 5;
				while ($this->_digit > 0) {
					$this->_res = $this->_res . "I";
					$this->_digit--;
				}
			}
			else {
				$this->_digit = $number;
				while ($this->_digit > 0) {
					$this->_res = $this->_res . "I";
					$this->_digit--;
				}
			}
		}

		public function getInputSubmit($label) {	
			echo '<input type="submit" value"'.$label.'"><br>';
		}
	}
?>