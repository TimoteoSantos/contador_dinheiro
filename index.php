<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>contar dinheiro</title>

<link rel="stylesheet" type="text/css" href="css.css">
	  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
 integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" 
 crossorigin="anonymous">

</head>

<body>


<div class="corpo">

<!--cabecalho-->
<header>

	<img src="img/logo.png" height="50px">

	<h3>Contador de dinheiro</h3>


</header>

<!--dinheiro-->
<section>

	<form action = "calcular.php" method="post">

<div class="afastar">

<div class="left">
<div class="unir"><img src="img/logo_05.png" height="50px"></div>
<div class="unir"><input type="number" name="Sentavos_05"></div>
</div>

<div class="left">
<div class="unir"><img src="img/logo_10.png" height="50px"></div>
<div class="unir"><input type="number" name="Sentavos_10"></div>
</div>

<div class="left">

<div class="left">
<div class="unir"><img src="img/logo_25.png" height="50px"></div>
<div class="unir"><input type="number" name="Sentavos_25"></div>

</div>
</div>

<div class="left">
<div class="unir"><img src="img/logo_50.png" height="50px"></div>
<div class="unir"><input type="number" name="Sentavos_50"></div>
</div>

<div class="left">
<div class="unir"><img src="img/logo_1.png" height="50px"></div>
<div class="unir"><input type="number" name="Sentavos_1"></div>
</div>





<div class="left">
<div class="unir"><img src="img/2.png" height="50px"></div>
<div class="unir"><input type="number" name="Cedulas_2"></div>
</div>

<div class="left">
<div class="unir"><img src="img/5.png" height="50px"></div>
<div class="unir"><input type="number" name="Cedulas_5"></div>
</div>

<div class="left">
<div class="unir"><img src="img/10.png" height="50px"></div>
<div class="unir"><input type="number" name="Cedulas_10"></div>
</div>

<div class="left">
<div class="unir"><img src="img/20.png" height="50px"></div>
<div class="unir"><input type="number" name="Cedulas_20"></div>
</div>

<div class="left">
<div class="unir"><img src="img/50.png" height="50px"></div>
<div class="unir"><input type="number" name="Cedulas_50"></div>
</div>

<div class="left">
<div class="unir"><img src="img/100.png" height="50px"></div>
<div class="unir"><input type="number" name="Cedulas_100"></div>
</div>

<div class="left">
<div class="unir"><img src="img/200.png" height="50px"></div>
<div class="unir"><input type="number" name="Cedulas_200"></div>
</div>


<div> <input type="submit" name="Enviar" value="Calcular"  class="Enviar"></div>



</div>
</form>
</section>

<!-- fim da div corpo -->
</div>
</body>
</html>