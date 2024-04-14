

<table border='1'>
	<tr>
		<th>p_name</th>
		<th>dese</th>
		<th>p_type<th>
		<th>manu</th>
		<th>price</th>
		<th>selsprice</th>
		<th>p_qty</th>
		<th>p_date</th>
		<th>p_image</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>






<?php

		include("config.php");
		include("menu.php");
	$re=mysqli_query("select * from purchase");
while($r=mysqli_fetch_array($re))
{
		$id=$r[0];
		echo"<td>".$r[1]."</td>";
		echo"<td>".$r[2]."</td>";
		echo"<td>".$r[3]."</td>";
		echo"<td>".$r[4]."</td>";
		echo"<td>".$r[5]."</td>";
		echo"<td>".$r[6]."</td>";
		echo"<td>".$r[7]."</td>";
		echo "<td><img src='$r[8]' heigth='50' width='50'></td>";
		echo " <td><a href='delete.php?id=$id'>delete</a></td>";
		echo " <td><a href='update.php?id=$id'>Update</a></td>";
		echo "</tr>";
}

?>		 header("location:<a href='stock.php'>stock</a>");
</table>