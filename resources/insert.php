<?php 	

	$con= mysqli_connect('localhost','root','','projects','3306');



	// Check connection
	if (mysqli_connect_errno()){
       	    echo 'Failed to connect to MySQL:' . mysqli_connect_error();
  	}
	

	mysqli_query($con, "INSERT INTO artist_info(artist_id, artist_name, artist_genre)
	Values ('2', 'Common', 'Rap')"); 

	mysqli_close($con); 
	
	echo "intial entry entered";

?> 