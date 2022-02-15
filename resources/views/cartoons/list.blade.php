<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cartoons</title>
</head>
<body>
<table>
  <tr>
    <th>Id</th>
    <th>Cartoon Name</th>
    <th>Image</th>
    <th>Action</th>
  </tr>
  @foreach($cartoons as $cartoon)
  <tr>
    <td>{{$cartoon->id}}</td>
    <td>{{$cartoon->name}}</td>
    <td><img src="{{$cartoon->image}}"></td>
    <td><a href="{{url('/cartoon_edit/'.$cartoon->id)}}">Edit</a></td>
  </tr>
  @endforeach
</table>
</body>
</html>