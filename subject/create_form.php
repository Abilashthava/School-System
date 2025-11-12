<DOCTYPE html>
<html>
<head>
<title>Subject creation</title>
</head>
<body>
<form action="store.php" method = "POST" autocomplete = "on">
<table border="2" cellpadding = "10" cellspacing = "10">
	<tr>
		<th colspan = "2"> Subject Registation </th>
	</tr>

	<tr>
		<td><label for="subject_name">Subject Name</label></td>
		<td><input type="text" name="subject_name" id="subject_name"  required></td>
	</tr>
	<tr>
		<td><label for="subject_index">Subject Index</label></td>
		<td><input type="text" name="subject_index" id="subject_index"  required></td>
	</tr>
	<tr>
		<td><label for="subject_order">Subject Order</label></td>
		<td><input type="text" name="subject_order" id="subject_order"  required></td>
	</tr>
	<tr>
		<td><label for="subject_color">Subject Color</label></td>
		<td><input type="text" name="subject_color" id="subject_color"  maxlength = "10"></td>
	</tr>
	<tr>
		<td><label for="subject_number">Subject Number</label></td>
		<td><input type="text" name="subject_number" id="subject_number"  maxlength = "10"></td>
	</tr>
	
</table> </br>
<input type="reset" value="Reenter"> <input type="submit" value="Submit">
	
</form>
</body>
</html>