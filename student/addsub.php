<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
			$id=$_POST['id'];
			$subjects=$_POST['subjects'];
			
			require_once('../config.php');
			
			if(!empty($subjects)){
				$que= "DELETE FROM student_subject WHERE student_id=$id";
					$res = mysqli_query($conn,$que);
					
					if(!$res){
						die("query failed".mysqli_error($conn));
					}
			}
			
			foreach($subjects as $subject) {
				$query="INSERT INTO student_subject (student_id, subject_id) VALUES ('$id', '$subject')";
			
				$result=mysqli_query($conn,$query);
			
				if(!$result){
					echo mysqli_error($conn);
				}
			}
			
			
			header('location:index.php');
	}
?>