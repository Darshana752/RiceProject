<?php
include 'connection.php';
?>

<?php

if (isset($_POST['submit'])){
  

  $millname=mysqli_real_escape_string($connection,$_POST['millname']);
  $district   =mysqli_real_escape_string($connection,$_POST['district']);
  $phonno=mysqli_real_escape_string($connection,$_POST['phonno']);
  $email=mysqli_real_escape_string($connection,$_POST['email']);
  $username=mysqli_real_escape_string($connection,$_POST['username']);
  $password=mysqli_real_escape_string($connection,$_POST['password']);
  
  $hashed_password=sha1($password);


  $query="INSERT INTO milldetails (millname,phonno,district,email,username,password,currentstock)VALUES('{$millname}','{$phonno}','{$district}','{$email}','{$username}','{$password}',0)";

  $result = mysqli_query($connection,$query);

  if($result){
    header('location:successmessage.php');
  }else{
    header('location:notsuccess.html');
  }




}






?>
<?php mysqli_close($connection);?>