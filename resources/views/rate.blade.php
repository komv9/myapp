<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rate Movies</title>
</head>
<body>
<h1>Rate Movies</h1>
@if(isset($movie->id))
<form action="{{url('/movies_update/'.$movie->id)}}" method="post">
	@csrf
	@if(!auth()->check())
	<label>User Name:</label>
	<input type="text" name="user_name"><br>
	<label>Email:</label>
	<input type="text" name="email"><br>
	@endif
	<label>Rate (1 to 10):</label>
	<input type="number" name="rate"><br><br>
	<button type="submit">Rate</button>
</form>
@endif
</body>
</html>