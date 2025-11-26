<?php
include 'connection.php';
?>

<?php

if (isset($_POST['submit'])){
  
  $farmerid=mysqli_real_escape_string($connection,$_POST['FarmerId']);
  $quantity=mysqli_real_escape_string($connection,$_POST['Quantity']);
  $doh=mysqli_real_escape_string($connection,$_POST['DoH']);
  $term=mysqli_real_escape_string($connection,$_POST['Term']);
   

  //$query1="INSERT INTO paddystock (quantity,currentstock,dateharvest,Term,farmerid,millid,did,dateofsell)VALUES('{$quantity}',0,'{$doh}','{$term}','{$farmerid}',0,0,0)";
  //$result = mysqli_query($connection,$query1);
 
  
 

 // if($result){
    
   // $new_id = mysqli_insert_id($connection);
    
   //$sou_id=1;
   //find query
  // $find_sql = "SELECT quantity FROM paddystock WHERE stockid = $sou_id";
   // $result2 = mysqli_query($connection, $find_sql);
   $sql = "SELECT currentstock FROM paddystock ORDER BY stockid DESC LIMIT 1";
    $result4 = mysqli_query($connection, $sql);



    if ($result4 && mysqli_num_rows($result4) > 0) {
      $row = mysqli_fetch_assoc($result4);
      $source_amount = intval($row['currentstock']);

      // Step 3: Add input amount to it
      $updated_total = $source_amount + $quantity;

    }else{
        $updated_total=$quantity;
      }

      // Step 4: Update the source row
      //$update_source = "UPDATE paddystock SET quantity = $updated_total WHERE stockid = $sou_id";
     //mysqli_query($connection, $update_source);

      // Step 5: Update the new inserted row's updated_amount column
      //$update_new = "UPDATE paddystock SET currentstock = $updated_total WHERE stockid = $new_id";
      //mysqli_query($connection, $update_new);

      $query3= "INSERT INTO paddystock (quantity, currentstock) VALUES ($quantity, $updated_total)";
      $result3 = mysqli_query($connection,$query3);
      if($result3){
        header('location:successmessageharvest.php');
      }else{
        echo "wrong";
      }

      
 // } else {
   //   echo "Source record not found.";
 // }




   



    //}



}



?>
<?php mysqli_close($connection);?>

