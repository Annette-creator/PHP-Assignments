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

	//variable met de naam button uit het form
	$animal = $_POST['button'];

	//In de variabelen zitten de waardes van de naam variabelen.
	$kat = array(
		new Cat('cat')
	);
	$hond = array(
		new Dog('dog')
	);
	$aap = array(
		new Aap('aap')
	);
	$gecko = array(
		new Gecko('gecko')
	);
	$vis = array(
		new Goudvis('goudvis')
	);

	//Als er op de button wordt geklikt dan zoekt de switch naar de juiste naam en laat de var zien als $animal met de bij behoordende classes.
	switch($animal) {
		case 'Kat':
			foreach ($kat as $animal) {
				echo $animal->name . " zegt: " . $animal->talk() . " en eet: " . $animal->eats() . $animal->barks() . " " . "<a href='animal_talk.php'>Terug</a>" . "<br/><br/>";
			}
		   	break;
		case 'Hond':
			foreach ($hond as $animal) {
				echo $animal->name . " zegt: " . $animal->talk() . " en eet: " . $animal->eats() . $animal->barks() . " " . "<a href='animal_talk.php'>Terug</a>" . "<br/><br/>";
			}
		   	break;
		case 'Aap':
			foreach ($aap as $animal) {
				echo $animal->name . " zegt: " . $animal->talk() . " en eet: " . $animal->eats() . $animal->barks() . " " . "<a href='animal_talk.php'>Terug</a>" . "<br/><br/>";
			}
			break;
		case 'Gekko':
			foreach ($gecko as $animal) {
				echo $animal->name . " zegt: " . $animal->talk() . " en eet: " . $animal->eats() . $animal->barks() . " " . "<a href='animal_talk.php'>Terug</a>" . "<br/><br/>";
			}
			break;
		case 'Vis':
			foreach ($vis as $animal) {
				echo $animal->name . " zegt: " . $animal->talk() . " en eet: " . $animal->eats() . $animal->barks() . " " . "<a href='animal_talk.php'>Terug</a>" . "<br/><br/>";
			}
			break;
		default: 
		    echo "<html><body>
		    	<form action='animal_talk.php' method='POST'>
		    		<input type='submit' name='button' value='Kat'/><br/>
		    		<input type='submit' name='button' value='Hond'/><br/>
		    		<input type='submit' name='button' value='Aap'/><br/>
		    		<input type='submit' name='button' value='Gekko'/><br/>
		    		<input type='submit' name='button' value='Vis'/><br/>
		    	</form></body></html>";
	}

?>