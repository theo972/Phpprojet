<?php

/**
 * Method for initiate connection to database
 */
class request
{
	private $_user;
	private $_pwd;
	private $_dName;
	private $_dbType;
	private $_dbAdress;
	private $_bdd;
	
	/**
	* Constructor to initiate connection to 
	* our database
	* @user -> 		indicate the PhPMyAdmin user
	* @pwd -> 		indicate the passWord of the @user
	* @dbName ->	indicate the database name that the conextion is wanted
	* @dbType ->	indicate the type of database that I want to connect (Oracle, Mysql...)
	* @dbAdress ->	indicate the adress of the database.
	*/
	public function __construct($user, $pwd, $dbName, $dbType, $dbAdress)
	{
		$this->_user = $user;
		$this->_pwd = $pwd;
		$this->_dbName = $dbName;
		$this->_dbType = $dbType;
		$this->_dbAdress = $dbAdress;

		$this->connectDB();
	}

	/**
	* Method to establish 
	* a connexion with the database
	* via the PDO object using classes variables
	*/
	private function connectDB() {
		try {
			if ($this->_bdd === null) {
				$dsn = $this->_dbType . ':dbname=' . $this->_dbName . ';host=' . $this->_dbAdress;
				$this->_bdd = new PDO($dsn, $this->_user, $this->_pwd);
				echo "CONNEXION STARTED<br>";	
			}
			else {
				echo "Connexion already done (debug message from request.php)";
			}
			
		} catch (PDOException $e) {
			echo "Connexion failed : " . $e->getMessage();
			die();
		}
	}

	/**
	* 
	*
	*/
	public function getAllRows($table, $columns) {
		$req = "SELECT " . $columns . "FROM " . $table;
		$tab = $this->_bdd->query($req);
		foreach ($tab as $row) {
			print_r($row['name'] . " " . $row['specie'] . " " . $row['life']);
			echo "<br>";
		}
	}

	public function setUser($user) {
		$req = "INSERT INTO users (Name, First_Name, Birth_Date, Mail_Adress, Gender, Postal_Adress, Sign_DateTime) VALUES ('" . $user->getName() . "', '" . $user->getFirstName() . "', '" . $user->getBirthDate() . "', '" . $user->getMail() . "', '" . $user->getGender() . "', '" . $user->getPostalAdress() . "', NOW() )";
		echo $req;
		try {
			$this->_bdd->query($req) === true;
		} catch (PDOException $e) {
			echo "Can't add the user !";
		}
	}

	public function updateUser($user, $id) {
		$req = "UPDATE users SET Name = '" . $user->getName() . "', First_Name = '" . $user->getFirstName() . "', Birth_Date = '" . $user->getBirthDate() . "', Mail_Adress = '" . $user->getMail() . "', Gender = '" . $user->getGender() . "'  WHERE ID = " . $id;
		try {
			$this->_bdd->exec($req);
		} catch (PDOException $e) {
			echo "Can't update the user !";
		}
	}

	public function getUserRows($table, $columns) {
        $req = "SELECT " . $columns . " FROM " . $table;
        echo $req;
        $tab = $this->_bdd->query($req);
        foreach ($tab as $row) {
            print_r($row['Name'] . " " . $row['First_Name'] . " " . $row['Birth_Date'] . " " . $row['Mail_Adress'] . " " . $row["Gender"] . " " . $row["Postal_Adress"] . " " . $row['Sign_DateTime']);
            echo "<br>";
        }
    }

    public function getCol($table, $columns) {
    	$list = array();
    	$req = "SELECT " . $columns . " FROM " . $table;
        $tab = $this->_bdd->query($req);

        foreach ($tab as $row) {
            array_push($list, $row['Name'] . " " . $row['First_Name']);
        }
        return $list;
    }

    public function getChoice($table, $name, $firstName) {
    	$list = array();
    	$req = "SELECT * FROM users WHERE Name = '" . $name . "' AND First_Name = '" . $firstName . "'";
        $tab = $this->_bdd->query($req);

        foreach ($tab as $row) {
            array_push($list, $row['Name']);
            array_push($list, $row['First_Name']);
            array_push($list, $row['Birth_Date']);
            array_push($list, $row['Mail_Adress']);
            array_push($list, $row['Gender']);
            array_push($list, $row['Postal_Adress']);
            array_push($list, $row['ID']);
        }
        return $list;
    }
}

?>