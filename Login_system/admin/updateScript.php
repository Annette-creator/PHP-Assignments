<style Stype="text/css">
	<?php include 'styling/style.css'; ?>
</style>

<?php
	error_reporting(E_ALL);
	
	//Includes
	include "../classes/db_connection.php";
	include "../classes/adminClass.php";
	//include "../classes/roleClass.php";
	
	//DB connection
	$db_handle = DBConnect::getInstance(); 

	$id = '';
	$name = '';
	$email = '';
	$role_id = '';
	$username = '';
	$admin = new Admin($db_handle, $id, $name, $email, $role_id, $username);

	//Als er een id aanwezig is, haalt hij de db connectie op en de bijbehorende gegevens van het desbetreffende id
	if (isset($_POST['id'])){
		//vraagt om gegevens van het formulier
		$set_user_info = array(
			"id"=>$_POST['id'],
			"name"=>$_POST['name'],
			"email"=>$_POST['email'],
			"role_id"=>$_POST['role_id'],
			"username"=>$_POST['username']
		);
		//haalt de db connectie op om gegevens te updaten
		$admin->updateUserInfo($set_user_info);
		//laat het script in de actergrond draaien en stuurt de pagina meteen door naar overzicht
		header('Location: admin.php');
	} 
?>