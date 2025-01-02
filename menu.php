<html>
	<head>
		<title>Restaurant App</title>
		<style>
			body {
			  margin: 0;
			  font-family: sans-serif;
			}

			.sidebar {
			  background-color: #333;
			  color: #fff;
			  height: 100vh;
			  width: 200px;
			  padding: 20px;
			  position: fixed;
			}

			.sidebar h1 {
			  margin-top: 0;
			}

			.sidebar ul {
			  list-style: none;
			  padding: 0;
			  margin-top: 20px;
			}

			.sidebar li {
			  margin-bottom: 10px;
			}

			.sidebar a {
			  color: #fff;
			  text-decoration: none;
			}

			.content {
			  margin-left: 200px;
			  padding: 20px;
			}
		 </style>
	</head>
	<body>
		<div class="sidebar">
			<br><br><br>
				<h1>Menu</h1><br>
			<ul>
			  <li><a href="booking status.php">All booking   ></a></li><br>
			  <li><a href="regi.php">New Table     ></a></li><br>
			  <li><a href="waiter/swaiter.php">Waiter List    ></a></li><br>
			  <li><a href="waiter/waiter.php">New Waiter     ></a></li><br>
			  <li><a href="waiter/can.php">Remove Waiter     ></a></li><br>
			  <li><a href="cancellation/delete.php">Cancel Table     ></a></li><br>
			  <li><a href="logout.php">Logout     ></a></li>
			</ul>
		</div>

		<div class="content">
		</div>
	</body>
</html>