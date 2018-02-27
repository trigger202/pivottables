<?php 


echo "hello world";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">

	<form action="test.php" method="POST">

	  <div class="list-group">  	
	  		<select name="category" id="category">
	  			<option> Select Parent</option>
	  			<option value="1">Adam</option>
	  			<option value="2">Hassan</option>
	  			<option value="3">Nur</option>
	  		</select>
	  </div>
	  <br>

  	  <div class="list-group">  	
	  		<select name="subcategory" id="subcategory">
	  			<option></option>
	  		</select>
	  </div>
		


	  <div class="list-group">  	
	  		<select name="category" id="category">
	  			<option> Select Parent</option>
	  			<option value="1">Adam</option>
	  			<option value="2">Hassan</option>
	  			<option value="3">Nur</option>
	  		</select>
	  </div>
	  <br>

  	  <div class="list-group">  	
	  		<select name="subcategory" id="subcategory">
	  			<option></option>
	  		</select>
	  </div>

	  
		<button type="submit" class="btn btn-lg btn-success">Submit</button>
	</form>


</div>

<script type="text/javascript">
	
	$('#category').on('change', function(e)
	{

		var target = e.target.value;

		$('#subcategory').empty();
		$.get('response.php?parent='+target, function(data)
		{
			data = $.parseJSON(data);
			$.each(data, function(index, subcatObj)
			{
				console.log(subcatObj);
				$('#subcategory').append("<option value="+index+">"+subcatObj+"</option>");
				
			})	
		});

	});

</script>


</body>


</html>

