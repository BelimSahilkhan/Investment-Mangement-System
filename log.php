<?php
include("confing.php");
$u=$_POST['un'];
$p=$_POST['password'];
$result=mysqli_query($c,"select * from $ts where username='$u' and password='$p'");
if(mysqli_num_rows($result)==1)
	header("location:home.php");
	else
	echo mysqli_error();
		
?>
