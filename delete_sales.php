<?php
include("config.php");
$id=$_GET['id'];
$b=mysqli_query($c,"delete from sales where s_id=$id");
if($b){
	
	header("location:view_sales.php");

}
				
	
		
			mysqli_error();
	
?>