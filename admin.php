<html>
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
          text-align: center;
          font-size: 20px;
		  border-radius: 5px;
        }
fieldset {
		  display: block;
		  margin-left: 40%;
		  margin-right: 40%;
		  margin-top: 18% ;
		  padding-top: 2%;
		  padding-bottom: 2%;
		  padding-left: 2%;
		  padding-right: 2%;
		  
		  background:black;
		}
    </style>
 <body>
    <fieldset>
<form action="pass.php" method ="post">
<font color="white" >
Enter username<br><input type="text" name="unm"><br><br>
Enter passward<br><input type="password" name="pwd"><br><br>
<center><input type="submit" name="s1"></center>
    </font>
</form>
    </fieldset>
    </body>
</html>