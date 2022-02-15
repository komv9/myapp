<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List</title>
</head>
<body>
	<table>
  <tr>
    <th>Id</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Action</th>
  </tr>
  @foreach($courses as $course)
  <tr>
    <td>{{$course->id}}</td>
    <td>{{$course->name}}</td>
    <td>{{$course->date}}</td>
    <td>{{$course->start_time}}</td>
    <td>{{$course->end_time}}</td>
    <td><a href="{{url('/course-edit/'.$course->id)}}">Edit</a></td>
    <td><a href="{{url('/delete/'.$course->id)}}">Delete</a></td>
  </tr>
  @endforeach
</table>

</body>
</html>