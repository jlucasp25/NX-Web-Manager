<?php
	mail(/**************************/,"Error Report - NX WEB MANAGER",$_POST['message']);
	header("dashboard.php");
 ?>
