<?php
	
	
//********************************** Check if artist exists in database *********************



function artist_check($name) {

	global $con;

	$name_query = "SELECT artist_name
					 FROM artist_info 
					 WHERE artist_name = '".$name."'";
					 
	$name_result = mysqli_query($con, $name_query);
	
	//print_r($name_result);/*
	
	if(mysqli_num_rows($name_result) == 0) {
		//echo "\nThis artist does not exist, returning to artist search.\n";
		header("location: ../artist_not_found.php");	
	}
	
	
}
	

//********************************* Return average stars for artist **********************
function get_stars_avg($name) {
	
	global $con;

	$avg_stars_query = "SELECT AVG(ar.artist_stars) AS stars_average 
					FROM artist_reviews ar
					INNER JOIN artist_info ai
					  ON ar.id = ai.artist_id
					  WHERE artist_name = '".$name."'";
	
	$avg_stars_result = mysqli_query($con, $avg_stars_query); 

	$avg_stars_val = mysqli_fetch_array($avg_stars_result);  
	
	$avg_stars = $avg_stars_val["stars_average"];
	
	//echo $avg_stars;
	
    $get_stars = avg_star_getter($avg_stars);
	
	return $get_stars;
	
}				


//********************************** Return all star reviews ********************************

function get_all_stars($name) {

	global $con;	
	
	// work on this query; use join to retrieve stars using artist name from other table
	$stars_query = "SELECT ar.artist_stars 
					FROM artist_reviews ar
					INNER JOIN artist_info ai
					ON ar.id = ai.artist_id
					WHERE artist_name = '".$name."'";
	
	$stars_result = mysqli_query($con, $stars_query); 

	//$stars_val = mysqli_fetch_assoc($stars_result);  
	
	//$stars = $stars_val["artist_stars"];
		
	return $stars_result;
}


//********************************* Return all text reviews *****************************

function get_all_text_reviews($name) {
	
	global $con;

	$review_query = "SELECT ar.artist_review 
					 FROM artist_reviews ar
					 INNER JOIN artist_info ai
					 ON ar.id = ai.artist_id
					 WHERE ai.artist_name = '".$name."'";
					   
	$review_result = mysqli_query($con, $review_query); 
	
	return $review_result;
	
}


//******************** Return the names of the reviewers per artist ********************

function get_all_reviewers($name) {
	
	global $con;
	
	$reviewer_query = "SELECT ar.reviewer
					   FROM artist_reviews ar
					   INNER JOIN artist_info ai
					   ON ar.id = ai.artist_id
					   WHERE ai.artist_name = '".$name."'";
					   
	$reviewer_result = mysqli_query($con, $reviewer_query); 
	
	return $reviewer_result;
	
}


function get_all_artists() { 

	global $con; 
	
	
	$artist_query = "SELECT artist_name 
					 FROM artist_info
					 ORDER BY artist_name"; 
					 
	$artist_result = mysqli_query($con, $artist_query); 
	
	return $artist_result; 

}




function add_review($name) {
	
	global $con; 
	
	
	$add_star_review = $_POST['action'];
	$add_text_review = $_POST['text_review'];
	$add_your_name = $_POST['your_name']; 
	
	//$name_of_artist = $name;
	
	
	//echo $name_of_artist."\n\n";
	
	
	
	
	
	//******* Get id from artist name to store into artist_review table ****	
	
    $id_query = "SELECT artist_id FROM artist_info
				 WHERE artist_name = '$name'";
				 
	$id_result = mysqli_query($con, $id_query);
	
	
	while($id_row = mysqli_fetch_assoc($id_result)) {
		
		//echo $id_row['artist_id']."<br><br>"; 
		$add_id = $id_row['artist_id'];
		//echo "THE ID: ".$add_id."\n\n";
		
	}
			
		
	
	
    //******************** Store review into database *********************
	
	
	$add_full_review = "INSERT INTO artist_reviews(id, artist_stars, artist_review, reviewer) 
					  VALUES($add_id, $add_star_review, '$add_text_review', '$add_your_name')";
	
	mysqli_query($con, $add_full_review); 
	
	
	//echo $add_star_review."<br><br>";
	//echo $add_text_review;
	
	
	/*header("refresh:5; url=../artistreviews.html");
	
	echo "Your review has been added, returning to artist search."; */
	
	
	
}
 
?>