<html>
<head>
<style>

table {
  border-collapse: collapse;
}

td, th 
{
  border-bottom: 1px solid #e0aa3e;
  padding: 10px;
}
</style>

</head><?php
	$con=mysqli_connect("localhost","root","","rtbsdb");
	
	$q="select * from rtbst";
	if ($rs=mysqli_query($con,$q))
	{
		echo "<table border-bottom >
				<tr> 
					<th width=20.150%> Name</th>
					<th width=12%>Number</th>
					<th width=24.50%>Email</th>
					<th width=9%>Date</th>
					<th width=9%>Time</th>
					<th width=11%>No. of childs</th>
					<th width=10%>No. of adults</th>
					
				</tr>";
				
				while($rs1=mysqli_fetch_array($rs))
				{
			
					echo "<tr>";
						echo "<td width=22%><center>".$rs1[0];
						echo "<td width=12%><center>".$rs1[1];
						echo "<td width=24.50%><center>".$rs1[2];
						echo "<td width=9%><center>".$rs1[3];
						echo "<td width=9%><center>".$rs1[4];
						echo "<td width=11%><center>".$rs1[5];
						echo "<td width=10%><center>".$rs1[6];
						
					echo "</tr>";
					
					
				}
	}
	

?>
</html>