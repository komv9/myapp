<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
</head>
<body>

<h1>Update Student Details</h1>
	<form action="{{url('/update/'.$teacher->id)}}" method="post">
		@csrf
		
		<label>Firstname:</label>
		<input type="text" name="firstname" value="{{$teacher->firstname??''}}"/>
		<br>
		<label>Lastname:</label>
		<input type="text" name="lastname" value="{{$teacher->lastname??''}}"/>
		<br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>