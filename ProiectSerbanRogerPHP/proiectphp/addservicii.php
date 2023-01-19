<?php
include 'connect.php';

if(isset($_POST['submit']))
{
    $denumire=$_POST['denumire'];
    $pret=$_POST['pret'];

  $sql ="insert into `servicii`(denumire, pret) 
  values ('$denumire','$pret')";
  $result=mysqli_query($con,$sql);
  if($result){
  header('location:servicii.php');
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

  <title>Add sevicii</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Denumire</label>
        <input type="text" class="form-control" 
        placeholder="Introdu denumire" name="denumire" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Pret(RON)</label>
        <input type="number" class="form-control" 
        placeholder="Introdu pretul" 
        name="pret" autocomplete="off">
      </div>
      

      <button type="submit" 
      class="btn btn-primary" name="submit">Adauga</button>

      
      
    </form>
  </div>

</html>