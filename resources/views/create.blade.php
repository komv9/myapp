<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data</title>
</head>
<body>

<table>
  <tr>
    <th>Id</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Course taken</th>
    <th>Action</th>
  </tr>
  @foreach($obj1 as $vobj1)
  <tr>
    <td>{{$vobj1->id}}</td>
    <td>{{$vobj1->firstname}}</td>
    <td>{{$vobj1->lastname}}</td>
    <td>{{$vobj1->course->name}}</td>
    <td><a href="{{url('/edit/'.$vobj1->id)}}">Edit</a></td>
  </tr>
  @endforeach
</table>

</body>
</html>