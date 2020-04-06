<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>opdracht13</title>
		<style>
			p{
				font-family: arial;
			}
			ul {
			  list-style-type: none;
			  margin: 0;
			  padding: 0;
			  overflow: hidden;
			  background-color: #333;
			  margin: 0 0 20px 0;
			}
			li {
			  float: left;
			  font-family: arial;
			}
			li a {
			  display: block;
			  color: white;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
			}
			li a:hover {
			  background-color: #111;
			}
		</style>
	</head>
	<body>
		<main>
			<?php
				const MAX_PAGE = 3;
				$page = 1;
				if (isset($_GET['page'])) {
					$page = $_GET['page'];
				}

				for ($i=1; $i <= MAX_PAGE; $i++) { 
					if ($page != $i) {
						echo "<a href='index.php?page=$i'>klik hier voor pagina $i</a> <br/>";
					}
				}

				echo "<br/>";
				echo "<p>Dit is de content van pagina " .$page . "</p>";
				echo "<img src='".$page.".png' height='100px'>";

				//Alternatief voor afbeeldingen inladen
				// $ar = array("one.jpg", "two.png", "three.png");
				// echo "<img src='".$ar[".$page."]."'>";
			?>
		</main>
	</body>
</html>


<!-- 
if($_GET["pagina1"] == "pagina_1"){
	echo "<nav>"."<ul>".
			"<li><a href='?pagina2=pagina_2'>Pagina 2</a></li>".
			"<li><a href='?pagina3=pagina_3'>Pagina 3</a></li>".
		"</ul>"."</nav>";
	echo "<p>Dit is pagina 1 </p>";
	echo "<img src='one.jpg' height='100px'/> <br/>";

}
elseif ($_GET["pagina2"] == "pagina_2"){
	echo "<nav>"."<ul>".
			"<li><a href='?pagina1=pagina_1'>Pagina 1</a></li>".
			"<li><a href='?pagina3=pagina_3'>Pagina 3</a></li>".
		"</ul>"."</nav>";						

	echo "<p>Dit is pagina 2</p>";
	echo "<img src='two.png' height='100px'/> <br/>";
}
elseif($_GET["pagina3"] == "pagina_3"){
	echo "<nav>"."<ul>".
			"<li><a href='?pagina1=pagina_1'>Pagina 1</a></li>".
			"<li><a href='?pagina2=pagina_2'>Pagina 2</a></li>".
		"</ul>"."</nav>";	
	echo "<p>Dit is pagina 3</p>";
	echo "<img src='three.png' height='100px'/> <br/>";
} 
-->