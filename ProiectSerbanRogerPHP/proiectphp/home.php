<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}

?>

<!DOCTYPE html>
<html>
<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	</head>
	<body class="loggedin" style="background-color:powderblue;" >
		
			<div>
				<h1>Oftalmologia Roger</h1>
				<a href="home.php"><i class="fas fa-home"></i>Home</a>
				<a href="oftalmologi.php"></i>Oftalmologi</a>
				<a href="servicii.php"></i>Servicii</a>
				<a href="ochelari.php"><i class="fa-solid fa-glasses"></i>Ochelari</a>
				<a href="lentile.php"><i class="fas fa-circle"></i>Lentile</a>
				<a href="profil.php"><i class="fa-solid fa-user"></i>Profil</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<p>Bine ai venit, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>