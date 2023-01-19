<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'oftalmologie';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $con->prepare('SELECT parola, email FROM users WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($parola, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profil</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		
			<div>
				<h1>Oftalmologie</h1>
				<a href="home.php"><i class="fas fa-home"></i>Home</a>
				<a href="profil.php"><i class="fas fa-user-circle"></i>Profil</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profil</h2>
			<div>
				<p>Contul tau:</p>
				<table>
					<tr>
					 <td>Username:</td>
					 <td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
					 <td>Email:</td>
					 <td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>
