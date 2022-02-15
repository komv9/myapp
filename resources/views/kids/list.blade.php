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
    <th>Kid Name</th>
    <th>Kid Address</th>
    <th>hobbies</th>
    <th>Action</th>
  </tr>
  @foreach($kids as $kid)
  <tr>
    <td>{{$kid->id}}</td>
    <td>{{$kid->kid_name}}</td>
    <td>{{$kid->address}}</td>
    @foreach($kid->hobbies as $hobby)
    <td>{{$hobby->hobby_name}}</td>
    @endforeach
    <td><a href="{{url('/kid_edit/'.$kid->id)}}">Edit</a></td>
  </tr>
  @endforeach
</table>
</body>
</html>