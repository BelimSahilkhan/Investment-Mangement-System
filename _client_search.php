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
                                <li id="current"><a href="">Distributor</a></li>
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
                            <li><a href="client.php">Add client</a></li>
                            <li><a href="view.php">All client</a></li>
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
                    	   <div class="grid_6">
            
                <div class="module">
                     <h2><span>To-do list</span></h2>
                        
                     <div class="module-body">
                         <form action="client_search.php" method="post">
                            <fieldset>
                                <input type="text" class="input-medium"  name="se"/>&nbsp;&nbsp;<input class="submit-green" type="submit" value="SEARCH" />
                            </fieldset>
                         </form>
                     </div>
                </div> <!-- module -->
                <div style="clear:both;"></div>
            
            </div> 
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:10%">client name</th>
                                    <th style="width:25%">company name</th>
                                    <th style="width:10%">Address</th>
                                    <th style="width:10%">email</th>
                                    <th style="width:3%">mobile</th>
                                    <th style="width:2%">delete</th>
                                    <th style="width:2%">edit</th>
                                </tr>
                            </thead>
                            <tbody>
                
        
        
	
	        
	
	<?php
			include("config.php");	
			{
		$se=$_POST['se'];
	$re=mysqli_query("select * from client where dis_name like('%$se%') or company_name like('%$se%')");
while($r=mysqli_fetch_array($re))
{
          while($r=mysqli_fetch_array($re))

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
}

?>		 
	
                               
                            </tbody>
                        </table>
                        </form>
                        <div class="pager" id="pager">
                            <form action="">
                                <div>
                                <img class="first" src="css/arrow-stop-180.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop-180.gif" alt="first"/>
                                <img class="prev" src="css/arrow-180.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-180.gif" alt="prev"/> 
                                <input type="text" class="pagedisplay input-short align-center"/>
                                <img class="next" src="css/arrow.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow.gif" alt="next"/>
                                <img class="last" src="css/arrow-stop.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop.gif" alt="last"/> 
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