<style type="text/css">
	body{font-family: arial;}
	input{
		margin: 20px 0 0 0;
	}
	input[type=submit]{
		font-family: arial;
		width: 100px;
		font-size: 14px;
	    padding:10px 15px; 
	    color: white;
	    background:#7BACE8; 
	    border:0 none;
	    cursor:pointer;
	    -webkit-border-radius: 5px;
	    border-radius: 5px; 
	}
</style>


<?php
	include("AnimalClass.php");

	//array met alle dieren
	$animals = array(
		new Cat('Kat'),
		new Dog('Hond'),
		new Aap('Aap'),
		new Gecko('Gekko'),
		new Goudvis('Vis')
	);

	//loop voor alle dieren
	for ($i=0; $i < count($animals); $i++) { 
		$form_data  = "<html><body><form action='animal_talk.php' method='POST'>
						<input type='hidden' name='animalID' value='".$i."'>
						<input type='submit' value='".$animals[$i]->name."'>
					</form></body></html>";
		echo $form_data;
	}

	if (isset($_POST["animalID"])) {
		$id = ($_POST["animalID"]);
		//haald op basis van het id de naam, of wat het zegt en wat het eet op.
		echo "Dit is een: ".$animals[$id]->name."<br/>
			  Het maakt het geluid: ".$animals[$id]->talk()."<br/>
			  Het eet: " . $animals[$id]->eats()."<br/>";
		//check of het dier blaft of niet
		if ($animals[$id]->barks() == true) {
			echo "De hond blaft";
		}else{
			echo "Het blaft niet";
		}
	}
?>