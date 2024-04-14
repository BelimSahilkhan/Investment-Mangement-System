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
                                <li><a href="Distributor.php">Distributor</a></li>
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
                	<h2><span>client Table</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr style="font-size:16px; font-family:'Wide Latin' ">
                                    <th style="width:10%">client name</th>
                                    <th style="width:25%">Company name</th>
                                    <th style="width:10%">Address</th>
                                    <th style="width:10%">Email</th>
                                    <th style="width:3%">Mobile</th>
                                    <th style="width:2%">Delete</th>
                                    <th style="width:2%">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                
        
        
	
	<?php
			include("config.php");	
           $re=mysqli_query($c,"select * from client");
			while($r=mysqli_fetch_array($re))
{
		$id=$r[0];
		echo"<td>".$r[1]."</td>";
		echo"<td>".$r[2]."</td>";
		echo"<td>".$r[3]."</td>";
		echo"<td>".$r[4]."</td>";
		echo"<td>".$r[5]."</td>";
		echo " <td><a href='delete_client.php?id=$id'><img src='css/minus-circle.gif' width='16' height='16' alt='delete' /></a></a></td>";
		echo " <td><a href='client_update.php?id=$id'><img src='css/pencil.gif' width='16' height='16' alt='edit' /></a></a></td>";
		echo "</tr>";
}

?>		 

</tbody></table></form></div></div>
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