<?php
include 'connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oftalmologi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	
</head>
<body>
<div class="container">
<a href="home.php"><i class="fas fa-home"></i>Home</a>
<button class="btn btn-primary my-5"><a href="addoftalmologi.php" 
class="text-light">Adauga Oftalmologi</a>

</button>
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nume</th>
      <th scope="col">Adresa</th>
      <th scope="col">Telefon</th>
      <th scope="col">Program</th>
    </tr>
  </thead>
  <tbody>

  <?php

$sql="select * from `oftalmologi` ";
$result=mysqli_query($con,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $nume=$row['nume'];
    $adresa=$row['adresa'];
    $telefon=$row['telefon'];
    $program=$row['program'];
    echo ' <tr>
    <th scope="row">'.$id.'</th>
    <td>'.$nume.'</td>
    <td>'.$adresa.'</td>
    <td>'.$telefon.'</td>
    <td>'.$program.'</td>

    <td>
    <button class="btn btn-primary"><a href="updateoftalmologi.php?updateid='.$id.' "class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="deleteoftalmologi.php?deleteid='.$id.' "class="text-light">Delete</a></button>
   </td>
 </tr>';
  }
}

?>



  </tbody>
</table> 

</div>
    
</body>
</html>

