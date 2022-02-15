<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cartoons</title>
</head>
<body>
    <h1>Cartoon details</h1>
@if(isset($cartoon->id))
<form action="{{url('/cartoon_update/'.$cartoon->id)}}" method="post" enctype="multipart/form-data">
	@csrf
	<label>Cartoon Name:</label>
	<input type="text" name="name" value="{{$cartoon->name??''}}"><br>
	<label>Choose Image:</label>
	<input type="file" name="image" accept="image/*" name="image" value="{{$cartoon->image??''}}"><br>
	<img src="{{asset($cartoon->image)}}"><br><br>
	<button type="submit">Submit</button>
</form>
@else
<form action="{{url('/cartoon_store/')}}" method="post" enctype="multipart/form-data">
	@csrf
	<label>Cartoon Name:</label>
	<input type="text" name="name" class="@error('name') is-invalid @enderror"><br><br>
	@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
	<label>Choose Image:</label>
	<input type="file" accept="image/*" name="image" class="@error('image') is-invalid @enderror"><br><br>
	@error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
	<button type="submit">Submit</button>
@endif
</form>
</body>
</html>