<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color:powderblue;">
<style>
h1 {text-align: center;}
label {text-align: center;}
</style>
	<div class="login">
		<h1>Login Page</h1>
		<form action="autdb.php" method="post">
			<label for="username">
				<i class="fas fa-user"></i>
			</label>
			<input type="text" name="username" placeholder="Username" id="username" required>
			<label for="password">
				<i class="fas fa-lock"></i>
			</label>
			<input type="password" name="parola" placeholder="Password" id="parola" required>
			<input type="submit" value="Login">
		</form>
	</div>
	</style>
</body>

</html>