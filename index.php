<?php
	if(isset($_GET["page"])){
		include "pages/".$_GET["page"].".php";
	}
	else{
		include 'home.php';
	}
?>