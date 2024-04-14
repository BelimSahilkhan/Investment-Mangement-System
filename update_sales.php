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
                            <li><a href="sales.php">sales</a></li>
                            <li><a href="view_sales.php">All sales</a></li>
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
if($_SERVER['REQUEST_METHOD']=="POST")
{
$a=$_POST['nm'];
$b=$_POST['cm'];
$d=$_POST['sp'];
$e=$_POST['me'];
 $id=$_POST['id'];
$in=mysqli_query ($c,"update sales set p_name '$a',c_name '$b',s_price '$d',s_qty '$e' where s_id=$id");
if($in)
 
 	{
		header("location:view_sales.php");
		
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
         <form action="update_sales.php" method= "post" enctype="multipart/form-data">
 <tr>
 </td>
		<tr>
			<input type="hidden" name="id" value="<?php echo $r[0];?>"/>
    	</tr>
        

 <td> product_name</td>
  <td>    
				<select name="nm"value="<?php echo $r[3];?>">
                	<?php $res=mysqli_query($c,"select p_name,type 									                         from purchase order by type");
						if(!$res) echo mysqli_error();
					while($rr=mysqli_fetch_array($res)){
						echo "<option value=".$rr['p_name'].">".$rr['type']."_".$rr['p_name']."</option>";
					}
					?>
                </select>
                </td>
           
  <tr>
  
  			<td> client name</td>
            <td>    
				<select name="cm"  value="<?php echo $r[4];?>">
                	<?php $res=mysqli_query($c,"select dis_name from client");
						if(!$res) echo mysql_error();
					while($rr=mysql_fetch_array($res)){
						echo "<option value=".$rr['dis_name'].">".$rr['dis_name']."</option>";
					}
					?>
          </select>
            </td>
  
  <tr>
  				<td>sales price</td>
                <td><input type="text" name="sp"  value="<?php echo $r[5];?>"></td>
   </tr>
   
<tr>
	<td> product quantity</td>
    <td> <input type="text" name="me" value="<?php echo $r[6];?>"></td>
</tr>   
<tr>
	   
   
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
                
                	<p>&copy; Somnath Academy. <a href="index.php">Devloped By Shaktivan Baraiya & Akshay Gohil</a></p>
        		</div>
            </div>
            <div style="clear:both;"></div>
        </div> <!-- End #footer -->
	</body>
</html>



<html>
<head>
				<title> update </title>
	</head>



 