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
    <th>Employee Name</th>
    <th>Employee Address</th>
    <th>Skills</th>
    <th>Action</th>
  </tr>
  @foreach($employees as $employee)
  <tr>
    <td>{{$employee->id}}</td>
    <td>{{$employee->employee_name}}</td>
    <td>{{$employee->address}}</td>
    @foreach($employee->skills as $skill)
    <td>{{$skill->skill_name}}</td>
    @endforeach
    <td><a href="{{url('/employee_edit/'.$employee->id)}}">Edit</a></td>
  </tr>
  @endforeach
</table>
</body>
</html>