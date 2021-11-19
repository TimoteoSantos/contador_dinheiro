<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Contador de dinheiro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
 integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" 
 crossorigin="anonymous">
	
<?php require 'php_contador.php'; ?>

  </head>
  <body>
<div class="corpo">
 <div class= "cabecalho">
  
	<img src=img/logo.png class="logo" width= 100px>
	
	<h2> Soma Total </h2>

	<h2 class="red"> <?php echo "Total [" .  $somar . "]" ?> </h2>

	<h3><a href="index.php"> <button type="button" class="btn btn-primary">Voltar</button></a>  </h3>
	
	<p></p>
	
	<table class="table" >
		<th class="col">
			Dinheiro
		</th>
		<th>

			Quantidade
	
			</th>
			<th>Valor</th>

			<!-- valor -->
			<tr>
				<td>0,05</td>
				<td><?php echo $obter_post_05; ?></td>
				<td><?php echo $centavos_05; ?></td>
			</tr>
			<!-- final moeda -->

						<!-- valor -->
			<tr>
				<td>0,10</td>
				<td><?php echo $obter_post_010; ?></td>
				<td><?php echo $centavos_10; ?></td>
			</tr>
			<!-- final moeda -->

						<!-- valor -->
			<tr>
				<td>0,25</td>
				<td><?php echo $obter_post_25; ?></td>
				<td><?php echo $centavos_25; ?></td>
			</tr>
			<!-- final moeda -->
						<!-- valor -->
			<tr>
				<td>0,50</td>
				<td><?php echo $obter_post_50; ?></td>
				<td><?php echo $centavos_50; ?></td>
			</tr>
			<!-- final moeda -->
						<!-- valor -->
			<tr>
				<td>1</td>
				<td><?php echo $obter_post_1; ?></td>
				<td><?php echo $centavos_1; ?></td>
			</tr>
			<!-- final moeda -->
						<!-- valor -->
			<tr>
				<td>2</td>
				<td><?php echo $obter_post_2; ?></td>
				<td><?php echo $cedulas_2; ?></td>
			</tr>
			<!-- final moeda -->
						<!-- valor -->
			<tr>
				<td>5</td>
				<td><?php echo $obter_post_5; ?></td>
				<td><?php echo $cedulas_5; ?></td>
			</tr>
			<!-- final moeda -->
						<!-- valor -->
			<tr>
				<td>10</td>
				<td><?php echo $obter_post_10; ?></td>
				<td><?php echo $cedulas_10; ?></td>
			</tr>
			<!-- final moeda -->
						<!-- valor -->
			<tr>
				<td>20</td>
				<td><?php echo $obter_post_20; ?></td>
				<td><?php echo $cedulas_20; ?></td>
			</tr>
			<!-- final moeda -->
						<!-- valor -->
			<tr>
				<td>50</td>
				<td><?php echo $obter_post_50; ?></td>
				<td><?php echo $cedulas_50; ?></td>
			</tr>
			<!-- final moeda -->
						<!-- valor -->
			<tr>
				<td>100</td>
				<td><?php echo $obter_post_100; ?></td>
				<td><?php echo $cedulas_100; ?></td>
			</tr>
			<!-- final moeda -->
						<!-- valor -->
			<tr>
				<td>200</td>
				<td><?php echo $obter_post_200; ?></td>
				<td><?php echo $cedulas_200; ?></td>
			</tr>
			<!-- final moeda -->
</div>
</table>
</div>