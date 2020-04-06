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
				echo "<header>Dit is een header<br/></header>";
			}
		?>
		<?php
			//show content	
			function show_content(){
				echo "<main>
						<br/>Dit is content<br/>
						<img src='bg.png' height='100px'>
					</main>";
			}
		?>
		<?php
			//show footer
			function show_footer(){
				echo "<footer><br/>Dit is een footer</footer>";
			}
		?>
	</body>
</html>

