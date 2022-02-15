<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add</title>
</head>
<style type="text/css">
	* {
		margin: 20px;
	}
</style>
<body>
<h1>Put Data</h1>
@if(isset($artist))
<form action="{{url('/artist_update/'.$artist->id)}}" method="post">
	@csrf
	<label>Artist Name:</label>
	<input type="text" name="artist_name" value="{{$artist->artist_name??''}}"><br>
	<label>Date:</label>
	<input type="number" name="income" value="{{$artist->income??''}}"><br>
	<label>City:</label>
	<select name="city" multiple>
        @foreach($cities as $city)
      <option value="{{$city->id}}">{{$city->city_name}}</option>
        @endforeach
    </select><br>
    <br>
	<button type="submit">Submit</button>
</form>
@else
<form action="{{url('/artist_store/')}}" method="post">
	@csrf
	<label>Artist Name:</label>
	<input type="text" name="artist_name"><br>
	<label>Income:</label>
	<input type="number" name="income"><br>
	<label>City:</label>
	    <select name="city">
        @foreach($cities as $city)
  <option value="{{$city->id}}">{{$city->city_name}}</option>
        @endforeach
</select><br>
	<button type="submit">Submit</button>
</form>
@endif
</body>
</html>