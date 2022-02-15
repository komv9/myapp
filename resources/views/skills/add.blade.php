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
<h1>Employee Form</h1>
@if(isset($employee->id))
<form action="{{url('/employee_update/'.$employee->id)}}" method="post">
	@csrf
	<label>Employee Name:</label>
	<input type="text" name="employee_name" value="{{$employee->employee_name??''}}"><br>
	<label>Address:</label>
	<input type="text" name="address" value="{{$employee->address??''}}"><br>
	<label>Skills:</label>
	<select name="skill[]" multiple>
        @foreach($skills as $skill)
  <option value="{{$skill->id}}" @if(in_array($skill->id,$employee_skill)) selected @endif>{{$skill->skill_name}}</option>
        @endforeach
</select><br>
    <br>
	<button type="submit">Submit</button>
</form>
@else
<form action="{{url('/employee_store')}}" method="post">
    	@csrf
    <label>Employee Name:</label>
    <input type="text" name="name"/><br>
    <label>Address:</label>
    <input type="text" name="address"/><br>
    <label>Skills:</label>
    <select name="skill[]" multiple>
        @foreach($skills as $skill)
  <option value="{{$skill->id}}">{{$skill->skill_name}}</option>
        @endforeach
</select><br>
    <br>
    <button type="submit">Submit</button>
    </form>
 @endif
</body>
</html>