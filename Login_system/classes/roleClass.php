<?php
	//Admin of user
	class Role{
		public $dbh;

		public function __construct($db_handle) { 
			$this->dbh = $db_handle; 
		} 

		public function getRole() {
			$stmt = $this->dbh->prepare("SELECT * FROM role");
			$stmt->execute();

			$get_rollen_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "<select name='role_id'>";
				foreach ($get_rollen_array as $rol_array) {
					echo "<option value='";
					echo $rol_array['id'] . "'> " . $rol_array['descr'];
				    echo "</option>";
				}
			echo "</select>";
	    }
	}
?>
