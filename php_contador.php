<?php

$somar = 0;

//centavos

$obter_post_05  = floatval(filter_var( $_POST['Sentavos_05'], FILTER_SANITIZE_STRING));
$centavos_05 = $obter_post_05 * 0.05;

$obter_post_010 = floatval (filter_var( $_POST['Sentavos_10'], FILTER_SANITIZE_STRING));
$centavos_10 = $obter_post_010 * 0.10;

$obter_post_25 = floatval (filter_var( $_POST['Sentavos_25'], FILTER_SANITIZE_STRING));
$centavos_25 = $obter_post_25 * 0.25;

$obter_post_50 = floatval (filter_var( $_POST['Sentavos_50'], FILTER_SANITIZE_STRING));
$centavos_50 = $obter_post_50 * 0.50;

$obter_post_1 = floatval (filter_var( $_POST['Sentavos_1'], FILTER_SANITIZE_STRING));
$centavos_1 = $obter_post_1 * 1;

//cedulas[

$obter_post_2 = floatval (filter_var( $_POST['Cedulas_2'], FILTER_SANITIZE_STRING));
$cedulas_2 = $obter_post_2 * 2;

$obter_post_5 = floatval (filter_var( $_POST['Cedulas_5'], FILTER_SANITIZE_STRING));
$cedulas_5 = $obter_post_5 * 5;

$obter_post_10 = floatval (filter_var( $_POST['Cedulas_10'], FILTER_SANITIZE_STRING));
$cedulas_10 = $obter_post_10 * 10;

$obter_post_20 = floatval (filter_var( $_POST['Cedulas_20'], FILTER_SANITIZE_STRING));
$cedulas_20 = $obter_post_20 * 20;

$obter_post_50 = floatval (filter_var( $_POST['Cedulas_50'], FILTER_SANITIZE_STRING));
$cedulas_50 = $obter_post_50 * 50;

$obter_post_100 = floatval (filter_var( $_POST['Cedulas_100'], FILTER_SANITIZE_STRING));
$cedulas_100 = $obter_post_100 * 100;

$obter_post_200 = floatval (filter_var( $_POST['Cedulas_200'], FILTER_SANITIZE_STRING));
$cedulas_200 = $obter_post_200 * 200;

//soma totao
$somar = $centavos_05 + $centavos_10 + $centavos_25 + $centavos_50 + $centavos_1 +  $cedulas_2 + $cedulas_5 + $cedulas_10 + $cedulas_20 + $cedulas_50 + $cedulas_100+ $cedulas_200;








?>