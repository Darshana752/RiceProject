<?php
include 'connection.php';
?>

<?php

if (isset($_POST['submit'])){
  
  $organizationid=mysqli_real_escape_string($connection,$_POST['oid']);
  $stockid=mysqli_real_escape_string($connection,$_POST['sid']);
  $doe=mysqli_real_escape_string($connection,$_POST['DoE']);
  $ricequantity=mysqli_real_escape_string($connection,$_POST['quantity']);

  $delete = "DELETE FROM ricestock WHERE stockid = $stockid";
  
  
  $delete_result = mysqli_query($connection, $delete);



  if ($delete_result) {
   // Step 2: Recalculate the total quantity
   $sum_sql = "SELECT SUM(quantity) AS total_quantity FROM ricestock";
   $sum_result = mysqli_query($connection, $sum_sql);
   $sum_row = mysqli_fetch_assoc($sum_result);
   $new_total = $sum_row['total_quantity'] ?? 0;

   // Step 3: Update currentstock in ALL rows (optional: or just the latest one)
   $update_sql = "UPDATE ricestock SET currentstock = $new_total";
   $update_result = mysqli_query($connection, $update_sql);

   if ($update_result) {
       echo "rice currentstock updated to $new_total.";
   } else {
       echo "Error updating currentstock: " . mysqli_error($connection);
   }


  }
   else {
    echo "Error deleting row: " . mysqli_error($connection);
    }


}











?>
<?php mysqli_close($connection);?>

