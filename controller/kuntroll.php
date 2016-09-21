<?php 

	//session_start();
	
	//$_SESSION['name'];
	//$_SESSION['genre'];
	
	echo getcwd();
	
require("../model/database.php");
require("../star_collector.php");
require("../search_queries.php");
	
	
class Model

{
	
	
	if(isset($_POST['action'])) {
		
		
		//************************ Initial search page *************************
		
		if($_POST['action'] == 'search') {
			
			$_SESSION['name'] = $_POST['name'];
			$_SESSION['genre'] = $_POST['genre'];
			
			$art_name = $_SESSION['name'];
			
			artist_check($art_name);
							
		    $avg_stars = get_stars_avg($art_name); 
			$stars = get_all_stars($art_name); 
			$texts = get_all_text_reviews($art_name);
			$reviewers = get_all_reviewers($art_name);
			
			//include("../artist_search.php");
			header('Location: ../artist_search.php');
			
		}
		
		//************Search for an artist on another artist's page *************
		
		if($_POST['action'] == 'Search again') {
			
			$_SESSION['name'] = $_POST['name'];
			$_SESSION['genre'] = $_POST['genre'];
			
			$art_name = $_SESSION['name'];
			
			artist_check($art_name);
			
			$avg_stars = get_stars_avg($art_name); 
			$stars = get_all_stars($art_name); 
			$texts = get_all_text_reviews($art_name); 
			$reviewers = get_all_reviewers($art_name); 
			
			include("../artist_search.php");
			
			
			
		}
		
		//************************** Add a review *******************************
		
		if($_POST['action'] == '1' || $_POST['action'] == '2' || $_POST['action'] == '3' || $_POST['action'] == '4' || $_POST['action'] == '5' || $_POST['action'] == '6' || $_POST['action'] == '7' || $_POST['action'] == '8' || $_POST['action'] == '9' || $_POST['action'] == '10') {
		
			$art_name = $_SESSION['name'];
		
			add_review($art_name); 
			
		}
		
		//************************** Read all reviews ***************************
		
		if($_POST['action'] == 'Read all reviews') {
			
			$art_name = $_SESSION['name'];
			$stars = get_all_stars($art_name); 
			$texts = get_all_text_reviews($art_name); 
			$reviewers = get_all_reviewers($art_name);
			
			include("../show_all_reviews.php");
			
		}
		
		//************************ After clicking on an artist to view ************
		
		if($_POST['action'] == 'To artist page') {
			
			$art_name = $_POST['name']; 

			$avg_stars = get_stars_avg($art_name); 
			$stars = get_all_stars($art_name); 
			$texts = get_all_text_reviews($art_name); 
			$reviewers = get_all_reviewers($art_name);
			
			include("../artist_search.php");
			
		}
		
		//************************* Return to the artist's page *******************
		
		if($_POST['action'] == 'Return to artist page') {
			
			$art_name = $_SESSION['name'];
			
			//$something = artist_check($art_name);
			
			$avg_stars = get_stars_avg($art_name); 
			$stars = get_all_stars($art_name); 
			$texts = get_all_text_reviews($art_name); 
			$reviewers = get_all_reviewers($art_name);
			
			include("../artist_search.php");
			
		}
		
		//****************** View all artists currently in the database **************************
		
		if($_POST['action'] == 'View all artists') {
			
			$artist_list = get_all_artists(); 
			
			include("../view_all_artists.php"); 
			
		}
		
		
		//********************* Upload an artist ***********************************
		
		
		if($_POST['action'] == 'Upload image') {
			
			
			// ******************** section to insert new artist into database ***********************
	
			$art_name = $_POST["name"];
			$art_genre = $_POST["genre"]; 
	
			mysqli_query($con, "INSERT INTO artist_info(artist_name, artist_genre)
								Values ('$art_name', '$art_genre')");
	
			mysqli_close($con);
			
			
			$artist_folder = "../resources/artist_images/";
	
			$artist_image  = $artist_folder . basename($_FILES["artImg"]["name"]);
	
			//variable to keep track of success or failure of upload
			$upload_success = 1;
	
			$file_type = pathinfo($artist_image, PATHINFO_EXTENSION);
	
			// is the file an image? 
			if(isset($_POST["action"])) {
		
				$check = getimagesize($_FILES["artImg"]["tmp_name"]);
		
				if($check !== false) {
			
					//echo "This file: " . $check["mime"]; 
					$upload_success = 1;
					
				}
				else {
			
					echo "This file is not an image. Returning to previous page.";
			
					// should probably return to add_artist page
					header("refresh:5; url=../add_artist");
			
				}
			
			}
	
			if($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "gif") {
		
				echo "Sorry, not a supported file type. Returning to previous page.";
				$upload_success = 0; 
		
				// should probably return to add_artist page
				header("refresh:5; url=../add_artist.html");
		
			}
	
			if($upload_success == 0) {
		
				echo "Image not uploaded for some reason. Returning to previous page.";
		
				// should probably return to add_artist page
				header("refresh:5; url=../add_artist.html");
		
			}
			else 
			if(move_uploaded_file($_FILES["artImg"]["tmp_name"], $artist_folder . $art_name . "." . $file_type)) {
		
				echo "Artist uploaded. Returning to artist search page.";
		
				// return to initial artist search page after adding artist to db
				header("refresh:5; url=../rapperreviews.html");
	
			}
			else {
		
				echo "There was an issue trying to upload your file. Returning to previous page.";
		
				//should probably return to add_artist page 
				header("refresh:5; url=../add_artist.php");			
			
			}
		
	
		}
	
	}
	
}

?> 


<!DOCTYPE html>

<html>

<head>

	<meta charset = "utf-8">	
	
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	
	<link rel="stylesheet" type="text/css" href="../pagestyle.css"> 

	
</head>

<body></body>

</html>
		
