<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Data</title>
</head>
<style type="text/css">
	* {
		margin: 20px;
	}
</style>
<body>
<h1>kid Form</h1>
@if(isset($kid->id))
<form action="{{url('/kid_update/'.$kid->id)}}" method="post">
	@csrf
	<label>kid Name:</label>
	<input type="text" name="kid_name" value="{{$kid->kid_name??''}}"><br>
	<label>Address:</label>
	<input type="text" name="address" value="{{$kid->address??''}}"><br>
	<label>hobbies:</label>
	<select name="hobby[]" multiple>
        @foreach($hobbies as $hobby)
  <option value="{{$hobby->id}}" @if(in_array($hobby->id,$kid_hobby)) selected @endif>{{$hobby->hobbies}}</option>
        @endforeach
</select><br>
    <br>
	<button type="submit">Submit</button>
</form>
@else
<form action="{{url('/kid_store')}}" method="post">
    	@csrf
    <label>Kid Name:</label>
    <input type="text" name="name"/><br>
    <label>Address:</label>
    <input type="text" name="address"/><br>
    <label>Hobbies:</label>
    <select name="hobby[]" multiple>
        @foreach($hobbies as $hobby)
  <option value="{{$hobby->id}}">{{$hobby->hobby_name}}</option>
        @endforeach
</select><br>
    <br>
    <button type="submit">Submit</button>
    </form>
 @endif
</body>
</html>