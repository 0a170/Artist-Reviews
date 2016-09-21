<?php


	global $con; 
	


?> 



<!DOCTYPE html>

<html>

<head>

<link rel="icon" href="/favicon.ico" type="image/x-icon">
	
	<link rel="stylesheet" type="text/css" href="../pagestyle.css">

	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

</head>


<body>


	<?php 
	
		while(($a_row = mysqli_fetch_array($artist_list))) {
			
			echo '<form action="../controller/control.php" method="GET">
			<br>  
			<input type="hidden" name="name" value="' . $a_row['artist_name'] . '">
			
			<input type="image" src="../resources/artist_images/' . $a_row['artist_name'] . '.jpg" height="100" width="100" 
			name="action" value="To artist page" style="display: inline-block;
			border: 1px solid #D3D3D3; box-sizing: border-box; box-shadow: 2px 2px 2px #D3D3D3">
			
			<br>
			
			<p style="display: inline-block" class="buttonstyle">' . $a_row['artist_name'] . '</p>
			
			<br><br>
			
			</form>';
			
		}
		
	?>




</body>




</html>