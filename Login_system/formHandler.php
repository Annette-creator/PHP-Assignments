<style Stype="text/css">
	<?php include 'styling/style.css'; ?>
</style>

<?php
	error_reporting(E_ALL);
	
	//Includes
	include "classes/db_connection.php";
	include "classes/personClass.php";
	include "classes/roleClass.php";
	include "classes/userClass.php";
	include "form_register.php";
	
	//DB connection
	$db_handle = DBConnect::getInstance(); 

	//Check of alles is ingevuld van het formulier voor nieuwe gebruiker
	if (isset($_POST['name']) && ($_POST['email'])) {
		if (isset($_POST["id"])) {
			$id = $_POST["id"];
		}		

		if (isset($_POST["name"])) {
			$name = $_POST["name"];
		}

		if (isset($_POST["email"])) {
			$email = $_POST["email"];
		}

		if (isset($_POST["role_id"])) {
			$role_id = $_POST["role_id"];
		}

		//Geeft data door naar db connectie in personClass
	 	$person = new Person($db_handle, $name, $email, $role_id);
	 	$person->setPerson();
		header('Location: form_login.php');

	 	//checkt of username en password zijn ingevuld. Als ze zijn ingevuld worden ze in de tabel user gestopt, zoniet dan slaat hij dit stuk code over.
		if (empty($_POST["username"]) && ($_POST["password"])) {
		    echo '$username or password is either 0, empty, or not set at all';
		    exit();
		}
		if (isset($_POST['username']) && ($_POST['password'])) {
			if (isset($_POST["username"])) {
				$username = $_POST["username"];
			}

			if (isset($_POST["password"])) {
				$password = md5($_POST["password"]);
			}

			if (isset($_POST["person_id"])) {
				$person_id = $_POST["person_id"];
			}
		 	//haalt het id op van person en geeft het door in de db
		 	$result = $person->getPerson("id");
		 	$person_id = $result["id"];

			$user = new User($db_handle, $username, $password, $person_id);
		 	$user->setUser();
		 	header('Location: form_login.php');
		}
	}
?>
