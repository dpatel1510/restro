	<?php
		$backgroundImage=session_start();
		
		$nm=$_POST['unm'];
		$pw=$_POST['pwd'];
		$_SESSION['username']=$_POST['unm'];
		if($nm=='atmiya' && $pw=='123')
		{
			$_SESSION['username'];
			echo "<br>";
			header('location:menu.php');
			
		}
		else
		{
			
				include "style/style8.php";
		}
	?>


