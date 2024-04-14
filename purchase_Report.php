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
                                <li id="current"><a href="purchase_Report.php">Report</a></li>
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
                            
                            <li><a href="purchase_Report.php">PurchaseReport</a></li>
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
                    	<form action="purchase_Report.php" method="POST" >
                        <table> 
                        <tr>
                     <td>From Date:</td>
                                 
                    <td>
                        <select name="m1"style="width:120; padding:inherit;font-size:16px">
                        <option value="#">Month</option>
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">Apr</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7">Jul</option>
                        <option value="8">Aug</option>
                        <option value="9">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                        </select>
                        <select name="d1"style="width:120; padding:inherit;font-size:16px">
                        <option value="#">Date</option>
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
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        </select>
                        <select name="y1"style="width:120; padding:inherit;font-size:16px">
                        <option value="#">Year</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        </select>
                    </td>
                    </tr>
    
    <tr><td>To Date:</td>
        <td>
		    <select name="m2"style="width:120; padding:inherit;font-size:16px">
			<option value="#">Month</option>
			<option value="1">Jan</option>
			<option value="2">Feb</option>
			<option value="3">Mar</option>
			<option value="4">Apr</option>
			<option value="5">May</option>
			<option value="6">Jun</option>
			<option value="7">Jul</option>
			<option value="8">Aug</option>
			<option value="9">Sep</option>
			<option value="10">Oct</option>
			<option value="11">Nov</option>
			<option value="12">Dec</option>
		    </select>
		    <select name="d2"style="width:120; padding:inherit;font-size:16px">
			<option value="#">Date</option>
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
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		    </select>
		    <select name="y2"style="width:120; padding:inherit;font-size:16px">
			<option value="#">Year</option>
			<option value="1990">1990</option>
			<option value="1991">1991</option>
			<option value="1992">1992</option>
			<option value="1993">1993</option>
			<option value="1994">1994</option>
			<option value="1995">1995</option>
			<option value="1996">1996</option>
			<option value="1997">1997</option>
			<option value="1998">1998</option>
			<option value="1999">1999</option>
			<option value="2000">2000</option>
			<option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
           <option value="2005">2005</option>
           <option value="2006">2006</option>  
           <option value="2007">2007</option>
           <option value="2008">2008</option>
           <option value="2009">2009</option>
           <option value="2010">2010</option>
       	   <option value="2011">2011</option>
           <option value="2012">2012</option>
           <option value="2013">2013</option>
           <option value="2014">2014</option>
                                                                                           
		    </select>
		</td>
	    </tr>
    
        <tr>
        <td></td>
       <td > <input type="submit" value="submit" style="width:200; height:50; font-size:18px"></td>
	   
        </tr>
   	 
	
                            <?php

				include("config.php");
				if($_SERVER['REQUEST_METHOD']=="POST")
				{
				?>

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
                                    
                                </tr>
                            </thead>
                            <tbody>
                                                 <tbody>
		
        
        
	
	<?php
	{
	$from=$_POST['y1'].'-'.$_POST['m1'].'-'.$_POST['d1'];
	$to=$_POST['y2'].'-'.$_POST['m2'].'-'.$_POST['d2'];
	 $re=mysqli_query($c,"select * from purchase where p_date between '$from' and '$to'");
	 if(mysqli_num_rows($re)==0)
	 {
		 echo "<script>
			alert('Record not found');
			window.location='purchase_Report.php';
			</script>";	
	 }
	 
	while($r=mysqli_fetch_array($re))

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
		echo "</tr>";
}
					}
?>		 
	 

</table></form></div></div>
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