<?php
include 'connection.php';
?>

<?php

if (isset($_POST['submit'])){
  

  $type=mysqli_real_escape_string($connection,$_POST['type']);
  $Rno  =mysqli_real_escape_string($connection,$_POST['Rno']);
  $vname=mysqli_real_escape_string($connection,$_POST['vname']);
  $district=mysqli_real_escape_string($connection,$_POST['district']);
  $phonno=mysqli_real_escape_string($connection,$_POST['phonno']);
  $email=mysqli_real_escape_string($connection,$_POST['email']);
  $username=mysqli_real_escape_string($connection,$_POST['username']);
  $password=mysqli_real_escape_string($connection,$_POST['password']);
  $hashed_password=sha1($password);


  $query="INSERT INTO vendorsdetails (type,Rno,vname,district,phonno,email,username,password)VALUES('{$type}','{$Rno}','{$vname}','{$district}','{$phonno}','{$email}','{$username}','{$password}')";

  $result = mysqli_query($connection,$query);

  if($result){
    header('location:successmessage.php');
  }else{
    header('location:notsuccess.html');
  }




}






?>
<?php mysqli_close($connection);?>

