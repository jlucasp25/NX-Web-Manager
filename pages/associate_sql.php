<?php
//Script para adicionar carro novo - mysql
session_start();
//Conectar à bd
$connect = mysqli_connect(/**************************/) or die (header('Location: error.php'));
mysqli_set_charset($connect,"utf8");
//Criar query
$query1 = 'SELECT * FROM customers WHERE primary_id = '.$_GET["customer_id"].';';
$rs = mysqli_query($connect,$query1);

//Apanhar erros!
if ($rs == false){
	$_SESSION['erro'] = mysqli_error($connect);
	header('Location: error.php'); 
	die();
}

$result = mysqli_fetch_array($rs);

if ($result['carsold1'] == NULL) {
	$query2 = 'UPDATE customers SET car1 = '.$_SESSION['car_id'].' WHERE primary_id = '.$_GET['customers_id'].';';
}
else if ($result['carsold2'] == NULL) {
	$query2 = 'UPDATE customers SET car2 = '.$_SESSION['car_id'].' WHERE primary_id = '.$_GET['customers_id'].';';
}
else if ($result['carsold3'] == NULL) {
	$query2 = 'UPDATE customers SET car3 = '.$_SESSION['car_id'].' WHERE primary_id = '.$_GET['customers_id'].';';
}
else if ($result['carsold4'] == NULL) {
	$query2 = 'UPDATE customers SET car4 = '.$_SESSION['car_id'].' WHERE primary_id = '.$_GET['customers_id'].';';
}
else {
	$query2 = 'UPDATE customers SET car5 = '.$_SESSION['car_id'].' WHERE primary_id = '.$_GET['customers_id'].';';
}

//Executar query
$rs = mysqli_query($connect,$query2);

//Apanhar erros!
if ($rs == false){
	$_SESSION['erro'] = mysqli_error($connect);
	header('Location: error.php'); 
	die();
}

mysqli_close($connect);
//Redireccionar para a próxima página
header('Location: success_sold.php'); 
?>
