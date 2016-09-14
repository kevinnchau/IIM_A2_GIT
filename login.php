<?php session_start();

/******************************** 
	 DATABASE & FUNCTIONS 
********************************/
require('config/config.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/

if(isset($_POST['email']) && isset($_POST['password'])){
	if(!empty($_POST['email']) && !empty($_POST['password'])){

		// TODO

		// Force user connection to access dashboard
<<<<<<< HEAD
		if (userConnection($db, $_POST['email'], $_POST['password']) == True){
		
		header('Location: dashboard.php');
	}
=======
		if (userConnection($db, $_POST['email'], $_POST['password']) == True) { 
		
		header('Location: dashboard.php');
	}

>>>>>>> 041aa9c833798438debdc8ac9980e77d87125535
	}else{
		$error = 'Champs requis !';
	}
}

/******************************** 
			VIEW 
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';