<?php
include 'connection.php';
?>

<?php

if (isset($_POST['submit'])){
  
  $stockid=mysqli_real_escape_string($connection,$_POST['Stock Id']);
  $millid=mysqli_real_escape_string($connection,$_POST['Mill Id']);
  $departmentid=mysqli_real_escape_string($connection,$_POST['Department Id']);
  $dos=mysqli_real_escape_string($connection,$_POST['DoS']);

  $query="INSERT INTO paddystock (farmerid,stockid,millid,departmentid,dateofselling)VALUES('{$farmerid}','{$stockid}','{$millid}','{$departmentid}','{$dos}')";

  $result = mysqli_query($connection,$query);

  if($result){
    header('location:successmessage.html');
  }else{
    header('location:notsuccess.html');
  }




}






?>
<?php mysqli_close($connection);?>

