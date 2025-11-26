<?php  include 'connection.php';  ?>
<?php
    
    $query="SELECT F_id FROM farmerdetails ORDER BY F_id DESC LIMIT 1";

    $result=mysqli_query($connection,$query);

    //if($row=mysqli_fetch_assoc($result)){
     // echo $row['oid'];
   // }



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>success</title>
    <style>
      .center-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #dcdada;
        padding: 20px;
        border-radius: 8px;
      }
      .btn1 {
        background-color: rgb(255, 0, 149);
        color: aliceblue;
        height: 30px;
        border: none;
      }
      .btn1:hover {
        background-color: rgb(255, 123, 0);
      }
    </style>
  </head>
  <body>
    <div class="center-box">
      <h1>YOUR DATA SUCCESSFULLY ADDED.</h1>
      <p>your id number is:</p>
      <?php
        // Loop through the data
       while($row = mysqli_fetch_assoc($result)) {
            echo "<li>" . $row['F_id'] . "</li>";
        }
        ?>
      <a href="register.html"><button class="btn1">BACK</button></a>
    </div>
  </body>
</html>
<?php mysqli_close($connection);?>
