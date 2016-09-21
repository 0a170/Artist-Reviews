<?php 	

	$con= mysqli_connect('localhost','root','','projects','3306');



	// Check connection
	if (mysqli_connect_errno()){
       	    echo 'Failed to connect to MySQL:' . mysqli_connect_error();
  	}
	

	mysqli_query($con, "INSERT INTO artist_reviews(id, artist_stars, artist_review)
	Values (2, 9, 'I love him')"); 

	mysqli_close($con); 
	
	echo "intial entry entered";

?> 