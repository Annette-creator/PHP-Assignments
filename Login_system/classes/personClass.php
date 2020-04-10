<?php	
	//NAW gegevens
	class Person {
		public $dbh;
		public $id;
		public $name;
		public $email;
		public $role_id;
		
		public function __construct($db_handle, $name, $email, $role_id) { 
			$this->dbh = $db_handle; 
			$this->name = $name;
			$this->email = $email;
			$this->role_id = $role_id;
		}

		public function setPerson() {
			// prepare sql and bind parameters
		    $stmt = $this->dbh->prepare("INSERT INTO person (id, name, email, role_id) VALUES (NULL, ?, ?, ?)");
		    $stmt->bindParam(1, $this->name);
		    $stmt->bindParam(2, $this->email);
		    $stmt->bindParam(3, $this->role_id);
			$stmt->execute();
		}

		//Haalt het id op uit de database in combi met formHandler
		public function getPerson($select){
			$stmt = $this->dbh->prepare("SELECT $select FROM person WHERE name = ? AND email = ?");
			$stmt->bindParam(1, $this->name);
		    $stmt->bindParam(2, $this->email);
		    $stmt->execute();

		    $result = $stmt->fetch(PDO::FETCH_ASSOC);
		    return $result;
		}
	}
?>