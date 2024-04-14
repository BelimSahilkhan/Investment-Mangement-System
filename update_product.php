<html>
<head>
				<title> update </title>
	</head>



 <?php
include("config.php");
$id=$_GET['id'];
$re=mysqli_query($c,"select  * from purchase where id=$id");
$r=mysqli_fetch_array($re);
?>
 <form action="admin.php" method= "post" enctype="multipart/form-data">
 <table width="500px"  align="center">
 <td colspan="2"aling ="center" bgcolor="#00FFFF">
    			update                
        </td>
		<tr>
			<input type="hidden" name="id" value="<?php echo $r[0];?>"/>
    	</tr>
        

		
	
			
<tr>
		
	<td> product name</td>
	<td><input type="text" name="nm"value="<?php echo $r[1];?>"/></td>
</tr>
<tr>
		
<td> Product Type
</td> <td>   
<select name="pnm"value="<?php echo $r[2];?>"/>
 <?php $res=mysql_query($c,"select p_type from distributor");
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
	<td> <textarea style="width:230px;height:100px" name="desc"value="<?php echo $r[3];?>"/></textarea> </td>
</tr>

<tr>
		
<td> menufecture
</td> <td>   
<select name="me"value="<?php echo $r[4];?>"/>
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
<td><input type="text" name= "pr"value="<?php echo $r[5];?>"/></td>
</tr>
			
<tr>
<td> sels price </td>
<td>
<input type="text" name= "sp"value="<?php echo $r[6];?>"/>
				</td>
			</tr>

				
			
			<tr>
				<td> product quantity </td>
				<td>
					<input type="text" name= "pq"value="<?php echo $r[7];?>"/>
				</td>
			</tr>

			
			
			<tr>
				<td> image </td>
					<td>
						<input type="file" name="ph">
					</td>
			</tr>

				<tr>
					<td><input type="submit"value="submit"></td>
				</tr>


				<tr>
					<td><input type= "reset"value="reset"></td>
</form>				</tr>
</table>
           
         
         


