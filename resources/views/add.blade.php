<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Data</title>

</head>
<body>
<h1>Course Data</h1>
@if(isset($course))
<form action="{{url('/course-update/'.$course->id)}}" method="post">
	@csrf
	<label>Name:</label>
	<input type="text" name="name" value="{{$course->name??''}}"><br>
	<label>Date:</label>
	<input type="date" name="date" value="{{$course->date??''}}"><br>
	<label>Start Time:</label>
	<input type="time" name="start_time" value="{{$course->start_time??''}}"><br>
	<label>End Time:</label>
	<input type="time" name="end_time" value="{{$course->end_time??''}}"><br>
	<button type="submit">Submit</button>
</form>
@else
<form action="{{url('/added/')}}" method="post">
	@csrf
	<label>Name:</label>
	<input type="text" name="name"><br>
	<label>Date:</label>
	<input type="date" name="date"><br>
	<label>Start Time:</label>
	<input type="time" name="start_time"><br>
	<label>End Time:</label>
	<input type="time" name="end_time"><br>
	<button type="submit">Submit</button>
</form>
@endif
</body>
</html>