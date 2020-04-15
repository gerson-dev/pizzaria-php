<?php 
	include("includes/pizzas.php");
	include("includes/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pizzaria Fantástica</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/styles.css">
</head>
<body>
	<form id="form-busca">
		<input type="text" name="busca" placeholder="Qual pizza você procura?" autocomplete="off">
		<button type="submit">Buscar</button>
	</form>
	
	<main>
		<?php  foreach ($pizzas as $pizza) :?>
		<article>
			<img src="<?=$pizza["img"]?>" alt="<?=$pizza["nome"]?>">
			<button>+ Add</button>
			<div><?=$pizza["nome"]?></div>
			<span><?=number_format($pizza["preco"], 2, ',', '.')?></span>
		</article>
	<?php endforeach; ?>
		
		
	</main>
	
</body>
</html>