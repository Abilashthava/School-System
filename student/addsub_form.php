<html>	
  <head>
    <link rel="stylesheet" href="../global.css">
	<style>
	.check-loop {
		display: flex;
		flex-direction: row;
        justify-content: center;
        align-items: center;
	}
	.button-cell {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
	}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
<?php 
		include('../auth/auth_session.php');
		$id=$_GET['id'];
		require_once('../config.php');
		
		$student_query="SELECT * FROM students WHERE id='$id'";
		$student_results=mysqli_query($conn, $student_query);
		if(!$student_results){
			echo mysqli_error($conn);
		}

		$stu_sub_query="SELECT subject_id FROM student_subject WHERE student_id='$id'";
		$stu_sub_res=mysqli_query($conn, $stu_sub_query);
		if(!$stu_sub_res) {
			die("Query Failed!".mysqli_error($conn));
		}

		$row = mysqli_fetch_array($student_results);
		
			$father_name=$row['father_name'];
			$student_name=$row['student_name'];
			$addmission_number=$row['addmission_number'];
			$grade_id=$row['grade_id'];
			$nic_number=$row['nic_number'];
			$date_of_birth=$row['date_of_birth'];
			$gender=$row['gender']?? "";
			$telephone_number=$row['telephone_number'];
			$address=$row['address'];

?>

<div>

      <form action="addsub.php" method="POST">
        <h1>Student Details</h1>
	
        <div class="name-row">
          <div class="name-col">
            <label for="father_name">Father Name:</label>
            <p><?php echo $father_name; ?></p>
          </div>

          <div class="name-col">
            <label for="student_name">Student Name:</label>
            <p><?php echo $student_name; ?></p>
          </div>
		  
		  <div class="name-col">
            <label for="addmission_number">Addmission Number:</label>
            <p><?php echo $addmission_number; ?></p>
          </div>

          <div class="name-col">
            <label for="grade_id">Grade ID:</label>
            <p><?php echo $grade_id; ?></p>
          </div>
		  
		  <div class="name-col">
            <label for="nic_number">NIC:</label>
            <p><?php echo $nic_number; ?></p>
          </div>
		  
		  <div class="name-col">
            <label for="date_of_birth">DOB:</label>
            <p><?php echo $date_of_birth; ?></p>
          </div>
		  
		  <div class="name-col">
            <label for="gender">Gender:</label>
            <p><?php echo $gender; ?></p>
          </div>
		  
		  <div class="name-col">
            <label for="telephone_number">Telephone:</label>
            <p><?php echo $telephone_number; ?></p>
          </div>
		  
		  <div class="name-col">
            <label for="address">Address:</label>
            <p><?php echo $address; ?></p>
          </div>
		  <input type="hidden" value="<?php echo $id; ?>" name='id'/>
		  <div class="name-row">
		  
		  
		  <table border="1">
			<tr border=1>
					<th>Subject ID</th>
					<th>Subject Name</th>
			</tr>
		  
		  <?php 		 
				
				$subject_ids=[];
				while($stu_sub_row=mysqli_fetch_array($stu_sub_res)){
					$subject_ids[]=$stu_sub_row['subject_id'];
				}	  
		  $quer="SELECT subject_id FROM student_subject WHERE student_id='$id'";
			$res=mysqli_query($conn, $quer);
			if(!$res) {
				die("Query Failed!".mysqli_error($conn));
			}
			
		  while($table_rows=mysqli_fetch_assoc($res)) {
				$sub_id=$table_rows['subject_id'];
				$table_que="SELECT id, subject_name FROM subjects WHERE id='$sub_id'";
		
				$table_res=mysqli_query($conn, $table_que);
				
				if(!$table_res) {
					die("Query Failed!".mysqli_error($conn));
				}
			
				$table_r=mysqli_fetch_assoc($table_res); ?>
			<tr>
				<td><?php echo $table_r['id']; ?></td>
				<td>
					<div class="button-cell">
						<?php echo $table_r['subject_name']; ?>
						<a href="subject_delete.php?sub_id=<?php echo $table_r['id']; ?>&stu_id=<?php echo $id; ?>" class="btn btn-danger btn-sm">Delete</a>
					</div>
				</td>
			</tr>
		  <?php } ?>
		  </table>
	<?php 		 	
			$quer="SELECT subject_id FROM subject_grade WHERE grade_id='$grade_id'";
			$res=mysqli_query($conn, $quer);
			if(!$res) {
				die("Query Failed!".mysqli_error($conn));
			}
		
			while($rows=mysqli_fetch_assoc($res)) {
				$sub_id=$rows['subject_id'];
				$que="SELECT id, subject_name FROM subjects WHERE id='$sub_id'";
		
				$re=mysqli_query($conn, $que);
				
				if(!$re) {
					die("Query Failed!".mysqli_error($conn));
				}
			
				$rows1=mysqli_fetch_assoc($re);					
					
				?>
			<div class="check-loop">
			  <input type="checkbox" id="<?php echo $rows1['subject_name']; ?>" value="<?php echo $rows1['id']; ?>" name="subjects[]" <?php if(in_array($rows['subject_id'], $subject_ids)) { echo "checked"; } ?> />
			  <label for="<?php echo $rows1['subject_name']; ?>" ><?php echo $rows1['subject_name']; ?></label>
			</div>
			<?php } ?>
			</div>
			<br>
			
		<div class="actions">
          <input type="reset" />
          <input type="submit" />
        </div>
		  
        </div>
      </form>
    </div>
  </body>
</html>