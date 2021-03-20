<?php

	$dsn= "mysql:host=localhost;dbname=elroukysite";
	$user= 'root';
	$password= '';
	$option= array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	);

	try{
		$con= new PDO($dsn,$user, $password , $option);
		$con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOEXCEPTION $e){
		echo 'Faild to connect' . $e -> getMessage();
	}

	
