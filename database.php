<?php
if(isset($_POST['s1']))
{
	
    $nm=$_POST['nm'];
    $no=$_POST['num'];
    $email=$_POST['el'];
    $date=$_POST['dt'];
    $time=$_POST['tm'];
    $ch=$_POST['ch'];
    $ad=$_POST['ad'];
	
	
	
	
	
    $con=mysqli_connect("localhost","root","","rtbsdb");
	$check_query = "SELECT * FROM rtbst WHERE date='$date' AND time='$time'";
    $result = mysqli_query($con, $check_query);

    if(mysqli_num_rows($result) > 15)
	{
        include "style/style6.php";
    } 
	else
	{
		$check_query1 = "SELECT * FROM rtbst WHERE name='$nm' AND number='$no' AND email='$email' AND date='$date' AND time='$time'";
		$result1 = mysqli_query($con, $check_query1);
		
		if(mysqli_num_rows($result1) > 0)
		{
				include "style/style7.php";
		}
		else
		{
			$q="insert into rtbst(name,number,email,date,time,children,adults) values('$nm','$no','$email','$date','$time','$ch','$ad')";
			{
				mysqli_query($con,$q);
				include "style/style.php";
			}
		}
	}
}
else
{
    echo "not";
}
?>