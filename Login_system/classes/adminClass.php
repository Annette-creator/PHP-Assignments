<style Stype="text/css">
	<?php include '../styling/style.css'; ?>
</style>

<?php	
	class Admin {
		public $dbh;
		public $id;
		public $name;
		public $email;
		public $role_id;
		public $username;
		
		public function __construct($db_handle, $id, $name, $email, $role_id, $username) { 
			$this->dbh = $db_handle; 
			$this->id = $id;
        	$this->name = $name;
        	$this->email = $email;
        	$this->role_id = $role_id;
        	$this->username = $username;
		}

		//Maakt de connectie met de database
		public function setUsers(){
			$stmt = $this->dbh->prepare("SELECT id, name, email, role_id, username FROM person, user WHERE user.person_id = person.id");
			$stmt->execute();

			$result = $stmt->fetchAll();
			return $result;
		}

		//Haalt de gegevens op uit de databases
		public function getUsers(){
			echo "<table>	
					<tr>
			            <td width='100px'>".$this->id."</td><br/>
			            <td width='120px'>".$this->name."</td>
			            <td width='220px'>".$this->email."</td>
			            <td width='100px'>".$this->role_id."</td>
			           	<td width='200px'>".$this->username."</td>
			            <td><a class='button' href='../admin/changeUserScript.php?id=".$this->id."'>Edit info</a></td>
			            <td><a class='button' href='../admin/admin.php?id=".$this->id."'>Delete customer</a></td>
			        </tr>
				</table>";
		}


		//Haalt data op om data te kunnen updaten.
		public function getUserInfo($id){
			$stmt = $this->dbh->prepare("SELECT id, name, email, role_id, username FROM person, user WHERE user.person_id = person.id AND id = :id");
			$stmt->bindParam(':id', $id);
			$stmt->execute();

			$result = $stmt->fetchAll();
			return $result;
		}

		//Laat gegevens user zien in formulier
		public function editUserInfo(){
			echo "<body><html>
				<form action='updateScript.php' method='POST'>
					<input name='id' type='hidden' value=".$this->id."/>
					<p> Naam" . " " . "<input name='name' type='text' value=".$this->name."></p>
					<p> Email" . " " . "<input name='email' type='text' value=".$this->email."></p>
					<p> role_id" . " " . "<input name='role_id' type='text' value=".$this->role_id."></p>
					<p> username" . " " . "<input name='username' type='text' value=".$this->username."></p>
					<div class='buttons'>
						<a href='admin.php'><input type='button' value='Terug'></a>
						<input type='submit' value='Edit'>
					</div>
				</form></html></body>";
		}		

		public function updateUserInfo($set_user_info){
			$stmt = $this->dbh->prepare("UPDATE person, user SET name = ?, email = ?, role_id =?, username =? WHERE user.person_id = person.id AND id = ?");
			$stmt->bindParam(1, $set_user_info["name"], PDO::PARAM_STR);
    		$stmt->bindParam(2, $set_user_info["email"], PDO::PARAM_STR);
    		$stmt->bindParam(3, $set_user_info["role_id"], PDO::PARAM_INT);
    		$stmt->bindParam(4, $set_user_info["username"], PDO::PARAM_INT);
    		$stmt->bindParam(5, $set_user_info["id"], PDO::PARAM_INT);
 
			$stmt->execute();
		}

		public function deleteUser(){
			$stmt = $this->dbh->prepare("DELETE FROM person, user WHERE user.person_id = person.id AND id = :id");
			$stmt->bindParam(':id', $id);
		}

	}
?>