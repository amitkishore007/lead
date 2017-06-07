<?php
include_once('admin/db.php');
?>
<?php 

$db  = GetConnection();

if (isset($_POST['pertner'])) {
     $country=$_POST['country'];
     $state=$_POST['state'];
	$city =  $_POST['city'];
	
	

	if ($city_id=='') {
		# code...
		$query = "SELECT * FROM partner WHERE country LIKE '%$country%' ";
	
	} else {
		
		$query = "SELECT * FROM partner WHERE state LIKE '%$state%' ";
	}



	$areas = mysql_query($query,$db);
	
	

	if (mysql_num_rows($areas)) {
	 		
		while ($country = mysql_fetch_assoc($country)) { ?>
		
		<li onclick="selectUser('<?php echo $country["name"]; ?>')">
			<?php echo ucwords($country["name"]); ?>
		</li>
		<?php 	
	 		
		}
	

	} 
	 		

	 	

}



?>