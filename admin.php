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
                    <div class="grid_8" style="font-size:18px; color:#03F; font-family:'Wide Latin'">
					<br>Welcome, <?php  echo $_SESSION['admin']; ?> 
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
                            <li><a href="add_stock.php">Add stock</a></li>
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
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr style="font-size:14px; font-family:'Wide Latin' ">
                                    <th style="width:10%">product name</th>
                                    <th style="width:25%">Description </th>
                                    <th style="width:10%">product Type</th>
                                    <th style="width:10%">company name</th>
                                    <th style="width:5%">price</th>
                                    <th style="width:5%">sales price</th>
                                    <th style="width:8%">product quantity</th>
                                    <th style="width:5%">Date</th>
                                    <th style="width:5%">Image</th>
                                    <th style="width:5%">Delete</th>
                                    <th style="width:5%">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                
        
        
	
<?php

	include("config.php");
	$re=mysqli_query($c,"select * from purchase");
while($r=mysqli_fetch_array($re))
{
		$id=$r[0];
		echo"<tr><td>".$r[1]."</td>";
		echo"<td>".$r[2]."</td>";
		echo"<td>".$r[3]."</td>";
		echo"<td>".$r[4]."</td>";
		echo"<td>".$r[5]."</td>";
		echo"<td>".$r[6]."</td>";
		echo"<td>".$r[7]."</td>";
		echo"<td>".$r[8]."</td>";
		echo "<td><img src='$r[9]' heigth='50' width='50'></td>";
		echo " <td><a href='delete_product.php?id=$id'><img src='css/minus-circle.gif' width='16' height='16' alt='delete' /></td>";
		echo " <td><a href='product_update.php?id=$id'><img src='css/pencil.gif' width='16' height='16' alt='edit' /></a></a></td>";
		echo "</tr>";
}

?>		 
	 

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