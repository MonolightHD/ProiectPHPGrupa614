<?php
include 'connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lentile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	
</head>
<body>
<div class="container">
<a href="home.php"><i class="fas fa-home"></i>Home</a>
<button class="btn btn-primary my-5"><a href="addlentile.php" 
class="text-light">Adauga lentile</a>

</button>
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Denumire</th>
      <th scope="col">Producator</th>
      <th scope="col">Pret(RON)</th>
    </tr>
  </thead>
  <tbody>

  <?php

$sql="select * from `lentile` ";
$result=mysqli_query($con,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $denumire=$row['denumire'];
    $producator=$row['producator'];
    $pret=$row['pret'];

    echo ' <tr>
    <th scope="row">'.$id.'</th>
    <td>'.$denumire.'</td>
    <td>'.$producator.'</td>
    <td>'.$pret.'</td>

    <td>
    <button class="btn btn-primary"><a href="updatelentile.php?updateid='.$id.' "class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="deletelentile.php?deleteid='.$id.' "class="text-light">Delete</a></button>
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
