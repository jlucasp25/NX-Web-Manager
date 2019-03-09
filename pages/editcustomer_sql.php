<?php
//Script para adicionar carro novo - mysql
//Iniciar sessão para gerir variáveis entre páginas
session_start();
//Conectar à bd
$connect = mysqli_connect(/**************************/) or die (header('Location: error.php'));
mysqli_set_charset($connect,"utf8");
//Criar query
$query = 'UPDATE customers SET name = "'.$_POST["name"].'", telephone = '.$_POST["telephone"].',email = "'.$_POST["email"].'", address = "'.$_POST["address"].'", city = "'.$_POST["city"].'", job = "'.$_POST["job"].'", nif = '.$_POST["nif"].' WHERE primary_id ='.$_POST["c_id"].';';

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
