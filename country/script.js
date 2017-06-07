$('document').ready(function(){

	$('#country').change(function(){

		var country_id = $(this).val();


		$.ajax({

			url  : 'ajax.php',
			type : 'POST',
			data: {"country":'country',country_id:country_id},
			beforeSend : function(){

			} ,
			success: function(response) {

				console.log(response);
			} 

		});

	});

alert(hello);
});
