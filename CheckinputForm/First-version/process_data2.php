<?php
	//Kijk of de variable leeg zijn anders moet hij het laten zien
	$firstname = "";
	if (!empty($_POST["firstname"])) {
		$firstname = $_POST["firstname"];
	}

	$lastname = "";
	if (!empty($_POST["lastname"])) {
		$lastname = $_POST["lastname"];
	}

	$address = "";
	if (!empty($_POST["address"])) {
		$address = $_POST["address"];
	}	

	$zipcode = "";
	if (!empty($_POST["zipcode"])) {
		$zipcode = $_POST["zipcode"];
	}	

	$phonenumber = "";
	if (!empty($_POST["phonenumber"])) {
		$phonenumber = $_POST["phonenumber"];
	}	

	$comment = "";

	//Geeft een foutmelding wanneer input leeg is
	if ($firstname == "") {
		echo "fout";
		exit();
	}
	if ($lastname == "") {
		echo "fout";
		exit();
	}
	if ($address == "") {
		echo "fout";
		exit();
	}
	if ($zipcode == "") {
		echo "fout";
		exit();
	}
	if ($phonenumber == "") {
		echo "fout";
		exit();
	}

	//Weergeeft de data van het formulier
  	echo "First name: ". $firstname. "<br/>";
  	echo "Last name: ". $lastname. "<br/>";
  	echo "Adrress: ". $address. "<br/>";
  	echo "Zipcode: ". $zipcode. "<br/>";
  	echo "Phone number: ". $phonenumber. "<br/>";
  	echo "Comment: ". $comment;
?>

