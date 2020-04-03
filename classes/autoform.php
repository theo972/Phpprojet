<?php
	class autoform{
		public function getInputText($name, $label) {
			echo '<label for ="'.$name.'">'.$label.'</label></br>';
			echo '<input type="text" id="'.$name.'" name="' .$name.'"><br>';
		}

		public function getInputSubmit($label) {

			echo '<input type="submit" value"'.$label.'"><br>';
		}

		public function getTextArea($name, $label){
            echo '<label for="'.$label.'">'.$name.'</label><br>';
            echo '<textarea name="'.$name.'"></textarea><br>';
        }

		public function getInputPassword($name, $label, $minlength){
            echo '<label for="'.$label.'">'.$name.'</label><br>';
            echo '<input type="password" name="'.$name.'" minlength="'.$minlength.'" required><br>';
        }

        public function getInputDate($name,$label){
	        echo '<label for="'.$label.'">'.$label.'</label><br>';
	        echo '<input type="date" name="'.$name.'"><br>';
	    }

	    public function getRadioButton($list){
	        foreach ($list as $element){
	            echo '<input type="radio" value="'. $element .'">';
	            echo '<label for="'. $element .'">'. $element. '</label><br>';
	        }
		}

		public function getDropDown($array){
	        echo "<select name='nom' size='1'>";
	        foreach ($array as &$value) {
	            echo "<option>".$value;
	        }
	        echo "</select>";
	    }

	    public function getInputTypeList($name, $values) {
	    	echo '<select name="' .$name.'"><br>';
	    	foreach ($values AS $value) {
	    		echo '<option value="' .$value. '">' .$value. '</option>';
	    	}
	    	echo "</select><br>";
	    }

	    public function setInputText($name, $label, $value) {
			echo '<label for ="'.$name.'">'.$label.'</label></br>';
			echo '<input type="text" id="'.$name.'" name="' .$name. '" value= "' . $value . '"><br>';
		}

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

	    public function setInputDate($name, $label, $value){
	        echo '<label for="'.$label.'">'.$label.'</label><br>';
	        echo '<input type="date" name="'.$name.'" value="' . $value . '"><br>';
	    }
	}
?>