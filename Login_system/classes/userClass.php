<?php
	//Inlog gegevens
	class User{
		public $dbh;
		public $username;
		public $password;
		public $person_id;

		//defineerd de vaste dingen in de functies.
		public function __construct($db_handle, $username, $password, $person_id) { 
			$this->dbh = $db_handle; 
			$this->username = $username;
			$this->password = $password;
			$this->person_id = $person_id;
		} 

		//functie voor de query
		public function setUser() {
			// prepare sql and bind parameters
		    $stmt = $this->dbh->prepare("INSERT INTO user (user_id, username, password, person_id) VALUES (NULL, ?, ?, ?)");
		    $stmt->bindParam(1, $this->username);
		    $stmt->bindParam(2, $this->password);
		    $stmt->bindParam(3, $this->person_id);

			if($stmt->execute()){
				return True;
			}
			return False;

			echo "New records created successfully";
		}
	}
?>