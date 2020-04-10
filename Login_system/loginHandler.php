<style Stype="text/css">
	<?php include 'styling/style.css'; ?>
</style>

<?php
	error_reporting(E_ALL);

	//Includes
	include "classes/db_connection.php";

	//DB connection
	$db_handle = DBConnect::getInstance(); 
	session_start();

	header("Location: form_login.php");

	//als username en password ingevuld zijn dan haalt hij de gegevens op uit de db
	if (isset($_POST['username']) && ($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST["password"];

		//haalt en bind de gegevens aan elkaar, de query vergelijkt user.person_id met person.id om deze aan elkaar te binden
		$stmt = $db_handle->prepare("SELECT username, password, role_id FROM user, person WHERE user.person_id = person.id AND username = ? AND password = ?");
		$stmt->bindParam(1, $username);
		$stmt->bindParam(2, $password);
		$stmt->execute();
		
		//Haalt alle gegevens op
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		//Loopt door de resultaten vanuit de database
		foreach ($result as $rol_array) {
			//als de role_id gelijk is aan 1 dan laat hij de admin pagina zien
			//als de role_id gelijk is aan 2 dan laat hij de user pagina zien
			if ($rol_array['role_id'] == 1) {
				header("Location: admin/admin.php");
			}
			if ($rol_array['role_id'] == 2) {
				header("Location: user/user.php");
			}
		}
	}
?>
