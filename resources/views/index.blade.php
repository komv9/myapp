<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movies</title>
</head>
<body>
<table>
  <tr>
    <th>Id</th>
    <th>Movie Id</th>
    <th>Original Language</th>
    <th>Original Title</th>
    <th>Overview</th>
    <th>Popularity</th>
    <th>Release Date</th>
    <th>Title</th>
    <th>Info</th>
    <th>Action</th>
  </tr>
  @foreach($fetch_movies as $movie)
  <tr>
    <td>{{$movie->id}}</td>
    <td>{{$movie->movie_id}}</td>
    <td>{{$movie->original_language}}</td>
    <td>{{$movie->original_title}}</td>
    <td>{{$movie->overview}}</td>
    <td>{{$movie->popularity}}</td>
    <td>{{$movie->release_date}}</td>
    <td>{{$movie->title}}</td>
    <td><a href="{{url('/movies_ratings/'.$movie->id)}}">Details</a></td>
    <td><a href="{{url('/movies_rate/'.$movie->id)}}">Rate</a></td>
    <!--<td><a href="{{url('/movies_edit/'.$movie->id)}}">Edit</a></td>-->
  </tr>
  @endforeach
</table>

</body>
</html>