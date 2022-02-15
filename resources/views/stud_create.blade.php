<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Details</title>
</head>
<body>

    Student details.
    <form action="{{url('/store')}}" method="post">
    	@csrf
    <h1>Add Student Details</h1>
    <label>Firstname:</label>
    <input type="text" name="firstname"/>
    <label>Lastname:</label>
    <input type="text" name="lastname"/>
    <label>Cityname:</label>
    <input type="text" name="cityname"/>
    <label>Email:</label>
    <input type="email" name="email"/>
    <button type="submit">Submit</button>
    </form>

</body>
</html>