<?php
//Iniciar sessão
session_start();

$imgnum = 1; 

//Enviar ficheiros na fila pendente - ele executa isto por cada imagem que exista
if(!empty($_FILES)) {    
    $upload_dir = "../../car_images/car".$_SESSION['id']."/";
    $fileName = $_FILES['file']['name'];
    $uploaded_file = $upload_dir.$fileName;
    move_uploaded_file($_FILES['file']['tmp_name'],$uploaded_file);     
}
else {
//Enviar informação das fotos para a base de dados
$connect = mysqli_connect(/**************************/) or die (header('Location: error.php'));
mysqli_set_charset($connect,"utf8");
$dir = "car_images/car".$_SESSION['id']."/";
$scandir =  "../../car_images/car".$_SESSION['id']."/";
$picnum = 1;
$files = scandir($scandir,SCANDIR_SORT_ASCENDING);
for ($i= 0; $i < count($files) ; $i++){
	if ($i == 0 || $i == 1)
		continue;
	//echo $i-1;
	$path = $dir.print_r($files[$i],TRUE);
	//echo $path;
	if ($i == 2) {
		$query = 'INSERT INTO car_images (car_id,img1) VALUES ('.$_SESSION["id"].',"'.$path.'");';
	}
	else {
		$query = 'UPDATE car_images SET img'.strval($i-1).' = "'.$path.'" WHERE car_id = '.$_SESSION["id"].';';
	}
	//echo "<br>".$query."<br>";
	$picnum++;
	$rs = mysqli_query($connect,$query);
if ($rs == false)
	{
	$_SESSION['erro'] = mysqli_error($connect);
	header('Location: error.php'); 
	die();
	}
}
mysqli_close($connect);
//Redireccionar para a próxima página
header('Location: success_img.php'); 
}
?>