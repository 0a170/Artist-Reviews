<?php 

function avg_star_getter($avg_stars) {
	if($avg_stars >= 1 && $avg_stars < 1.5) {
		$artist_avg_stars = "../resources/stars/1stars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 1.5 && $avg_stars < 2) {
		$artist_avg_stars = "../resources/stars/1andhalfstars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 2 && $avg_stars < 2.5) {
		$artist_avg_stars = "../resources/stars/2stars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 2.5 && $avg_stars < 3) {
		$artist_avg_stars = "../resources/stars/2andhalfstars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 3 && $avg_stars < 3.5) {
		$artist_avg_stars = "../resources/stars/3stars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 3.5 && $avg_stars < 4) {
		$artist_avg_stars = "../resources/stars/3andhalfstars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 4 && $avg_stars < 4.5) {
		$artist_avg_stars = "../resources/stars/4stars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 4.5 && $avg_stars < 5) {
		$artist_avg_stars = "../resources/stars/4andhalfstars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 5 && $avg_stars < 5.5) {
		$artist_avg_stars = "../resources/stars/5stars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 5.5 && $avg_stars < 6) {
		$artist_avg_stars = "../resources/stars/5andhalfstars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 6 && $avg_stars < 6.5) {
		$artist_avg_stars = "../resources/stars/6stars.png"; 
		return $artist_avg_stars;
	}
	else 
	if($avg_stars >= 6.5 && $avg_stars < 7) {
		$artist_avg_stars = "../resources/stars/6andhalfstars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 7 && $avg_stars < 7.5) {
		$artist_avg_stars = "../resources/stars/7stars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 7.5 && $avg_stars < 8) {
		$artist_avg_stars = "../resources/stars/7andhalfstars.png";
		return $artist_avg_stars;		
	}
	else
	if($avg_stars >= 8 && $avg_stars < 8.5) {
		$artist_avg_stars = "../resources/stars/8stars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 8.5 && $avg_stars < 9) {
		$artist_avg_stars = "../resources/stars/8andhalfstars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 9 && $avg_stars < 9.5) {
		$artist_avg_stars = "../resources/stars/9stars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars >= 9.5 && $avg_stars < 10) {
		$artist_avg_stars = "../resources/stars/9andhalfstars.png";
		return $artist_avg_stars;
	}
	else
	if($avg_stars == 10) {
		$artist_avg_stars = "../resources/stars/10stars.png"; 
		return $artist_avg_stars;
	}
	else 
	if($avg_stars > 10) {
		echo "More thatn 10 stars: " . $artist_avg_stars;
	}
}