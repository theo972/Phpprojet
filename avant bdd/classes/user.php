<?php
/**
	Creating Users base class
*/
	class user {
		private $_name;
		private $_firstName;
		private $_birthDate;
		private $_mail;
		private $_gender;
		private $_postalAdress;
		private $_signDateTime;

		public function __construct($name, $firstName, $birthDate, $mail, $gender, $postalAdress) {
			$this->_name = $name;
			$this->_firstName = $firstName;
			$this->_birthDate = $birthDate;
			$this->_mail = $mail;
			$this->_gender = $gender;
			$this->_postalAdress = $postalAdress;
			$this->_signDateTime;
		}

	//Ascesseurs GET
		public function getName() {
			return $this->_name;
		}

		public function getFirstName() {
			return $this->_firstName;
		}

		public function getBirthDate() {
			return $this->_birthDate;
		}

		public function getMail() {
			return $this->_mail;
		}

		public function getGender() {
			return $this->_gender;
		}

		public function getPostalAdress() {
			return $this->_postalAdress;
		}

		public function getSignDateTime() {
			return $this->_signDateTime;
		}
	}
?>