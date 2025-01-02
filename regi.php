<html>
	<head>
		<style>

		body{
			background-image: url('regt4.jpg');
			background-repeat: no-repeat;
			background-size:cover;
			background-attachment:fixed;
		  
		}
		input[type=submit] {
				  background-color: #e0aa3e;
				  border: none;
				  color: black;		
				  border-radius: 5px;				  
				  text-align: center;
				  font-size: 20px;
				}
		
		fieldset {
			  display: block;
			  margin-left: 36%;
			  margin-right: 36%;
			  margin-top:  10%;
			  padding-top: 2%;
			  padding-bottom: 2%;
			  padding-left: 3%;
			  padding-right: 3%;
			  
			  background:black;
			}
		</style>
	</head>
	<body>
		<fieldset>
			<form action="database.php" method="post">
				<center>
					<h1><font color="white" ><u>Registeration</u></font></h1>
				
					<input type="text" name="nm" placeholder="Enter your name" required><br><br>
					<input type="tel" name="num" id="phone" placeholder="Enter your number" required pattern="[6-9][0-9]{9}"><br><br>
					<input type="email" name="el" placeholder="Enter your email" required><br><br>
					<input type="date" name="dt" required>&nbsp;
					<input type="time" name="tm" required><br><br>
					<input type="number" name="ch" placeholder="Number of Children" required><br><br>
					<input type="number" name="ad" placeholder="Number of Adults" required><br><br>
					
				<center>
					<input type="submit" name="s1" value="Register a table"> <br><br>

					<a href="admin.php" ><font color="white">Go to Admin</font></a>  &nbsp &nbsp &nbsp &nbsp
					<a href="conformation/conform1.php" ><font color="white">Conformation</font></a>&nbsp &nbsp &nbsp &nbsp
					
					<a href="cancellation/delete.php" ><font color="white">Cancel</font></a>&nbsp &nbsp &nbsp &nbsp
					<br>
		
					
				</center> 
			</form>
		</fieldset>
	</body>
</html>

