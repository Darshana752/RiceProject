<?php
include 'connection.php';
?>

<?php
$sql = "SELECT currentstock FROM ricestock ORDER BY stockid DESC LIMIT 1";
$result = $connection->query($sql); $lastValue = 0; if ($result && $row =
$result->fetch_assoc()) { $lastValue = $row['currentstock']; } ?>

<?php
$sql = "SELECT currentstock FROM paddystock ORDER BY stockid DESC LIMIT 1";
$result = $connection->query($sql);

$lastValu = 0;
if ($result && $row = $result->fetch_assoc()) {
    $lastValu = $row['currentstock'];
}
?>












<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>farmerafterlogin</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
      crossorigin="anonymous"
    />
    <style>
      .nav-tabs {
        background-color: rgb(174, 255, 0);
      }

      .nav-link {
        color: rgb(212, 127, 22);
        width: 200px;
      }
      .nav-link:hover {
        background-color: rgb(43, 226, 92);
      }
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
        top: 200px;
        float: right;
      }
      .mm3 {
        background-color: rgb(186, 186, 211);
        width: 500px;
        height: 350px;
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
      crossorigin="anonymous"
    ></script>
    <div style="text-align: center; color: darkgreen">
      <h1 style="margin-bottom: 0px; background-color: #6ffd6b">Vendor</h1>
    </div>

    <div class="card text-center">
      <div class="card-header" style="background-color: rgb(174, 255, 0)">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a
              class="nav-link active"
              aria-current="true"
              href="#"
              style="background-color: #0dc025; color: blue"
              >Dashboard</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="BuyRice.html">Buy rice</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="vendorcontact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="helpvendor.html">Help</a>
          </li>
        </ul>
      </div>
    </div>

    <p id="date" style="text-align:center;font-size:20px"><b></b></p>


    <div>
      <div class="mm1">
      <h1 style="text-align: center;padding-top:25px;font-size:60px">TOTAL PADDY COUNT</h1>
      <p style="text-align: center; color: blue; font-size: 400%">
        <strong><?php echo number_format($lastValu, 2); ?>kg</strong>

      </div>
      <div class="mm2">

      <h1 style="text-align: center;padding-top:25px;font-size:60px">TOTAL RICE COUNT</h1>
      <p style="text-align: center; color: blue; font-size: 400%">
        <strong><?php echo number_format($lastValue, 2); ?>kg</strong>
      </p>


      </div>
      <div class="mm3">

      <p><b>On average, you can obtain approximately 0.7 kilograms of rice from one kilogram of paddy rice, depending on factors like the rice</b>
      <h1 style="text-align: center;padding-top:25px;font-size:60px">Average rice for future</h1>
      <p style="text-align: center; color: blue; font-size: 400%">
        <strong><?php echo number_format($lastValu*0.7, 2); ?>kg</strong>
      </p>
      </p>




      </div>
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
