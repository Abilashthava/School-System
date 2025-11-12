<DOCTYPE html>
<html>
<head>
<title>Edit-grade</title>
</head>
<body>
<?php
	$id = $_GET['id'];
	require_once('../config.php');
	
	$query = "SELECT * FROM grades WHERE id = '$id' ;";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
?>
<form action="update.php" method = "POST" autocomplete = "on">
<table border="2" cellpadding = "10" cellspacing = "10">
	<tr>
		<th colspan = "2"> Edit grade Information </th>
	</tr>
	<tr>
		<td><label for="grade_name">Grade Name</label></td>
		<td><input type="text" name="grade_name" id="grade_name" value="<?php echo $row['grade_name']?>">
		<input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>"></td>
	</tr>
	<tr>
		<td><label for="grade_group">Grade Group</label></td>
		<td><input type="text" name="grade_group" id="grade_group" value="<?php echo $row['grade_group']?>"></td>
	</tr>
	<tr>
		<td><label for="grade_color">Grade Color</label></td>
		<td><input type="text" name="grade_color" id="grade_color" value="<?php echo $row['grade_color']?>"></td>
	</tr>
	<tr>
		<td><label for="grade_order">Grade Order</label></td>
		<td><input type="text" name="grade_order" id="grade_order" value="<?php echo $row['grade_order']?>"></td>
	</tr>
	
</table> </br>
<input type="reset" value="Reenter"> <input type="submit" value="Save">
	
</form>
</body>
</html>








