<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
		if ($_SERVER['REQUEST METHOD']=="GET")
		{
			$UserName=sanitize($_GET['user_name']);
			$Password=sanitize($_GET['pw']);

			if(empty($UserName)=== false)
			{
				echo "Please, enter username";
			}

			if(empty($Password) === false)
			{
				echo "Please, enter password to continue";
			}
		}
		if (empty($UserName) === false and empty($Password) === false) 
		{
			
		}
		
		function sanitize($information)
		{
			$information=htmlspecialchars($information);
			$information=trim($information);
			$information=stripcslashes($information);
			return $information;
		}
?>
			<table align="center">
				<tr>
					<td>
					<h2>Login</h2>
					<form action="Login.php" novalidate method="get">
					<fieldset>
						<legend align="center">Login</legend>
						<label align="center">User Name: </label>$UserName<br>
						<label align="center">Password: </label>$Password<br>
					</fieldset>
					</form>
						<a href="Register.html">Click here to Register</a>
					</td>
				</tr>
			</table>

</body>
</html>