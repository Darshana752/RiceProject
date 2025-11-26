<?php
include 'connection.php';
?>
<?php


if (isset($_POST['submit'])){

    

$farmerid = mysqli_real_escape_string($connection,$_POST['farmerid']);
$stockid = mysqli_real_escape_string($connection,$_POST['stockid']);
$millid = mysqli_real_escape_string($connection,$_POST['millid']);
$Did = mysqli_real_escape_string($connection,$_POST['Did']);

$Dos=mysqli_real_escape_string($connection,$_POST['Dos']);

$stock="SELECT quantity FROM paddystock WHERE stockid=$stockid";
$stock_result = mysqli_query($connection, $stock);
 
if ($stock_result && mysqli_num_rows($stock_result) > 0) {
        $stock_row = mysqli_fetch_assoc($stock_result);
        $quantity = $stock_row['quantity']; 

if(!empty($millid)){

   $query1="UPDATE milldetails SET currentstock=$quantity WHERE millid=$millid ";

   $result1=mysqli_query($connection,$query1);

   if($result1){
    echo "success to enter details.mill owners";
   }else{
    echo "unsuccess to enter your details.cntac mill owners";
   }


}else{

  $query2="UPDATE gdepartmentdetails SET currentstock=$quantity WHERE deid=$Did ";

  $result2=mysqli_query($connection,$query2);

  if($result2){
   echo "success to enter your details.contac with government department";
  }else{
   echo "unsuccess enter your details.contac with government department";
  }



}



  }else{
    echo "unsucess";
  }

}






?>


<?php mysqli_close($connection);?>