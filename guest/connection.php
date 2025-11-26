<?php
//$connection = mysqli_connect(dbserver,dbuser,dbpass,dbanme);

 $connection =new mysqli('localhost','root','','riceproject');

 //mysql_connect();mysqli_connect_error();
 //checking the connection 

 if (mysqli_connect_error()){
  die('database connection failed'.mysqli_connect_error());
 }else{
   echo "";
 }


  

?>