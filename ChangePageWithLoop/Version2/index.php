<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>opdracht13</title>
		 <link rel = "stylesheet" type = "text/css" href = "style.css" />
	</head>
	<body>
		<main>
			<?php
				//max pages
				const MAX_PAGE = 3;
				//start is page 1
				$page = 1;
				//get page
				if (isset($_GET['page'])) {
					$page = $_GET['page'];
				}
				//loop through max page
				for ($i=1; $i <= MAX_PAGE; $i++) { 
					if ($page != $i) {
						echo "<a href='index.php?page=$i'>klik hier voor pagina $i</a> <br/>";
					}
				}
				// echo content of the page and page image
				echo "<br/><p>Dit is de content van pagina " .$page . "</p>". "<img src='".$page.".png' height='100px'>";
			?>
		</main>
	</body>
</html>