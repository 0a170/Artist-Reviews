<?php

    $serv = 'localhost';
	$userName = 'root';
	$passWord = 'foolish';
	$dbName = 'artistreviews';
	$port = 3306; 
	
	
	
	/*$dsn  = 'mysql:host=localhost;dbname=projects;port=3306';
	$username = 'root';
	$password = '';
	
	$con = new PDO($dsn, $username, $password); */
	
	
	$con = new mysqli($serv, $userName, $passWord, $dbName);
	
	//$con = mysqli_connect($serv, $userName, $passWord, $dbName, $port);
	
	if (mysqli_connect_errno()){
       	    echo 'Failed to connect to MySQL:' . mysqli_connect_error();
  	} 

?>
	