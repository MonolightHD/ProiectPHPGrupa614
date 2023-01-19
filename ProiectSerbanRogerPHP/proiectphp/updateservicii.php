<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql="Select * from `servicii` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$denumire=$row['denumire'];
$pret=$row['pret'];

if(isset($_POST['submit']))
{
  $denumire=$_POST['denumire'];
  $pret=$_POST['pret'];


  $sql ="update `servicii` set id='$id', denumire='$denumire', pret='$pret' where id=$id";
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

  <title>CRUD</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Denumire</label>
        <input type="text" class="form-control" 
        placeholder="Introdu denumire" 
        name="denumire" autocomplete="off" value=<?php echo $denumire; ?>>
      </div>
      <div class="form-group">
        <label>Pret</label>
        <input type="number" class="form-control" 
        placeholder="Introdu pretul" 
        name="pret" autocomplete="off" value=<?php echo $pret; ?>>
      </div>
    
      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
  </div>

</html>