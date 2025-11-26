<?php
include 'connection.php';?>

<?php

if(isset($_POST['submit'])){
   $errors=array();

   if(!isset($_POST['username'])||strlen(trim($_POST['username']))<1){
    $errors[]='username is missing';
   }
   if(!isset($_POST['password'])||strlen(trim($_POST['password']))<1){
    $errors[]='password is missing';
   }

   if(empty($errors)){
      
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);
    $hashed_password=sha1($password);

    $query="SELECT * FROM milldetails WHERE username = '{$username}' AND password = '{$password}' LIMIT 1";

    $result=mysqli_query($connection,$query);
      if($result){
  
         if(mysqli_num_rows($result)==1){
          header('location:Millafterlogin.php');
          //exit();
         }else{
            echo "unsuccess";
           
      }
    }else{
      // $errors[]='database query failed';
       echo "username or passwor is invalid";
    }
  
   }
}


?>


<?php mysqli_close($connection);?>