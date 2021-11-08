<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Contador de dinheiro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css.css">
	
<?php

$somar = 0;

$centavos_05 = 0.05 * filter_var( $_POST['Sentavos_05'], FILTER_SANITIZE_STRING);
$centavos_10 = 0.10 * filter_var( $_POST['Sentavos_10'], FILTER_SANITIZE_STRING);
$centavos_25 = 0.25 * filter_var( $_POST['Sentavos_25'], FILTER_SANITIZE_STRING);
$centavos_50 = 0.50 * filter_var( $_POST['Sentavos_50'], FILTER_SANITIZE_STRING);
$centavos_100 = 1 * filter_var( $_POST['Sentavos_1'], FILTER_SANITIZE_STRING);

$cedulas_2 = 2  * filter_var( $_POST['Cedulas_2'], FILTER_SANITIZE_STRING);
$cedulas_5 = 5 * filter_var( $_POST['Cedulas_5'], FILTER_SANITIZE_STRING);
$cedulas_10 = 10 * filter_var( $_POST['Cedulas_10'], FILTER_SANITIZE_STRING);
$cedulas_20 = 20 * filter_var( $_POST['Cedulas_20'], FILTER_SANITIZE_STRING);
$cedulas_50 = 50 * filter_var( $_POST['Cedulas_50'], FILTER_SANITIZE_STRING);
$cedulas_100 = 100 * filter_var( $_POST['Cedulas_100'], FILTER_SANITIZE_STRING);
$cedulas_200 = 200 * filter_var( $_POST['Cedulas_200'], FILTER_SANITIZE_STRING);


$somar = $centavos_05 + $centavos_10 + $centavos_25 + $centavos_50 + $centavos_100 +  $cedulas_2 + $cedulas_5 + $cedulas_10 + $cedulas_20 + $cedulas_50 + $cedulas_100 + $cedulas_200;

?>

  </head>
  <body>

 <div class= "cabecalho">
  
	<img src=img/logo.png class="logo" width= 100px>
	
	<h2> Soma Total </h2>

	<h2 class="red"> <?php echo $somar ?> </h2>

	<h3><a href="index.php"> <<- Voltar <<- </a>  </h3>
	
	</div>
</div>