<?php

    /* This is where database connection information should be declared and assigned

        $serv = 
	$userName = 
	$passWord = 
	$dbName = 
	$port =
    */	
	
	$con = new mysqli($serv, $userName, $passWord, $dbName);
	
	//$con = mysqli_connect($serv, $userName, $passWord, $dbName, $port);
	
	if (mysqli_connect_errno()){
       	    echo 'Failed to connect to MySQL:' . mysqli_connect_error();
  	} 

?>
	
