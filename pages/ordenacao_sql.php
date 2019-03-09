<?php
//Script para adicionar carro novo - mysql
session_start();
//Conectar à bd
$connect = mysqli_connect(/**************************/) or die (header('Location: error.php'));
mysqli_set_charset($connect,"utf8");
//Criar query+
$query0 = 'UPDATE stock SET orderid = 0 WHERE primary_id = '.$_GET["c_id"].';';
$query1 = 'UPDATE stock SET orderid = orderid + 1 WHERE primary_id != '.$_GET["c_id"].';';
$query2 = 'UPDATE stock SET orderid = 1 WHERE primary_id = '.$_GET["c_id"].';';

//Executar query
$rs = mysqli_query($connect,$query0);

//Apanhar erros!
if ($rs == false){
	$_SESSION['erro'] = mysqli_error($connect);
	header('Location: error.php'); 
	die();
}
//Executar query
$rs = mysqli_query($connect,$query1);

//Apanhar erros!
if ($rs == false){
	$_SESSION['erro'] = mysqli_error($connect);
	header('Location: error.php'); 
	die();
}
$rs = mysqli_query($connect,$query2);

//Apanhar erros!
if ($rs == false){
	$_SESSION['erro'] = mysqli_error($connect);
	header('Location: error.php'); 
	die();
}

mysqli_close($connect);
//Redireccionar para a próxima página
header('Location: success_edit.php'); 
?>
