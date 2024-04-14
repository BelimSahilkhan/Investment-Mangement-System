<?php
session_start();
if(isset($_SESSION['admin']))
{
	unset($_SESSION['admin']);
	header("location:index.php");	
}
else
{
	echo "<script> alert('You Are Already Logout');
	window.location='index.php'; 
	</script>";	
}
?>