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
                                <li id="current"><a href="admin.php">Stock</a></li>
                                <li><a href="sales.php">Sales</a></li>
                                <li><a href="Distributor.php">Distributor</a></li>
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
                            <li><a href="admin.php">All stock</a></li>
                            <li><a href="Add_stock.php">add stock</a></li>
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
$re=mysqli_query($c,"select  * from purchase where id=$id");
$r=mysqli_fetch_array($re);
if($_SERVER['REQUEST_METHOD']=="POST")
{
		 $nm=$_POST['nm'];			
		$e=$_POST['desc'];
		$m=$_POST['pnm'];
		$a=$_POST['me'];	
		$g=$_POST['pr'];
		$p=$_POST['sp'];
		$f=$_POST['pq'];
		$ph='img/'.$_FILES['ph']['name']; 
		$tph=$_FILES['ph']['tmp_name'];
		move_uploaded_file($tph,$ph); 
		$id=$_POST['id'];		
		$in=mysqli_query($c,"update purchase set p_name='$nm',p_desc='$e',type='$m',manufeture='$a',price='$g',selsprice='$p',p_qty='$f' where id=$id");
		if($in)
		{
			header("location:admin.php");
		}
		else
			echo mysqli_error();

}
?>



<form action="product_update.php" method= "post" enctype="multipart/form-data">

		
		<table width ="400px" align ="center">
</td>
		<tr>
			<input type="hidden" name="id" value="<?php echo $r[0];?>"/>
    	</tr>
        

		
	
			
<tr>
		
	<td> product name</td>
	<td><input type="text" name="nm"style="width:240; padding:inherit;font-size:16px" value="<?php echo $r[1];?>"/></td>
</tr>
<tr>
		
<td> Product Type
</td> <td>   
<select name="pnm"style="width:240; padding:inherit;font-size:16px" value="<?php echo $r[3];?>"/>
 <?php $res=mysqli_query($c,"select p_type from distributor");
	if(!$res) echo mysql_error();
	while($rr=mysqli_fetch_array($res)){
	echo "<option value=".$rr['p_type'].">".$rr['p_type']."</option>";
			}
		?>
          </select>
  </td>
</tr>
<tr>
	<td>desc</td>
	<td> <textarea style="width:230px;height:100px" name="desc" style="width:240; padding:inherit;font-size:16px"><?php echo $r[2];?></textarea> </td>
</tr>

<tr>
		
<td> menufecture
</td> <td>   
<select name="me"style="width:240; padding:inherit;font-size:16px" value="<?php echo $r[4];?>"/>
 <?php $res=mysqli_query($c,"select c_name from distributor");
	if(!$res) echo mysql_error();
	while($rr=mysqli_fetch_array($res)){
	echo "<option value=".$rr['c_name'].">".$rr['c_name']."</option>";
			}
		?>
          </select>
  </td>
</tr>




			
<tr>
<td> price </td>
<td><input type="text" name= "pr" style="width:240; padding:inherit;font-size:16px" value="<?php echo $r[5];?>"/></td>
</tr>
			
<tr>
<td> sels price </td>
<td>
<input type="text" name= "sp"style="width:240; padding:inherit;font-size:16px" value="<?php echo $r[6];?>"/>
				</td>
			</tr>

				
			
			<tr>
				<td> product quantity </td>
				<td>
					<input type="text" name= "pq" style="width:240; padding:inherit;font-size:16px"value="<?php echo $r[7];?>"/>
				</td>
			</tr>

			
			

				<tr>
					<td><input type="submit"value="submit"></td>
				</tr>


				<tr>
					<td><input type= "reset"value="reset"></td>
</tr>


</form>

           
         
    
</tbody></table></form></div></div>
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