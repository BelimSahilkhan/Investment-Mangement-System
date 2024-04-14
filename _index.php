<?php
session_start();
if(isset($_SESSION['admin']))
{
	header("location:admin.php");	
}
include("config.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
$u=$_POST['un'];
$p=$_POST['password'];
$a=mysqli_query("select * from admin where username='$u' and password='$p'");
if(mysqli_num_rows($a)==1)
{
		session_start();
	$_SESSION['admin']=$u;
	header("location:admin.php");
}
else
{
	$err="Invalid Username Or Password";
}
}
?>
<html>
	<head>
		<title>Login Page</title>
	</head>
	<body>
        		<form method="post" action="index.php" >
            			<table width="400px" align="center">
                				<tr><br/><br/>
                    				<td colspan="2" align="center" bgcolor="#CC88TT">Login Form </td>
                				</tr>
               				 <tr>
                					<td>
                        					Username *
                    				</td>
                    				<td>
                        					<input type="text" name="un"placeholder="username">
                    				</td>
                				</tr>
                				<tr>
                    				<td>
                        					Password
                    				</td>
                   				 <td>
                       					 <input type="password" name="password"placeholder="password">
                    				</td>
                				</tr>
                				<tr>
                    				<td>
                  					<input type="submit" value=" Login " >
                    				</td>
						<td><br><br><br><?php echo @$err; ?> </td>
                				</tr>
	           		</table>
		</form>
	</body>
</html>
