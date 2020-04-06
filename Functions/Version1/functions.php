<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>opdracht12</title>
	</head>
	<body>
		<?php
			//Show header
			function show_header() {
				echo "<header>";
			    echo "Dit is een header<br/>";
			    echo "</header>";
			}
		?>
		<?php
			//show content	
			function show_content(){
				echo "<main>";
				echo "<br/>Dit is content<br/>";
				echo "<img src='bg.png' height='100px'>";
				echo "</main>";
			}
		?>
		<?php
			//show footer
			function show_footer(){
				echo "<footer>";
				echo "<br/>Dit is een footer";
				echo "</footer>";
			}
		?>
	</body>
</html>

