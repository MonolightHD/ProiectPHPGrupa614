<?php
 include 'connect.php';
 if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `lentile` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:lentile.php');
    }else{
        die(mysqli_error($con));
    }
 }

?>