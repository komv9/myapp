<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Artist List</title>
</head>
<body>
	<h1>Artist City Details</h1>
<table>
  <tr>
    <th>Id</th>
    <th>Artist</th>
    <th>Income</th>
    <th>City</th>
    <th>Action</th>
  </tr>
  @foreach($artists as $artist)
  <tr>
    <td>{{$artist->id}}</td>
    <td>{{$artist->artist_name}}</td>
    <td>{{$artist->income}}</td>
    <td>{{$artist->city->city_name}}</td>
    <td><a href="{{url('/artist_edit/'.$artist->id)}}">Edit</a></td>
  </tr>
  @endforeach
</table>
</body>
</html>