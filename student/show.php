<html>

<head>
	<link rel="stylesheet" href="../global.css">
</head>

<body>
	<?php
	include('../auth/auth_session.php');
	require_once('../config.php');
	$id = $_GET['id'];


	$query = "SELECT * FROM students WHERE id='$id'";

	$results = mysqli_query($conn, $query);

	if (!$results) {
		echo mysqli_error($conn);
	}

	$row = mysqli_fetch_array($results);

	$father_name = $row['father_name'];
	$student_name = $row['student_name'];
	$addmission_no = $row['addmission_number'];
	$grade_id = $row['grade_id'];
	$nic = $row['nic_number'];
	$dob = $row['date_of_birth'];
	$gender = $row['gender'] ?? "";
	$telephone = $row['telephone_number'];
	$address = $row['address'];
	$image = $row['image'];
	$file_name=$row['file_name'];

	?>

	<div>

		<form>
			<h1>Student Details</h1>

			<table border="1">
				<tr>
					<td colspan="2"><img src="<?php echo $image;?>" alt="<?php echo $file_name; ?>"
							width="200px" height="200px"></td>
				</tr>
				<tr>
					<th>Father Name</th>
					<td>
						<p><?php echo $father_name; ?></p>
					</td>
				</tr>
				<tr>
					<th>Student Name</th>
					<td>
						<p><?php echo $student_name; ?></p>
					</td>
				</tr>
				<tr>
					<th>Addmission Number</th>
					<td>
						<p><?php echo $addmission_no; ?></p>
					</td>
				</tr>
				<tr>
					<th>Grade ID</th>
					<td>
						<p><?php echo $grade_id; ?></p>
					</td>
				</tr>
				<tr>
					<th>NIC</th>
					<td>
						<p><?php echo $nic; ?></p>
					</td>
				</tr>
				<tr>
					<th>DOB</th>
					<td>
						<p><?php echo $dob; ?></p>
					</td>
				</tr>
				<tr>
					<th>Gender</th>
					<td>
						<p><?php echo $gender; ?></p>
					</td>
				</tr>
				<tr>
					<th>Telephone</th>
					<td>
						<p><?php echo $telephone; ?></p>
					</td>
				</tr>
				<tr>
					<th>Address</th>
					<td>
						<p><?php echo $address; ?></p>
					</td>
				</tr>
			</table>
	</div>
	</form>
	</div>
</body>

</html>