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

	//Als er een id aanwezig is, haalt hij de db connectie op en de bijbehorende gegevens van het desbetreffende id
	if (isset($_GET['id'])){
		//haalt connectie op
		$get_user_info = $admin->getUserInfo($_GET['id']);

		//vraagt om gegevens in db
		$id = $get_user_info[0]['id'];
		$name = $get_user_info[0]['name'];
		$email = $get_user_info[0]['email'];
		$role_id = $get_user_info[0]['role_id'];
		$username = $get_user_info[0]['username'];

		//toon info in form
		$user = new Admin($db_handle, $id, $name, $email, $role_id, $username);
		echo $user->editUserInfo();
	} 

?>