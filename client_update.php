         <?php
session_start();
if(!isset($_SESSION['admin']))
{
	header("location:index.php");	
	
}
?>
<html>
	<head>
		<title>Inventory Management System</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/jquery.wysiwyg.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/tablesorter.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/thickbox.css"  media="screen" />
        <link rel="stylesheet" type="text/css" href="css/theme-blue.css" media="screen" />
	</head>
	<body>
        <div id="header">
            <div id="header-status">
                <div class="container_12">
                    <div class="grid_8">
					&nbsp;
                    </div>
                    <div class="grid_4">
                        <a href="logout.php" id="logout">
                        Logout
                        </a>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End #header-status -->
            
            <!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                        <div id="logo">
                            <ul id="nav">
                                <li ><a href="admin.php">Stock</a></li>
                                <li><a href="sales.php">Sales</a></li>
                                <li><a href= "Distributor.php">Distributor</a></li>
                                <li id="current"><a href="client.php">Client</a></li>
                                <li><a href="report.php">Report</a></li>
                                <li><a href="search.php">Search</a></li>
                            </ul>
                        </div><!-- End. #Logo -->
                    </div><!-- End. .grid_12-->
                    <div style="clear: both;"></div>
                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            <div style="clear: both;"></div>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul>
                            <li><a href="client.php">Add client</a></li>
                            <li><a href="view_client.php">All client</a></li>
                        </ul>
                        
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div> 
        </div>
        <div style="clear: both;"></div>
            </div> 
        </div>
        
	
		<div class="module">
                	<h2><span>Computer Stock Table</span></h2>
                    
                    <div class="module-table-body">
                        <table id="myTable" class="tablesorter">
                       
                       
 


 <?php
include("config.php");
$id=$_GET['id'];
$re=mysqli_query($c,"select  * from client where d_id='$id'");
$r=mysqli_fetch_array($re);
if($_SERVER['REQUEST_METHOD']=="POST")
{
$a=$_POST['nm'];
$b=$_POST['cm'];
$d=$_POST['add'];
$e=$_POST['em'];
$f=$_POST['mo'];
$id=$_POST['id'];
$in=mysqli_query($c,"update client set dis_name='$a',company_name='$b',address='$d',email='$e',mobile='$f' where d_id=$id"); 
if($in)
 	{
		header("location:view_client.php");
	}
  else
		 		echo mysqli_error();
}
?>

 <form action="client_update.php" method= "post" enctype="multipart/form-data">
 	<table width="500px"  align="center">
    	 
		<tr>
			<input type="hidden" name="id" value="<?php echo $r[0];?>"/>
    	</tr>
       
	<td> client_name </td>
    <td><input type="text"name= "nm" style="width:240; padding:inherit;font-size:16px"value="<?php echo $r[1];?>"></td>
   </tr>
 <tr>
 
 			<td> company_name</td>
            <td><input type="text"name="cm" style="width:240; padding:inherit;font-size:16px"value="<?php echo $r[2];?>"></td>
  </tr>
  
  
  <tr>
  				<td>address</td>
                <td><input type="text" name="add"  style="width:240; padding:inherit;font-size:16px" value="<?php echo $r[3];?>"></td>
   </tr>
   
   
   
<tr>
			<td> email</td>
            <td><input type="email" name="em" style="width:240; padding:inherit;font-size:16px" value="<?php echo $r[4];?>"></td>
</tr>


<tr>
		<td>mobile</td>
        <td><input type="text" name="mo" style="width:240; padding:inherit;font-size:16px" value="<?php echo $r[5];?>"></td>
 </tr>
 
 <tr>
 <td><input type="submit" value="submit"></td>
 </tr>
 <tr>
 <td><input type="submit" value="reset"></td>
 
 </form>
  </table>
        
            
         
