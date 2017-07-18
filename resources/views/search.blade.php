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

<form action="/show" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search route"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>

</body>



<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample locaations details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Location1</th>
                <th>Location2</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $route)
            <tr>
                <td>{{$route->from}}</td>
                <td>{{$route->to}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @elseif(isset($message))
			<p>{{ $message }}</p>
			@endif
</div>
</html>