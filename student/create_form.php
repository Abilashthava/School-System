<DOCTYPE html>
<html>
<head>
<title>Student creation</title>
</head>
<body>
<form action="store.php" method = "POST" autocomplete = "on">
<table border="2" cellpadding = "10" cellspacing = "10">
	<tr>
		<th colspan = "2"> Student Registation </th>
	</tr>
	<tr>
		<td><label for="id">Id</label></td>
		<td><input type="text" name="id" id="id"  required></td>
	</tr>
	<tr>
		<td><label for="father_name">Father Name</label></td>
		<td><input type="text" name="father_name" id="father_name"  required></td>
	</tr>
	<tr>
		<td><label for="student_name">Student Name</label></td>
		<td><input type="text" name="student_name" id="student_name"  required></td>
	</tr>
	<tr>
		<td><label for="addmission_number">Addmission Number</label></td>
		<td><input type="text" name="addmission_number" id="addmission_number"  required></td>
	</tr>
	<tr>
		<td><label for="grade_id">Grade Id</label></td>
		<td><input type="text" name="grade_id" id="grade_id"  maxlength = "10"></td>
	</tr>
	<tr>
		<td><label for="nic_number">Nic Number</label></td>
		<td><input type="number" name="nic_number" id="nic_number" step = "0.01"></td>
	</tr>
	<tr>
		<td><label for="dob">Date Of Birth</label></td>
		<td><input type="Date" name="date_of_birth" id="date_of_birth" ></td>
	</tr>
	<tr>
		<td><label for="gender">Gender</label></td>
		<td><input type="text" name="gender" id="gender" ></td>
	</tr>
	<tr>
		<td><label for="telepone_number">Telephone Number</label></td>
		<td><input type="number" name="telephone_number" id="telephone_number" ></td>
	</tr>
	<tr>
		<td><label for="address">Address</label></td>
		<td><input type="text" name="address" id="address" ></td>
	</tr>
</table> </br>
<input type="reset" value="Reenter"> <input type="submit" value="Submit">
	
</form>
</body>
</html>