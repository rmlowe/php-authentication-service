<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Sign in</title>
</head>
<body>
	<h1>Sign in</h1>
	<p>You can sign in using one of the accounts below.</p>
	<table style="border: 1px solid;">
		<tr>
			<th>User ID</th>
			<th>Password</th>
		</tr>
		<tr>
			<td>joestudent</td>
			<td>topsecret</td>
		</tr>
		<tr>
			<td>marylearner</td>
			<td>try2guess</td>
		</tr>
	</table>
	<form action="login-handler.php" method="POST">
		<input name="salt" type="hidden" value="<?php $salt ?>">
		<p>
			<label>Username: <input name="username" type="text"> </label>
		</p>
		<p>
			<label>Password: <input name="password" type="password"> </label>
		</p>
		<?php
		if ($error) {
			?>
		<p style="color: red;">The user ID or password you entered is
			incorrect.</p>
			<?php
		}
		?>
		<p>
			<input type="submit" value="Sign in">
		</p>
	</form>
</body>
</html>