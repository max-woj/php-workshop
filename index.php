<?php
$products = [
    ["name" => 'koszulka', "price" => 20],
    ["name" => 'koszulka2', "price" => 30],
    ["name" => 'koszulka3', "price" => 40]
];
?>

<!doctype html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="header">
	<img src="https://via.placeholder.com/80">
</div>
<div class="innerWrapper">
	<div class="leftSidebar">
		<?php
		// TODO: podmień statyczne linki na te pobierane dynamicznie
		// z pages
		$catalog = scandir('./pages');
		print_r($catalog);
		?>
		<ul>
			<li><a href="index.html">Strona główna</a></li>
			<li><a href="galeria.php">Gazetka promocyjna</a></li>
			<li><a href="kontakt.php">Kontakt</a></li>
		</ul>
	</div>
	<div class="content">
		<div class="wrapper">
			<h3>O sklepie</h3>
			<p>Nasz sklep jest super</p>
			<ul>
				<?php
				$suma = 0;
				foreach($products as $product){
					$suma = $suma + $product["price"];
					echo "<li>nazwa: " . $product["name"]. " cena: " .$product["price"] . "</li>";
				}
				?>
			</ul>
			<p>Suma: <?php echo $suma;?> zł</p>
		</div>
	</div>
	<div class="rightSidebar">

	</div>
</div>
<div class="footer">
	<div class="sidenote"><span>Stworzone za pomocą moich dłoni - 22.12.2020</span></div>
</div>
</body>
</html>
