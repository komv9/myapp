<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Komal</title>
</head>
<body>
This is just for testing.
<form action="{{url('/upload')}}" method="post">
    	@csrf
    <h1>Add Teacher Details</h1>
    <label>Firstname:</label>
    <input type="text" name="firstname"/><br>
    <label>Lastname:</label>
    <input type="text" name="lastname"/><br>
    <label>Course 1:</label>
    <select name="course">
        @foreach($courses as $course)
  <option value="{{$course->id}}">{{$course->name}}</option>
        @endforeach
</select><br>
    <label>Course 2:</label>
    <select name="course">
        @foreach($courses as $course)
  <option value="{{$course->id}}">{{$course->name}}</option>
        @endforeach
</select>
    <button type="submit">Submit</button>
    </form>
</body>
</html>