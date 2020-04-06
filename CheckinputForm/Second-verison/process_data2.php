<?php
	if(isset($_POST["firstname"]) && $_POST["lastname"] && $_POST["address"] && $_POST["zipcode"] && $_POST["phonenumber"] != "") {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$zipcode = $_POST['zipcode'];
		$phonenumber = $_POST['phonenumber'];
		$comment = $_POST['comment'];
		echo "First name: ". $firstname. "<br/>" . "Last name: ". $lastname. "<br/>" . "Adrress: ". $address. "<br/>" . "Zipcode: ". $zipcode. "<br/>" . "Phone number: ". $phonenumber. "<br/>" . "Comment: ". $comment;	
	}else{
		echo "Er is een veld nog leeg"."</br></br>";
	}
?>

