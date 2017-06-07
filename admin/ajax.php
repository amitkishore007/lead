<?php  include_once('config.php'); ?>
<?php 

if (isset($_POST['sub_service']) && $_POST['sub_service']=='create') {


	$name = htmlentities(addslashes(trim($_POST['name'])));
	$desc = htmlentities(addslashes(trim($_POST['desc'])));
	$service_id = htmlentities(addslashes(trim($_POST['service_id'])));

	$q = "INSERT INTO subservices(service_id,s_head,s_description) VALUES({$service_id},'{$name}','{$desc}')";

	$result = mysql_query($q,$db);

	$output = $q;
	if ($result) {
		
		$output = 'success';
	}

	echo $output;
}




if (isset($_POST['sub_service']) && $_POST['sub_service']=='delete') {


	$id = (int) htmlentities(addslashes(trim($_POST['id'])));
	
	$q = "DELETE FROM subservices WHERE s_id = {$id} LIMIT 1";

	$result = mysql_query($q,$db);

	$output = $q;
	
	if ($result) {
		
		if(mysql_affected_rows($db)==1){

			$output = 'success';
		}
	}

	echo $output;
}


