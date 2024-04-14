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
                                <li><a href="admin.php">Stock</a></li>
                                <li><a href="sales.php">Sales</a></li>
                                <li id="current"><a href="Distributor.php">Distributor</a></li>
                                <li ><a href="client.php">Client</a></li>
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
                            <li><a href="Distributor.php">Add distributor</a></li>
                            <li><a href="view_distributor.php">All distributor</a></li>
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
                    	    </thead>
                            <tbody>
                
        
        
	
 <?php
  
include("config.php");
$id=$_GET['id'];
$re=mysqli_query($c,"select  * from distributor where m_id");
$r=mysqli_fetch_array($re);
       
if($_POST)
{
$b=$_POST['cm'];
$s=$_POST['pn'];
$d=$_POST['add'];
$e=$_POST['con'];
$f=$_POST['co2'];
$g=$_POST['em'];
$h=$_POST['wa'];
$id=$_POST['id'];
$in=mysqli_query ($c,"update distributor set c_name='$b',p_type='$s',address='$d',contect1='$e',contect2='$f',email='$g',website='$h' where m_id=$id");
if($in)
 
 	{
		header("location:view_distributor.php");
		
	}

  else
		echo mysqli_error();

}


?>		


<html>
<head>
				<title> distributr update </title>
	</head>
    
	<table width="500px" align="center">
   
    <td colspan="2"aling ="center" bgcolor="#00FFFF">
    			
                
            </td>
         <form action="distributor_update.php" method= "post" enctype="multipart/form-data">
 <tr>
 </td>
		<tr>
			<input type="hidden" name="id" value="<?php echo $r[0];?>"/>
    	</tr>
        

 <td> company_name</td>
   <td><input type="text"name="cm"style="width:240; padding:inherit;font-size:16px" value="<?php echo $r[1];?>"></td>
  </tr>
  
  <tr>
  
  			<td> product_type</td>
            <td><input type="text" name="pn" style="width:240; padding:inherit;font-size:16px" value="<?php echo $r[2];?>"></td>
  </tr>
  
  <tr>
  				<td>address</td>
                <td><input type="text" name="add" style="width:240; padding:inherit;font-size:16px" value="<?php echo $r[3];?>"></td>
   </tr>
   
<tr>
	<td> contect1</td>
    <td> <input type="text" name="con"style="width:240; padding:inherit;font-size:16px" value="<?php echo $r[4];?>"></td>
</tr>   
<tr>
	<td> contect2</td>
    <td> <input type="text" name="co2" style="width:240; padding:inherit;font-size:16px" value="<?php echo $r[5];?>"></td>
</tr>   
   
<tr>
			<td> email</td>
            <td><input type="email" name="em" style="width:240; padding:inherit;font-size:16px"value="<?php echo $r[6];?>"></td>
</tr>
<tr>
 		<td>website</td>
        <td><input type="text" name="wa" style="width:240; padding:inherit;font-size:16px"value="<?php echo $r[7];?>"></td>
 </tr>
 <tr>
 <td><input type="submit" value="submit" ></td>
 </tr>
 <tr>
 <td><input type="submit" value="reset"></td>
 
 </form>
  
        
            
         
         



        </tbody></table></div></div>
        <div id="footer">
        	<div class="container_12">
            	<div class="grid_12">
                
                	<p>&copy; Somnath Academy. <a href="index.php">Devloped By Belim Sahilkhan</a></p>
        		</div>
            </div>
            <div style="clear:both;"></div>
        </div> <!-- End #footer -->
	</body>
</html>