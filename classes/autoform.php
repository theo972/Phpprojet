<?php
	/**
	* Class made to displays -and full- Inputs
	* Onto the pages 
	*/
	class autoform{
		/**
		* Displays the label and the Text Input
		*/
		public function getInputText($name, $label) {
			echo '<label for ="'.$name.'">'.$label.'</label></br>';
			echo '<input type="text" id="'.$name.'" name="' .$name.'"><br>';
		}

		/**
		* Displays the label and the Text Input
		*/
		public function getInputNumber($name, $label){
			echo '<label for="'.$name.'">'.$label.'</label><br>';
			echo '<input type="number" id="'.$name.'" name="'.$name. '"><br>';
		}

		/**
		* Displays the label and the Text Input
		*/
		public function getInputMail($mail, $label){
			echo '<label for="'.$mail.'">'.$label.'</label><br>';
			echo '<input type="mail" id="'.$mail.'" name="'.$mail. '"><br>';
		}

		/**
		* Displays the label and the Submit input
		*/
		public function getInputSubmit($label) {

			echo '<input type="submit" value"'.$label.'"><br>';
		}

		/**
		* Displays the label and the TextArea Input
		*/
		public function getTextArea($name, $label){
            echo '<label for="'.$label.'">'.$name.'</label><br>';
            echo '<textarea name="'.$name.'"></textarea><br>';
        }

		/**
		* Displays the label and the password Input
		*/
		public function getInputPassword($name, $label, $minlength){
            echo '<label for="'.$label.'">'.$name.'</label><br>';
            echo '<input type="password" name="'.$name.'" minlength="'.$minlength.'" required><br>';
        }

		/**
		* Displays the label and the Date Input
		*/
        public function getInputDate($name,$label){
	        echo '<label for="'.$label.'">'.$label.'</label><br>';
	        echo '<input type="date" name="'.$name.'"><br>';
	    }

		/**
		* Displays the label and the Radio Buttons Input with all options
		*/
	    public function getRadioButton($list){
	        foreach ($list as $element){
	            echo '<input type="radio" value="'. $element .'">';
	            echo '<label for="'. $element .'">'. $element. '</label><br>';
	        }
		}

		/**
		* Displays the label and the DropDown Input with all possibilities
		*/
		public function getDropDown($array){
	        echo "<select name='nom' size='1'>";
	        foreach ($array as &$value) {
	            echo "<option>".$value;
	        }
	        echo "</select>";
	    }

		/**
		* Displays the label and the type list with all possibilities
		*/
	    public function getInputTypeList($name, $values) {
	    	echo '<select name="' .$name.'"><br>';
	    	foreach ($values AS $value) {
	    		echo '<option value="' .$value. '">' .$value. '</option>';
	    	}
	    	echo "</select><br>";
	    }

		/**
		* Displays the label and the Text Input With the specified content inside
		*/
	    public function setInputText($name, $label, $value) {
			echo '<label for ="'.$name.'">'.$label.'</label></br>';
			echo '<input type="text" id="'.$name.'" name="' .$name. '" value= "' . $value . '"><br>';
		}

		/**
		* Displays the label and the typeList Input With the specified content inside for every possibilities
		*/
		public function setInputTypeList($name, $label, $value, $arr) {
	    	echo '<select name="' . $name .'"><br>';
	    	echo '<option value="' . $value . '">"' . $value . '"</option>';
	    	foreach ($arr AS $val) {
	    		if (!($value == $val)) {
	    			echo '<option value="' . $val . '">"' . $val . '"</option>';
	    		}
	    	}
	    	echo "</select><br>";
	    }

		/**
		* Displays the label and the Date Input With the specified content inside
		*/
	    public function setInputDate($name, $label, $value){
	        echo '<label for="'.$label.'">'.$label.'</label><br>';
	        echo '<input type="date" name="'.$name.'" value="' . $value . '"><br>';
	    }
	}
?>