<?php include("config.php"); ?>

<?php 


if (isset($_POST['country'])) {

	$contry_id =  (int) $_POST['country_id'];


	$query = "SELECT * FROM states WHERE country_id =  ".$contry_id;

	$result = mysql_query($db,$query);

	
	$output = "";
	if (mysql_num_rows($result)>0) {
	 		
		while ($states = mysql_fetch_assoc($result)) {
			
	 		$output .= "<option value='".$states['id']."'>".$states['name']."</option>";
		}
	

	}

	echo $output; 	

}


if (isset($_POST['state'])) {

	$state_id =  (int) $_POST['state_id'];

	$query = "SELECT * FROM cities WHERE state_id =  ".$state_id;

	$result = mysql_query($db,$query);

	
	// print_r($result);
	
	$output = "";
	if (mysql_num_rows($result)>0) {
	 		
		while ($states = mysql_fetch_assoc($result)) {
			
	 		$output .= "<option ".$city['id'].">".$city['name']."</option>";
		}
	

	} else {

	 		$output .= "<option >no cities found</option>";

	}

	echo $output; 	

}



?>