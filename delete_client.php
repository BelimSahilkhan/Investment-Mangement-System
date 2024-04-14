<?php
include("config.php");
$id=$_GET['id'];
$a=mysqli_query($c,"delete from client where d_id=$id");

if($a){
	
	header("location:view_client.php");

}
				
	
		
			mysqli_error();
	
?>