<?php
$id = $_GET['id'];
require_once('../config.php');
$query = "UPDATE students SET image=NULL, file_name=NULL WHERE id='$id'";
$result = mysqli_query($conn,$query);
if($result){
	echo "query executed successfully...";
	header("Location:store.php");
}
else{
	echo ("query not executed..").mysqli_error($conn);
}
?>