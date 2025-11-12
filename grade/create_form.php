<DOCTYPE html>
<html>
<head>
<title>Grade creation</title>
</head>
<body>
<form action="store.php" method = "POST" autocomplete = "on">
<table border="2" cellpadding = "10" cellspacing = "10">
	<tr>
		<th colspan = "2"> Grade Registation </th>
	</tr>
	
	<tr>
		<td><label for="grade_name">Grade Name</label></td>
		<td><input type="text" name="grade_name" id="grade_name"  required></td>
	</tr>
	<tr>
		<td><label for="grade_group">Grade group</label></td>
		<td><input type="text" name="grade_group" id="grade_group"  required></td>
	</tr>
	<tr>
		<td><label for="grade_color">Grade color</label></td>
		<td><input type="text" name="grade_color" id="grade_color"  required></td>
	</tr>
	<tr>
		<td><label for="grade_order">Grade order</label></td>
		<td><input type="text" name="grade_order" id="grade_order"  maxlength = "10"></td>
	</tr>
	
</table> </br>
<input type="reset" value="Reenter"> <input type="submit" value="Submit">
	
</form>
</body>
</html>