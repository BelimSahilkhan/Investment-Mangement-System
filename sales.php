<?php
@session_start();
if(!isset($_SESSION['admin']))
{
	@header("location:index.php");	
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
                                <li id="current"><a href="sales.php">Sales</a></li>
                                <li><a href= "Distributor.php">Distributor</a></li>
                                <li><a href="client.php">Client</a></li>
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
                            <li><a href="view_sales.php">ALL sales</a></li>
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
if($_POST)
{
$idd=$_POST['nm'];
$spp=explode("-",$idd);
$id2=$spp[0];
$sp=$spp[1];
$pnm=$spp[2];
$typ=$spp[3];
$b=$_POST['cm'];
$e=$_POST['me'];
$c_id=$_SESSION['id'];
$qq=mysqli_query($c,"select p_qty from purchase where id=$id2");
$q=mysqli_fetch_array($qq);
$p_qty=$q[0]-$e;
$ab=$typ.'_'.$pnm;
$cd=strtoupper($ab);
	if($q[0]<$e)
	{
		echo "<script>alert('Product $cd Quentity Is only $q[0] available');window.location='sales.php'; </script>";
	}
	else
	{
		$in=mysqli_query($c,"insert into sales(c_id,p_id,c_name,s_price,s_qty,s_date)values('$c_id',$id2,'$b',$sp,'$e',CURRENT_DATE)");
		if($in)
			{
				
				mysqli_query($c,"update purchase set p_qty=$p_qty where id=$id2");
				echo "<script>alert('Product $cd Sold at $sp INR');window.location='sales.php'; </script>";
			}
		  else
						echo mysqli_error();
	}
}

?>
	<form action="sales.php" method= "post">

	<table width="400px" align="center">
		<tr>
			<td> product name</td>
			<td>    
                <select name="nm"  style="width:240; padding:inherit;font-size:16px">
                <option value="#">Select Product</option>
                <?php $res=mysqli_query($c,"select * from purchase order by type");
                if(!$res) echo mysqli_error();
                while($rr=mysqli_fetch_array($res)){
					$nmm=explode(" ",$rr[1]);
					$nmm2=implode("_",$nmm);
             	   echo "<option value=".$rr[0].'-'.$rr[6].'-'.$nmm2.'-'.$rr[3].">".$rr[3]."_".$rr[1]."</option>";
                }
                ?>
                </select>
                </td>
                </tr>
                <tr>
            <td> client_name</td>
			<td>    
				<select name="cm" style="width:240;padding:inherit; font-size:16px"><option value="#">Select Client</option>
                	<?php $res=mysqli_query($c,"select dis_name from client");
						if(!$res) echo mysqli_error();
					while($rr=mysqli_fetch_array($res)){
						echo "<option value=".$rr['dis_name'].">".$rr['dis_name']."</option>";
					}

					?>
          </select>
            </td>
          </tr>  
		
		<tr>
            <td> Product Quntity </td>
           <td>
           <select name="me"  style="width:240;padding:inherit">
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
        </select></td>
	    </tr>
        <tr>
                <td><input type="submit"value="submit"></td>
        </tr>
</table>
</form>	

</tbody></table></form></div></div>
        <div id="footer">
        	<div class="container_12">
            	<div class="grid_12">
                
                	<p>&copy; Somnath Academy. <a href="index.php">Devloped By  Belim Sahilkhanl</a></p>
        		</div>
            </div>
            <div style="clear:both;"></div>
        </div> <!-- End #footer -->
	</body>
</html>