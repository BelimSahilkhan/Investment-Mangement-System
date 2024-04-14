<?php
include("config.php");
if(isset($_POST['username']) && isset($_POST['password']))
{
		$u=$_POST['username'];
		$p=$_POST['password'];
		$a=mysqli_query($c,"select * from adminreg where username='$u' and password='$p'");
		if(mysqli_num_rows($a)==1)
		{
			session_start();
			$_SESSION['admin']=$u;
			$b=mysqli_fetch_array($a);
			$_SESSION['id']=$b[0];
			header("location:admin.php");
		}
		else
		{
		echo "<script> alert('Invalid Username Or Password');</script>";
		}		
}
if(isset($_POST['user_name']) && isset($_POST['pass']) && isset($_POST['key2']))
{
	$b=$_POST['user_name'];
	$pass=$_POST['pass'];
	$d=$_POST['email'];
	$e=$_POST['key2'];
	if($e=="prathna" || $e=="hemangi" ||$e=="dhruvika"||$e=="abc")
	{
		// $q="insert into adminreg(username,password,key2,email,regdate)values('$b','$c','$e','$d',CURRENT_DATE())";
       		 // $in=mysqli_query($c,$q);
      		  $in=mysqli_query($c,"insert into adminreg(username,password,key2,email,regdate)values('$b','$pass','$e','$d',CURRENT_DATE())");

		if(!$in)
		{
			header("location:admin.php");
		}
		 
	}
	else echo "<script> alert('Record Inserting Errror');</script>";
}

?>
<html>
    <head>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
           
            <header>
                <h1>Inventory Management System <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For Computer Shop</span></h1>
		    </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="index.php" autocomplete="on" method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" >Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Username"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Password" /> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="index.php" autocomplete="on" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="user_name" required="required" type="text" placeholder="Username" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="youremail@xyz.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="pass" required="required" type="password" placeholder="Password"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please enter your Security Key </label>
                                    <input id="passwordsignup_confirm" name="key2" required="required" type="password" placeholder="Security Key"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>