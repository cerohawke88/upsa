<!DOCTYPE html>
<html>
<head>
	<title>Create Form</title>
</head>
<body>

<form id="create-form-student" action="{{route('index.create')}}" class="form-horizontal" method="post">
	<label for="name">Name</label>
	<input type="text" name="name" value=""><br/><br/>

	<label for="email">Email</label>
	<input type="text" name="email" value=""><br/><br/>
	
	<label for="gender">Gender</label>
	<input type="radio" name="gender" value="male">Male
	<input type="radio"  name="gender" value="female">Female
	<br/><br/>
	
	States&nbsp;&nbsp;&nbsp;
	<select name="state" id="">
		<option value="wni">WNI</option>
		<option value="wna">WNA</option>
	</select><br/>
	<br/>

	I Agree<input type="checkbox" name="agree" value="agree"><br/>
	
	<input type="hidden" name="_token" value="{{csrf_token()}}">

	<label for=""></label>
	<input type="submit" name="submit" value="submit">
n
</form> 

</body>
</html>