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
                                <li><a href="Distributor.php">Distributor</a></li>
                                <li ><a href="client.php">Client</a></li>
                                <li><a href="purchase_Report.php">Report</a></li>
                                <li id="current"><a href="search.php">Search</a></li>
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
                        	<li><a href="search.php">stock search</a></li>
                           <li><a href="distributor_search.php">distributor search</a></li>
                            <li><a href="client_search.php">client search</a></li>

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
                	<h2><span>Stock search</span></h2>
                    
                    <div class="module-table-body">
                    	   <div class="grid_6">
            
              </br>

                    
                        
                     
                         <form action="search.php" method="post">
                            <fieldset>
                                <input type="text" class="input-medium"  name="se"required="required"/>&nbsp;&nbsp;<input class="submit-green" type="submit" value="SEARCH" />
                            </fieldset>
                         </form>
                     </br></br>
                <div style="clear:both;"></div>
            
           
                        
</div>                
        
        
	
	<?php

		include("config.php");
		if($_SERVER['REQUEST_METHOD']=="POST")
	{
		?>
        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:10%">product name</th>
                                    <th style="width:25%">dese</th>
                                    <th style="width:10%">product Type</th>
                                    <th style="width:10%">company name</th>
                                    <th style="width:5%">price</th>
                                    <th style="width:5%">sales price</th>
                                    <th style="width:8%">product quantity</th>
                                    <th style="width:5%">Date</th>
                                    <th style="width:5%">image</th>
                                    <th style="width:5%">delete</th>
                                    <th style="width:5%">edit</th>
                                </tr>
                            </thead>
                            <tbody>
		<?php
		
		$se=$_POST['se'];
	$re=mysqli_query($c,"select * from purchase where p_name like('%$se%') or p_desc like('%$se%')");
	if(mysqli_num_rows($re)==0)
	{
		echo "<script>
			alert('Record not found');
			window.location='search.php';
			</script>";	
	}
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

	}
	?>		 
	 

</tbody></table></form></div></div>
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