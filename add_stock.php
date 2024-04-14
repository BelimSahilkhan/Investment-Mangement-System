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
                                <li><a href="distributor.php">Distributor</a></li>
                                <li><a href="client.php">Client</a></li>
                                <li><a href="purchase_Report.php">Report</a></li>
                                <li><a href="search.php">Search</a></li>
                            </ul>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </div> 
            <div style="clear: both;"></div>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul>
                            <li><a href="admin.php">All Stock</a></li>
                            <li><a href="add_stock.php">Add Stock</a></li>
                        </ul>
                        
                            
                        
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div> 
        </div>
        
	
		<div class="module">
                	<h2><span>Computer Stock Table</span></h2>
                    
                    <div class="module-table-body">
                    	<table id="myTable" class="tablesorter">
                        	<thead>
                                  </thead>
                            <tbody>
                            
  <?php
include("config.php");
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
		$in=mysqli_query($c,"insert into $tb(p_name,p_desc,type,manufeture,price,selsprice,p_qty,p_date,image) values('$nm','$e','$m','$a','$g','$p','$f',CURRENT_DATE(),'$ph')");
		if($in)
		{
			echo "<script>
			alert('Record Inserted');
			window.location='admin.php';
			</script>";
			
		}
		else
			echo mysql_error();

}
?>


<form action="add_stock.php" method= "post" enctype="multipart/form-data">

		
		<table width ="400px" align="center">
			
<tr>
		
	<td> product name</td>
	<td><input type="text" name="nm" required="required" size="34" style="padding:inherit"></td>
</tr>
<tr>
		
<td> Product Type
</td> <td>   
<select name="pnm" style="width:240;padding:inherit">
 <?php $res=mysqli_query($c,"select p_type from distributor");
	if(!$res) echo mysqli_error();
	while($rr=mysqli_fetch_array($res)){
	echo "<option value=".$rr['p_type'].">".$rr['p_type']."</option>";
			} 
		?>
          </select>
  </td>
</tr>
<tr>
	<td>desc</td>
	<td> <textarea style="width:240px;height:100px;padding:inherit" name="desc" required="required"  ></textarea> </td>
</tr>

<tr>
		
<td> menufecture
</td> <td>   
<select name="me"  style="width:240;padding:inherit">
 <?php $res=mysqli_query($c,"select c_name from distributor");
	if(!$res) echo mysqli_error();
	while($rr=mysqli_fetch_array($res)){
	echo "<option value=".$rr['c_name'].">".$rr['c_name']."</option>";
			}
		?>
          </select>
  </td>
</tr>




			
<tr>
<td> price </td>
<td><input type="text" name= "pr" required="required" size="34" style="padding:inherit"></td>
</tr>
			
<tr>
<td> sales price </td>
<td>
<input type="text" name= "sp" required="required" size="34" style="padding:inherit">
				</td>
			</tr>

				
			
			<tr>
				<td> product quantity </td>
				<td>
					<select name= "pq" style="width:240;padding:inherit; font-size:16px">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        
               </select>
				</td>
			</tr>

			
			
			<tr>
				<td> image </td>
					<td>
						<input type="file" name="ph" style="width:240;padding:inherit">
					</td>
			</tr>

				<tr>
					<td><input type="submit"value="submit"></td>
					<td><input type= "reset"value="reset"></td>
			</tr>
            </table>

</form>	

                            
                            
                            
                             </tbody></table></form></div></div>

        <div id="footer">
        	<div class="container_12">
            	<div class="grid_12">
                
                	<p>&copy; Somnath Academy Belim Sahilkhan. <a href="index.php">Devloped By  Belim Sahilkhan</a></p>
        		</div>
            </div>
            <div style="clear:both;"></div>
        </div> <!-- End #footer -->
	</body>
</html>