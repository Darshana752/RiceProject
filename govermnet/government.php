<?php
include 'connection.php';
?>

<?php

if (isset($_POST['submit'])){
  

  $dname=mysqli_real_escape_string($connection,$_POST['dname']);
  $district   =mysqli_real_escape_string($connection,$_POST['district']);
  $phonno=mysqli_real_escape_string($connection,$_POST['phonno']);
  $email=mysqli_real_escape_string($connection,$_POST['email']);
 
  $username=mysqli_real_escape_string($connection,$_POST['username']);
  $password=mysqli_real_escape_string($connection,$_POST['password']);
  $hashed_password=sha1($password);


  $query="INSERT INTO gdepartmentdetails (dname,district,phonno,email,username,password,currentstock)VALUES('{$dname}','{$district}','{$phonno}','{$email}','{$username}','{$password}',0)";

  $result = mysqli_query($connection,$query);

  if($result){
    header('location:successmessage.php');
  }else{
    header('location:notsuccess.html');
  }




}






?>
<?php mysqli_close($connection);?>

