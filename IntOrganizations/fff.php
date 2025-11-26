<?php  include 'connection.php';  ?>
<?php
    
    $query="SELECT vid FROM iorganization";

    $result=mysqli_query($connection,$query);

    if($row=mysqli_fetch_assoc($result)){
      echo $row['oid'];
    }



?>
<?php mysqli_close($connection);?>