<?php
session_start();
if(!isset($_SESSION['admin']))
{
	header("location:index.php");	
}
include("config.php");
include("menu.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
		$nm=$_POST['nm'];			
		$e=$_POST['desc'];
		$m=$_POST['ty'];
		$a=$_POST['ma'];	
		$g=$_POST['pr'];
		$p=$_POST['sp'];
		$f=$_POST['pq'];
		$ph=$_POST['ph']; 		
		$in=mysqli_query("insert into $tb(p_name,p_desc,type,manufeture,price,selsprice,p_qty,p_date,image) values('$nm','$e','$m','$a','$g','$p','$f',CURRENT_DATE(),'$ph')");
		if($in)
		{
			header("location:stock.php");
		}
		else
			echo mysqli_error();

}
?>

<form action="sales.php" method= "post">
	<table width="400px" align="center">
		<tr>
			<td> product name</td>
			<td>    
				<select name="nm">
                	<?php $res=mysqli_query("select p_name from purchase");
						if(!$res) echo mysqli_error();
					while($rr=mysqli_fetch_array($res)){
						echo "<option value=".$rr['p_name'].">".$rr['p_name']."</option>";
					}
					?>
                </select>
                </td>
                </tr>
                <tr>
            <td> client_name</td>
			<td>    
				<select name="cm">
                	<?php $res=mysqli_query("select dis_name from client");
						if(!$res) echo mysql_error();
					while($rr=mysqli_fetch_array($res)){
						echo "<option value=".$rr['dis_name'].">".$rr['dis_name']."</option>";
					}
					?>
          </select>
            </td>
          </tr>  
		<tr>
			<td>Sales Price </td>
            <td>
  	          <input type="text" name= "sp">
            </td>
        </tr>
		<tr>
            <td> Product Quntity </td>
            <td>
     	       <input type="text" name= "pq">
            </td>
	    </tr>
        <tr>
                <td><input type="submit"value="submit"></td>
        </tr>
</table>
</form>	