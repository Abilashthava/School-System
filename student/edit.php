<DOCTYPE html>
<html>
<head>
<title>Edit-student</title>
</head>
<body>
<?php
	$id = $_GET['id'];
	require_once('../config.php');
	
	$query = "SELECT * FROM student WHERE id = '$id' ;";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
?>
<form action="update.php" method = "POST" autocomplete = "on">
<table border="2" cellpadding = "10" cellspacing = "10">
	<tr>
		<th colspan = "2"> Edit Student Information </th>
	</tr>
	<tr>
		<td><label for="father_name">Father Name</label></td>
		<td><input type="text" name="father_name" id="father_name" value="<?php echo $row['father_name']?>">
		<input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>"></td>
	</tr>
	<tr>
		<td><label for="student_name">Student Name</label></td>
		<td><input type="text" name="student_name" id="student_name" value="<?php echo $row['student_name']?>"></td>
	</tr>
	<tr>
		<td><label for="addmission_number">Addmission Number</label></td>
		<td><input type="text" name="addmission_number" id="addmission_number" value="<?php echo $row['addmission_number']?>"></td>
	</tr>
	<tr>
		<td><label for="grade_id">Grade Id</label></td>
		<td><input type="text" name="grade_id" id="grade_id" value="<?php echo $row['grade_id']?>"></td>
	</tr>
	<tr>
		<td><label for="nic_number">NIC Number</label></td>
		<td><input type="number" name="nic_number" id="nic_number" value="<?php echo $row['nic_number']?>"></td>
	</tr>
	<tr>
		<td><label for="date_of_birth">Date Of Birth</label></td>
		<td><input type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $row['date_of_birth']?>"></td>
	</tr>
	<tr>
		<td><label for="gender">Gender</label></td>
		<td><input type="text" name="gender" id="gender" value="<?php echo $row['gender']?>"></td>
	</tr>
	<tr>
		<td><label for="telephone_number">Telephone Number</label></td>
		<td><input type="text" name="telephone_number" id="telephone_number" value="<?php echo $row['telephone_number']?>"></td>
	</tr>
	<tr>
		<td><label for="address">Address</label></td>
		<td><input type="text" name="address" id="address" value="<?php echo $row['address']?>"></td>
	</tr>
</table> </br>
<input type="reset" value="Reenter"> <input type="submit" value="Save">
	
</form>
</body>
</html>










