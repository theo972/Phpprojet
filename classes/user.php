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

		/**
		* Construct method of class
		* @name ->	get the name of the contact
		* @firstName ->	get the first name of the contact
		* @birthDate ->	get the birthdate of the contact
		* @mail ->	get the mail adress of the contact
		* @gender ->	get the gender of the contact
		* @postalAdress ->	get the postal adress of the contact
		*/
		public function __construct($name, $firstName, $birthDate, $mail, $gender, $postalAdress) {
			$this->_name = $name;
			$this->_firstName = $firstName;
			$this->_birthDate = $birthDate;
			$this->_mail = $mail;
			$this->_gender = $gender;
			$this->_postalAdress = $postalAdress;
			//$this->_signDateTime;
		}

	//Ascessors GET
		/**
		* return the name of the contact
		*/
		public function getName() {
			return $this->_name;
		}

		/**
		* return the first name of the contact
		*/
		public function getFirstName() {
			return $this->_firstName;
		}

		/**
		* return the birth date of the contact
		*/
		public function getBirthDate() {
			return $this->_birthDate;
		}

		/**
		* return the mail adress of the contact
		*/
		public function getMail() {
			return $this->_mail;
		}

		/**
		* return the gender of the contact
		*/
		public function getGender() {
			return $this->_gender;
		}

		/**
		* return the postal adress of the contact
		*/
		public function getPostalAdress() {
			return $this->_postalAdress;
		}

		/*public function getSignDateTime() {
			return $this->_signDateTime;
		}*/
	}
?>