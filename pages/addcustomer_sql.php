<?php
//Script para adicionar carro novo - mysql
//Iniciar sessão para gerir variáveis entre páginas

session_start();
//Conectar à bd
$connect = mysqli_connect(/**************************/) or die (header('Location: error.php'));
mysqli_set_charset($connect,"utf8");
//Criar query
$query = 'INSERT INTO customers (name,telephone,email,address,city,job,nif,dateadded) VALUES ("'.$_POST["name"].'",'.$_POST["telephone"].',"'.$_POST["email"].'","'.$_POST["address"].'","'.$_POST["city"].'","'.$_POST["job"].'",'.$_POST["nif"].',NOW());';

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
header('Location: success_addcustomer.php'); 
?>
