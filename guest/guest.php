<?php
include 'connection.php';
?>

<?php
$sql = "SELECT currentstock FROM ricestock ORDER BY stockid DESC LIMIT 1";
$result = $connection->query($sql); $lastValue = 0; if ($result && $row =
$result->fetch_assoc()) { $lastValue = $row['currentstock']; } ?>

<?php
$sql = "SELECT currentstock FROM paddystock ORDER BY stockid DESC LIMIT 1";
$result = $connection->query($sql); $lastValu = 0; if ($result && $row =
$result->fetch_assoc()) { $lastValu = $row['currentstock']; } ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <style>
      .mm1 {
        background-color: rgb(186, 186, 211);
        width: 500px;
        height: 300px;
        position: relative;
        left: 160px;
        top: 50px;
      }
      .mm2 {
        background-color: rgb(186, 186, 211);
        width: 500px;
        height: 300px;
        position: absolute;
        right: 160px;
        top: 220px;
        float: right;
        padding-top:0px
      }
      .mm3 {
        background-color: rgb(186, 186, 211);
        width: 500px;
        height: 400px;
        position: relative;
        right: 500px;
        top: 150px;
        float: right;
      }
      body {
        background-image: url("hh1.jpg");
        background-repeat: no-repeat;
        background-size: 2000px auto; /* Width = 500px, height adjusts automatically */
        background-position: center;
      }
    </style>
  </head>
  <body style="background-image: url('hh1.jpg')">
    <div
      style="
        background-color: rgb(0, 255, 115);
        text-align: center;
        height: 50px;
        font-size: 40px;
      "
    >
      <b>WELCOME</b> </div>

     <a href="../first page/OpeningPage.html" ><button style="background-color:rgb(255, 0, 0);color:rgb(221, 218, 235);border: none;height: 30px;width: 60px;margin-top: 5px;border-radius: 5px;"><b>Back</b></button></a>
     <p id="date" style="text-align:center;font-size:20px"><b></b></p>

      <div class="mm1">
        <h1 style="text-align: center;padding-top:25px;font-size:60px">TOTAL PADDY COUNT</h1>
        <p style="text-align: center; color: blue; font-size: 400%">
          <strong><?php echo number_format($lastValu, 2); ?>kg</strong>
  
        </div>
        <div class="mm2">
  
        <h1 style="text-align: center;padding-top:25px;font-size:60px;padding-top:0px">TOTAL RICE COUNT</h1>
        <p style="text-align: center; color: blue; font-size: 350%;padding-top:1px">
          <strong><?php echo number_format($lastValue, 2); ?>kg</strong>
        </p>
  
  
        </div>
        <div class="mm3">
  
        <p><b>On average, you can obtain approximately 0.7 kilograms of rice from one kilogram of paddy rice, depending on factors like the rice</b>
        <h1 style="text-align: center;padding-top:25px;font-size:60px">Average rice for future</h1>
        <p style="text-align: center; color: blue; font-size: 350%">
          <strong><?php echo number_format($lastValu*0.7, 2); ?>kg</strong>
        </p>
        </p>
  
  
  
  
        </div>


    

    <script>
      const today = new Date();
      document.getElementById("date").innerHTML = 
        today.toLocaleDateString('en-US', {
          year: 'numeric', month: 'long', day: 'numeric'
        });
    </script>


  </body>
</html>
<?php mysqli_close($connection);?>