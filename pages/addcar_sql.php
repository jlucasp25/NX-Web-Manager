<?php
//Script para adicionar carro novo na base de dados PHP 7

//Iniciar sessão para gerir variáveis entre páginas
session_start();

//Conectar à bd
$connect = mysqli_connect(/**************************/) or die (header('Location: error.php'));

//Definir encoding
mysqli_set_charset($connect,"utf8");

//Contar numero de rows
$query = 'SELECT COUNT(primary_id) from stock;';
$rs = mysqli_query($connect,$query);

//Apanhar erros!
if ($rs == false){
	$_SESSION['erro'] = mysqli_error($connect);
	header('Location: error.php'); 
	die();
}

$result = mysqli_fetch_array($rs);
$numcars = $result['COUNT(primary_id)']+1;

//Criar query
$query = 'INSERT INTO stock (brand,model,mileage,price,num_doors,num_seats,fuel,color_outside,color_inside,traction,power,cylinder,category,car_date,gearbox_type,gearbox_num,ac_type,caracteristics,outstand,sold,orderid,dateadded,iuc,warranty_type) VALUES ("'.$_POST["brand"].'","'.$_POST["model"].'",'.$_POST["mileage"].','.$_POST["price"].','.$_POST["num_doors"].','.$_POST["num_seats"].',"'.$_POST["fuel"].'","'.$_POST["color_outside"].'","'.$_POST["color_inside"].'","'.$_POST["traction"].'",'.$_POST["power"].','.$_POST["cylinder"].',"'.$_POST["category"].'",'.$_POST["car_date"].',"'.$_POST["gearbox_type"].'",'.$_POST["gearbox_num"].',"'.$_POST["ac_type"].'","'.$_POST["caracteristics"].'","'.$_POST["outstand"].'","Nao",'.$numcars.',NOW(),'.$_POST["iuc"].',"'.$_POST["warranty_type"].'");';

//Executar query
$rs = mysqli_query($connect,$query);

//Apanhar erros!
if ($rs == false){
	$_SESSION['erro'] = mysqli_error($connect);
	header('Location: error.php'); 
	die();
}

//Criar query para obter o ultimo id
$query = 'SELECT primary_id FROM stock ORDER BY primary_id desc LIMIT 1';

//Executar query
$rs = mysqli_query($connect,$query);

//Apanhar erros!
if ($rs == false){
	$_SESSION['erro'] = mysqli_error($connect);
	header('Location: error.php'); 
	die();
}

//Fetch value
$result = mysqli_fetch_array ($rs);

//Guardar valor obtido
$_SESSION['id'] = $result['primary_id'];
mysqli_close($connect);
//Redireccionar para a próxima página
header('Location: addcar_img.php'); 
?>
