<style Stype="text/css">
	<?php include 'styling/style.css'; ?>
</style>

<?php
	error_reporting(E_ALL);
	
	//Includes
	include "../classes/db_connection.php";
	include "../classes/adminClass.php";
	
	//DB connection
	$db_handle = DBConnect::getInstance(); 

	$id = '';
	$name = '';
	$email = '';
	$role_id = '';
	$username = '';
	$admin = new Admin($db_handle, $id, $name, $email, $role_id, $username);

	if (isset($_GET['id'])) {
		$get_user_info = $admin->deleteUser($_GET['id']);
	}
?>