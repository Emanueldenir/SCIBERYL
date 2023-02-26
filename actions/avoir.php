<?php

include("../infos.php");
include("../common/sub_includes.php");

if(isset($_POST)){

	if(!isset($_SESSION)){
		session_start();
	}
	$_SESSION['jours'] = htmlspecialchars($_POST['jours']);

	}

else{
	header('Location: ../');
}


?>