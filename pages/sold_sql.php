<?php
//Script para adicionar carro novo - mysql
session_start();
$_SESSION['car_id'] = $_GET['c_id'];
//Conectar à bd
$connect = mysqli_connect(/**************************/) or die (header('Location: error.php'));
mysqli_set_charset($connect,"utf8");
//Criar query
$query1 = 'UPDATE stock SET sold = "Sim", datesold = NOW() WHERE primary_id = '.$_GET["c_id"].';';

//Executar query
$rs = mysqli_query($connect,$query1);

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
