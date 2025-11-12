<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
			$id=$_POST['id'];
			$subjects=$_POST['subjects'];
			
			require_once('../config.php');
			
				$que= "DELETE FROM subject_grade WHERE grade_id=$id";
					$res = mysqli_query($conn, $que);
					
					if(!$res){
						die("query failed".mysqli_error($conn));
					}
			
			
			foreach($subjects as $subject) {
				$query="INSERT INTO subject_grade (grade_id, subject_id) VALUES ('$id', '$subject')"; 
			
				$result=mysqli_query($conn,$query);
			
				if(!$result){
					die("Query failed".mysqli_error($conn));
				}
			}
			
			
			header('location:index.php');
	}
?>