<?php
require_once('../config.php');
$query = "SELECT * FROM grade;";
$results = mysqli_query($conn,$query);
if(!$results){
	echo mysqli_error($conn);
}
?>
<DOCTYPE html>
<html>
<head>
<title>Grade-Information</title>
</head>
<body>
<h2><center>Grade Details</center></h2>
<hr/>
	<table border="2" cellpadding = "10" cellspacing = "0">
			<tr>
				<td>Id</td>
				<td>Grade Name</td>
				<td>Grade Group</td>
				<td>Grade Color</td>
				<td>Grade Order</td>
				<td>Created-at</td>
				<td>Created-by</td>
				<td>Updated-at</td>
				<td>Updated-by</td>
				<td>Deleted-at</td>
				<td>Deleted-by</td>
			</tr>
		<?php foreach($results as $grade){
				//while($row = mysqli_fetch_assoc($results) ?>
			<tr>
				<td><?php echo $grade['id']; ?></td>
				<td><?php echo $grade['grade_name']; ?></td>
				<td><?php echo $grade['grade_group']; ?></td>
				<td><?php echo $grade['grade_color']; ?></td>
				<td><?php echo $grade['grade_order']; ?></td>
				<td><?php echo $grade['created_at']; ?></td>
				<td><?php echo $grade['created_by']; ?></td>
				<td><?php echo $grade['updated_at']; ?></td>
				<td><?php echo $grade['updated_by']; ?></td>
				<td><?php echo $grade['deleted_at']; ?></td>
				<td><?php echo $grade['deleted_by']; ?></td>
				<td><button class="button"><a href="../grade/edit.php?id=<?php echo $grade['id'];?>" >Edit </a></button></td>
				<td><button class="button"><a href="../grade/delete.php?id=<?php echo $grade['id'] ?>" onclick ="return confirm('Are you sure !')">Delete </a></button>
					</td>
			</tr>
		<?php } ?>
	</table></br>
	<button><a href="create_form.php">Add Grade</a></button>
</body>
</html>