<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Country code</title>
</head>
<body>




<form>
<h1 class="msg"></h1>
<?php  $country = mysqli_query($db,"SELECT * FROM countries"); ?>
	Country : <select id="country"> 

	<?php while($row = mysqli_fetch_assoc($country)) { ?>
			<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
	<?php } ?>

	</select>

	State: <select id="state"> </select>

	City: <select id="city"> </select>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="script.js"></script> -->
<script type="text/javascript">
	$('document').ready(function(){

	$('#country').change(function(){

		var country_id = $(this).val();

// console.log(country_id);
		$.ajax({

			url  : 'ajax.php',
			type : 'POST',
			data: {"country":'country',country_id:country_id},
			beforeSend : function(){

			} ,
			success: function(response) {


				if (response=='') {

					console.log(response);
					$('.msg').html('sorry no country available !');
				} else {
					$('#state').html(response);
				}

			} 

		});

	});


$('#state').change(function(){

		var state_id = $(this).val();


		$.ajax({

			url  : 'ajax.php',
			type : 'POST',
			data: {"state":'state',state_id:state_id},
			
			success: function(response) {


				if (response=='') {

					console.log(response);
					$('.msg').html('sorry no country available !');
				} else {
					$('#city').html(response);
				}

			} 

		});

});

	


//alert("hello");
});

</script>
</body>
</html>
