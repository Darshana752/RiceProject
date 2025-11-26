<?php
include 'connection.php';
?>

<?php

if (isset($_POST['submit'])){
  

  $oname=mysqli_real_escape_string($connection,$_POST['oname']);
  $country   =mysqli_real_escape_string($connection,$_POST['country']);
  
  $username=mysqli_real_escape_string($connection,$_POST['username']);
  $password=mysqli_real_escape_string($connection,$_POST['password']);
  $hashed_password=sha1($password);


  $query="INSERT INTO iorganization (oname,country,username,password)VALUES('{$oname}','{$country}','{$username}','{$password}')";

  $result = mysqli_query($connection,$query);

  if($result){
    header('location:successmessage.php');
  }else{
    header('location:notsuccess.html');
  }




}






?>
<?php mysqli_close($connection);?>

