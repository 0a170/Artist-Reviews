<?php 

	
	global $con;
	
	
	
	
?>



<div id="artist_text_reviews" style="text-align: center;">
		
		<?php 
			
			while(($t_row = mysqli_fetch_array($texts)) && ($s_row = mysqli_fetch_array($stars)) && ($r_row = mysqli_fetch_array($reviewers))) { 
					
					echo '<div style="display: inline-block; border: 1px solid #D3D3D3; box-sizing: border-box; box-shadow:
					2px 2px 2px #D3D3D3; text-align: center;">';
					echo '<img src="../resources/stars/'.$s_row['artist_stars'].'stars.png" alt="error">';
					echo "<p>".$t_row['artist_review']."</p><br>"; 
					echo "<p> By:" . $r_row['reviewer'] . " </p>";  
					echo '</div> <br><br>';
				
			}
		?>
</div> 

<br><br><br>

<form action="control.php" method="GET" style="text-align: center;">

	<input type="submit" name="action" value="Return to artist page" style="border: none;background-color: #a9a9a9;color: white;">
	
</form> 
	
	
	