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
                                <li><a href="purchase_Report.php">Report</a></li>
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
                            <tbody>
		
        <?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
$a=$_POST['nm'];
$b=$_POST['cm'];
$d=$_POST['add'];
$e=$_POST['em'];
$f=$_POST['mo'];

$in=mysqli_query($c,"insert into $cl(dis_name,company_name,address,email,mobile)values('$a','$b','$d','$e','$f')");
if($in)
 	{
		echo "<script>
			alert('Record Inserted');
			window.location='admin.php';
			</script>";
		//header("location:admin.php");
	}
  else
		 		echo mysql_error();
}
?>
	<table width="500px"  align="center">
   
    <td colspan="2"aling ="center" bgcolor="#00FFFF">
    			
                
            </td>
         <form action="client.php" method= "post" enctype="multipart/form-data">
<tr>
	<td> client_name </td>
    <td><input type="text"name= "nm" required="required" style="width:240; padding:inherit;font-size:16px"> </td>
   </tr>
 <tr>
 
 			<td> company_name</td>
            <td><input type="text"name="cm" required="required" style="width:240; padding:inherit;font-size:16px"></td>
  </tr>
  
  
  <tr>
  				<td>address</td>
                <td><input type="text" name="add" required="required" style="width:240; padding:inherit;font-size:16px"></td>
   </tr>
   
   
   
<tr>
			<td> email</td>
            <td><input type="email" name="em" style="width:240; padding:inherit;font-size:16px"></td>
</tr>


<tr>
		<td>mobile</td>
        <td><input type="text" name="mo" required="required"style="width:240; padding:inherit;font-size:16px"></td>
 </tr>
 
 <tr>
 <td><input type="submit" value="submit"></td>
 </tr>
 <tr>
 <td><input type="submit" value="reset"></td>
 
 </form>
  </table>

        </tbody></table></div></div>
        <div id="footer">
        	<div class="container_12">
            	<div class="grid_12">
                
                	<p>&copy; Somnath Academy. <a href="index.php">Devloped By  Belim Sahilkhan</a></p>
        		</div>
            </div>
            <div style="clear:both;"></div>
        </div> <!-- End #footer -->
	</body>
</html>