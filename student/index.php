<?php
require_once('../config.php');
$query = "SELECT * FROM students;";
$results = mysqli_query($conn,$query);
if(!$results){
	echo mysqli_error($conn);
}
?>
<DOCTYPE html>
<html>
<head>
<title>Student-Information</title>
</head>
<body>
<h2><center>Student Details</center></h2>
<hr/>
	<table border="2" cellpadding = "10" cellspacing = "0">
			<tr>
				<td>Id</td>
				<td>image</td>
				<td>Father Name</td>
				<td>Student Name</td>
				<td>Addmission Number</td>
				<td>Grade Id</td>
				<td>Nic Number</td>
				<td>Date of Birth</td>
				<td>Gender</td>
				<td>Telephone Number</td>
				<td>Created-at</td>
				<td>Created-by</td>
				<td>Updated-at</td>
				<td>Updated-by</td>
				<td>Deleted-at</td>
				<td>Deleted-by</td>
				<td colspan="5" style="text-align:center;">Action</td>
			</tr>
		<?php foreach($results as $students){
				//while($row = mysqli_fetch_assoc($results) ?>
			<tr>
				<td><?php echo $students['id']; ?></td>
				<td><img src="<?php echo $students['image'];?>" alt="<?php echo $students['file_name']; ?>" width="50px" height="50px" ></td>
				<td><?php echo $students['father_name']; ?></td>
				<td><?php echo $students['student_name']; ?></td>
				<td><?php echo $students['addmission_number']; ?></td>
				<td><?php echo $students['grade_id']; ?></td>
				<td><?php echo $students['nic_number']; ?></td>
				<td><?php echo $students['date_of_birth']; ?></td>
				<td><?php echo $students['gender']; ?></td>
				<td><?php echo $students['telephone_number']; ?></td>
				<td><?php echo $students['address']; ?></td>
				<td><?php echo $students['created_at']; ?></td>
				<td><?php echo $students['created_by']; ?></td>
				<td><?php echo $students['updated_at']; ?></td>
				<td><?php echo $students['updated_by']; ?></td>
				<td><?php echo $students['deleted_at']; ?></td>
				<td><?php echo $students['deleted_by']; ?></td>
				<td><button class="button"><a href="../student/edit.php?id=<?php echo $students['id'];?>" >Edit </a></button></td>
				<td><button class="button"><a href="../student/show.php?id=<?php echo $students['id'];?>" >Show </a></button></td>
				<td><button class="button"><a href="../student/delete.php?id=<?php echo $students['id'] ?>" onclick ="return confirm('Are you sure !')">Delete </a></button>
				<td><button class="button"><a href="../student/addsub_form.php?id=<?php echo $students['id'] ?>" onclick ="return confirm('Are you sure !')">Add Subject </a></button>
					</td>
				
			</tr>
		<?php } ?>
		
	</table></br>
	<button><a href="create_form.php">Add Student</a></button>
</body>
</html>