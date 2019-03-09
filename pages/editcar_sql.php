<?php
//Script para adicionar carro novo - mysql
//Iniciar sessão para gerir variáveis entre páginas
session_start();
//Conectar à bd
$connect = mysqli_connect(/**************************/) or die (header('Location: error.php'));
mysqli_set_charset($connect,"utf8");
//Criar query
$query = 'UPDATE stock SET brand = "'.$_POST["brand"].'" , model = "'.$_POST["model"].'" , mileage = '.$_POST["mileage"].' , price = '.$_POST["price"].',num_doors = '.$_POST["num_doors"].', num_seats = '.$_POST["num_seats"].',fuel = "'.$_POST["fuel"].'",color_outside = "'.$_POST["color_outside"].'" ,color_inside = "'.$_POST["color_inside"].'" ,traction = "'.$_POST["traction"].'" ,power = '.$_POST["power"].' ,cylinder = '.$_POST["cylinder"].' ,category = "'.$_POST["category"].'",car_date = '.$_POST["car_date"].' ,gearbox_type = "'.$_POST["gearbox_type"].'" ,gearbox_num = '.$_POST["gearbox_num"].' ,ac_type = "'.$_POST["ac_type"].'" ,caracteristics = "'.$_POST["caracteristics"].'",outstand = "'.$_POST["outstand"].'",iuc = '.$_POST["iuc"].',warranty_type = "'.$_POST["warranty_type"].'" WHERE primary_id ='.$_POST["c_id"].';';

//Executar query
$rs = mysqli_query($connect,$query);

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
