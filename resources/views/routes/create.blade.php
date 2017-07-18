<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
	$(document).ready(function(e){

			var html='{!! Form::time('departure_time', old('departure_time'), ['class'=>'form-control', 'placeholder'=>'Enter time','id'=>'departure']) !!}';

		$("#add").click(function(e){
			$("#div1").append(html);


		});


	});
</script>
</head>



<body>
<div class="jumbotron"></div>


<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">

	{!! Form::open(['route'=>'routes.store']) !!}

		<div class="form-group">
			{!! Form::label('From:') !!}
			{!! Form::text('from', old('from'), ['class'=>'form-control', 'placeholder'=>'Enter destination']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('To:') !!}
			{!! Form::text('to', old('to'), ['class'=>'form-control', 'placeholder'=>'Enter destinationl']) !!}
		</div>

		<div class="form-group" id="div1">
			{!! Form::label('Departure_time:') !!}
			{!! Form::time('departure_time[]', old('departure_time'), ['class'=>'form-control', 'placeholder'=>'Enter time','id'=>'departure']) !!}
			<a id="add">Add more</a>
		</div>

		<div class="form-group">
			{!! Form::label('Date:') !!}
			{!! Form::date('date', old('date'), ['class'=>'form-control', 'placeholder'=>'Enter time','id'=>'date']) !!}
		</div>


		<div class="form-group">
			<button class="btn btn-success">save!</button>
		</div>

	{!! Form::close() !!}

</div>

</body>
</html>

</body>




</html>