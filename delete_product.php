<?php
include("config.php");
$id=$_GET['id'];
$b=mysqli_query($c,"delete from purchase where id=$id");
if($b){
	header("location:admin.php");
}
else				
	echo mysql_error();
	
?>