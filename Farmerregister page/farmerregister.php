<?php
include 'connection.php';
?>

<?php

if (isset($_POST['submit'])){
  

  $fullname=mysqli_real_escape_string($connection,$_POST['fullname']);
  $nicno   =mysqli_real_escape_string($connection,$_POST['nicno']);
  $district=mysqli_real_escape_string($connection,$_POST['district']);
  $addrss=mysqli_real_escape_string($connection,$_POST['addrss']);
  $pno=mysqli_real_escape_string($connection,$_POST['pno']);
  $email=mysqli_real_escape_string($connection,$_POST['email']);
  $username=mysqli_real_escape_string($connection,$_POST['username']);
  $password=mysqli_real_escape_string($connection,$_POST['password']);
  $hashed_password=sha1($password);


  $query="INSERT INTO farmerdetails (fullname,nicno,district,addrss,phonno,email,username,password)VALUES('{$fullname}','{$nicno}','{$district}','{$addrss}','{$pno}','{$email}','{$username}','{$password}')";

  $result = mysqli_query($connection,$query);

  if($result){
    header('location:successmessage.php');
  }else{
    header('location:notsuccess.html');
  }




}






?>
<?php mysqli_close($connection);?>

