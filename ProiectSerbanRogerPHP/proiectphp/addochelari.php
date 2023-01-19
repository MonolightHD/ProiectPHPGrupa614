<?php
include 'connect.php';

if(isset($_POST['submit']))
{
    $marca=$_POST['marca'];
    $model=$_POST['model'];
    $pret=$_POST['pret'];

  $sql ="insert into `ochelari`(marca, model, pret) 
  values ('$marca','$model','$pret')";
  $result=mysqli_query($con,$sql);
  if($result){
  header('location:ochelari.php');
  }else{
    die(mysqli_error($con));
  }



}

?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

  <title>Add Ochelari</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Marca</label>
        <input type="text" class="form-control" 
        placeholder="Introdu marca" name="marca" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Model</label>
        <input type="text" class="form-control" 
        placeholder="Introdu model" 
        name="model" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Pret</label>
        <input type="text" class="form-control" 
        placeholder="Introdu Pret" 
        name="pret" autocomplete="off">

      <button type="submit" 
      class="btn btn-primary" name="submit">Adauga</button>

      
      
    </form>
  </div>

</html>