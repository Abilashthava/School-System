<?php
require_once('../config.php');
$query = "SELECT * FROM subjects;";
$results = mysqli_query($conn,$query);
if(!$results){
	echo mysqli_error($conn);
}
?>
<DOCTYPE html>
<html>
<head>
<title>Subject-Information</title>
</head>
<body>
<h2><center>Subject Details</center></h2>
<hr/>
	<table border="2" cellpadding = "10" cellspacing = "0">
			<tr>
				<td>Id</td>
				<td>Subject Name</td>
				<td>Subject Index</td>
				<td>Subject Order</td>
				<td>Subject Color</td>
				<td>Subject Number</td>
				<td>Created-at</td>
				<td>Created-by</td>
				<td>Updated-at</td>
				<td>Updated-by</td>
				<td>Deleted-at</td>
				<td>Deleted-by</td>
					<td colspan="4" style="text-align :center";>Actions</td>
			</tr>
		<?php foreach($results as $subject){
				//while($row = mysqli_fetch_assoc($results) ?>
			<tr>
				<td><?php echo $subject['id']; ?></td>
				<td><?php echo $subject['subject_name']; ?></td>
				<td><?php echo $subject['subject_index']; ?></td>
				<td><?php echo $subject['subject_order']; ?></td>
				<td><?php echo $subject['subject_color']; ?></td>
				<td><?php echo $subject['subject_number']; ?></td>
				<td><?php echo $subject['created_at']; ?></td>
				<td><?php echo $subject['created_by']; ?></td>
				<td><?php echo $subject['updated_at']; ?></td>
				<td><?php echo $subject['updated_by']; ?></td>
				<td><?php echo $subject['deleted_at']; ?></td>
				<td><?php echo $subject['deleted_by']; ?></td>
				<td><button class="button"><a href="../subject/edit.php?id=<?php echo $subject['id'];?>" >Edit </a></button></td>
				<td><button class="button"><a href="../subject/show.php?id=<?php echo $subject['id'];?>" >Show </a></button></td>
				<td><button class="button"><a href="../subject/delete.php?id=<?php echo $subject['id'] ?>" onclick ="return confirm('Are you sure !')">Delete </a></button>
					</td>
			</tr>
		<?php } ?>
	</table></br>
	<button><a href="create_form.php">Add Subject</a></button>
</body>
</html>