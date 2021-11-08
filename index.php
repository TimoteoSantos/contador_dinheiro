<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Contador de dinheiro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css.css">
	
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
 integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" 
 crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
 integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" 
 crossorigin="anonymous">

  
  </head>
  <body>


 <div class= "cabecalho">
  
	<img src=img/logo.png class="logo" width= 100px>
	
	<h2> Contar Dinheiro </h2>
	
	

	<div closs= "formulario">
	

	<form action = "calcular.php" method="post">
		
		<fieldset>
		<h3> Moédas </h3>
		<span class= paragrafo>
		<h3> <span> R$ 0,05 </span> </h3>
		<input type=number name="Sentavos_05">
		</span>
		
		<span class= paragrafo>
		<h3> <span> R$ 0,10 </span> </h3>
		<input type=number name="Sentavos_10">
		</span>
		
		
		<span class= paragrafo>
		<h3> <span> R$ 0,25 </span> </h3>
		<input type=number name="Sentavos_25">
		</span>
		
		
		<span class= paragrafo>
		<h3> <span> R$ 0,50 </span> </h3>
		<input type=number name="Sentavos_50">
		</span>
		
		
		<span class= paragrafo>
		<h3> <span> R$ 1,00 </span> </h3>
		<input type=number name="Sentavos_1">
		</span>
		
			<h3> Cédulas </h3>
		
		<span class= paragrafo>
		<h3> <span> R$ 2,00 </span> </h3>
		<input type=number name=Cedulas_2>
		</span>
		
		
		<span class= paragrafo>
		<h3> <span> R$ 5,00 </span> </h3>
		<input type=number name=Cedulas_5>
		</span>
		
		<span class= "paragrafo esp">
		<h3> <span> R$ 10,00 </span> </h3>
		<input type=number name=Cedulas_10>
		</span>
		
		<span class= paragrafo>
		<h3> <span> R$ 20,00 </span> </h3>
		<input type=number name=Cedulas_20>
		</span>
		
		<span class= paragrafo>
		<h3> <span> R$ 50,00 </span> </h3>
		<input type=number name=Cedulas_50>
		</span>
		
		<span class= paragrafo>
		<h3> <span> R$ 100,00 </span> </h3>
		<input type=number name=Cedulas_100>
		</span>
		
		<span class= paragrafo>
		<h3> <span> R$ 200,00 </span> </h3>
		<input type=number name=Cedulas_200>
		</span>
		<p></p>
		<span class="paragrafo">
			<input type="submit" name="Enviar" value="Calcular" class="btn btn-primary">

			<p></p>

		</span>
		
		</fieldset>
		
	</form>
 		
	</div>
		
</div>
	
<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" i
ntegrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
 crossorigin="anonymous"></script>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  </body>
</html>