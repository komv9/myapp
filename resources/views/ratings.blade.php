<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ratings</title>
</head>
<body>
<h1>{{$movie->title}}</h1>
<table>
  <tr>
    <th>User Id</th>
    <th>User Name</th>
    <th>Email</th>
  </tr>
  @foreach($movie->userratings as $userrating)
  <tr>
    <td>{{$userrating->user_id}}</td>
    <td>{{$userrating->username}}</td>
    <td>{{$userrating->user->email}}</td>
  </tr>
  @endforeach
</table>
</body>
</html>