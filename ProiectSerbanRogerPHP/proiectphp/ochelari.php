<?php
include 'connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ochelari</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	
</head>
<body>
<div class="container">
<a href="home.php"><i class="fas fa-home"></i>Home</a>
<button class="btn btn-primary my-5"><a href="addochelari.php" 
class="text-light">Adauga ochelari</a>

</button>
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Marca</th>
      <th scope="col">Model</th>
      <th scope="col">Pret</th>

    </tr>
  </thead>
  <tbody>

  <?php

$sql="select * from `ochelari` ";
$result=mysqli_query($con,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $marca=$row['marca'];
    $model=$row['model'];
    $pret=$row['pret'];
    echo ' <tr>
    <th scope="row">'.$id.'</th>
    <td>'.$marca.'</td>
    <td>'.$model.'</td>
    <td>'.$pret.'</td>

    <td>
    <button class="btn btn-primary"><a href="updateochelari.php?updateid='.$id.' "class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="deleteochelari.php?deleteid='.$id.' "class="text-light">Delete</a></button>
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
