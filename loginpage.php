<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body class="form">
	<h1 align="center" color="cyan"> login page</h1>
	<form action="login.php" method="POST">
		<table id="table1" border="1" align="center" >
			<tr><td>username</td>
				<td><input type="text" name="lo"></td></tr>
				<tr><td>password</td>
					<td><input type="text" name="psw" required="required"></td></tr>
					<tr align="center">
						<td colspan="2"><input type="submit" value="login" name="su">
							<input type="button" value="signup"></td>
					</tr>
		</table>
		
	</form>

</body>
</html>