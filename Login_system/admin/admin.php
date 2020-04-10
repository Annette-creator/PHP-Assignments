<style Stype="text/css">
	<?php include '../styling/style.css'; ?>
</style>

<?php
	error_reporting(E_ALL);

	//Includes
	include "../classes/db_connection.php";
	include "../classes/adminClass.php";

	$db_handle = DBConnect::getInstance(); 

	$id = '';
	$name = '';
	$email = '';
	$role_id = '';
	$username = '';

	$admin = new Admin($db_handle, $id, $name, $email, $role_id, $username);
	$result = $admin->setUsers();

	//lege users array
	$db_users = array();

	//Heading van de tabel wordt weergegeven
	echo "
		Welkom Admin, <a href='../classes/logout.php'>Logout</a><br/><br/>
		<table>
	        <tr class='tr_table'>
	            <th width='100px'>ID</th>
	            <th width='120px'>Naam</th>
	            <th width='220px'>Email</th>
	            <th width='100px'>Role_id</th>
	            <th width='201px'>Gebruikersnaam</th>
	        </tr>
	    </table>";

	foreach ($result as $row) {
		// //haalt de resultaten op uit de db rijen
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$role_id = $row['role_id'];
		$username = $row['username'];

		$user = new Admin($db_handle, $id, $name, $email, $role_id, $username);

		//Koppelt de lege array $db_users aan $users
		array_push($db_users, $user);
	}

	foreach ($db_users as $user) {
		//Haalt de functie op uit FormClass.php
		echo $user->getUsers();
	}
?>