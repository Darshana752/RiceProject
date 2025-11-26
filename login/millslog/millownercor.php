<?php
include 'connection.php';
?>

<?php

if (isset($_POST['submit'])){
  
  $millownerid=mysqli_real_escape_string($connection,$_POST['millid']);
  $stockid=mysqli_real_escape_string($connection,$_POST['sid']);
  $doc=mysqli_real_escape_string($connection,$_POST['DoC']);
  $quantity=mysqli_real_escape_string($connection,$_POST['Riq']);

  $delete_sql = "DELETE FROM paddystock WHERE stockid = $stockid";
  $delete_result = mysqli_query($connection, $delete_sql);


  if ($delete_result) {
    // Step 2: Recalculate the total quantity
    $sum_sql = "SELECT SUM(quantity) AS total_quantity FROM paddystock";
    $sum_result = mysqli_query($connection, $sum_sql);
    $sum_row = mysqli_fetch_assoc($sum_result);
    $new_total = $sum_row['total_quantity'] ?? 0;

    // Step 3: Update currentstock in ALL rows (optional: or just the latest one)
    $update_sql = "UPDATE paddystock SET currentstock = $new_total";
    $update_result = mysqli_query($connection, $update_sql);

    if ($update_result) {
        echo "paddy currentstock updated to $new_total.";
    } else {
        echo "Error updating currentstock: " . mysqli_error($connection);
    }
} else {
    echo "Error deleting row: " . mysqli_error($connection);
}

$sql = "SELECT currentstock FROM ricestock ORDER BY stockid DESC LIMIT 1";
$result4 = mysqli_query($connection, $sql);


if ($result4 && mysqli_num_rows($result4) > 0) {
  $row = mysqli_fetch_assoc($result4);
  $source_amount = intval($row['currentstock']);

  // Step 3: Add input amount to it
  $updated_total = $source_amount + $quantity;

}else{
    $updated_total=$quantity;
  }

  $query3= "INSERT INTO ricestock (quantity, currentstock,millid,dateofprocess) VALUES ($quantity, $updated_total, $millownerid, $doc)";
  $result3 = mysqli_query($connection,$query3);
  if($result3){
    //header('location:successmessageharvest.php');
    echo "and  success to add the rice quantity";
  }else{
    echo "wrong";
  }






}






?>
<?php mysqli_close($connection);?>

