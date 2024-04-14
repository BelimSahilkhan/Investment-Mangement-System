<?php
include("config.php");
$id=$_GET['id'];
$a=mysqli_query($c,"delete from distributor where m_id=$id");

if($a){
	
	header("location:view_distributor.php");

}
				
	
		
			mysqli_error();
	
?>