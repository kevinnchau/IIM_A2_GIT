<?php

$host = 'localhost';
<<<<<<< HEAD
$dbname = 'IIM_Git_SoundCloud';
=======
$dbname = 'web_soundcloud';
>>>>>>> 041aa9c833798438debdc8ac9980e77d87125535
$user = 'root';
$pass = 'root';


try{
	$db = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
catch(Exception $e)
{
	echo 'Erreur : '.$e->getMessage().'<br />';
	echo 'N° : '.$e->getCode();
}