<?php
include 'connection.php';
include 'getmonth.php';
$user_profile = $_SESSION['username'];
    // $user_register = $_SESSION['fname'];
    if ($user_profile) {
    } else {
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calender</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="calender.css">
    <link rel="stylesheet" href="./CSS/float.css" />
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
  </head>
  <body>
    <div class="calender-container">
      <div>
        <img src="./images/logo.png" class="bg-logo" />
      </div>

      <div class="nav flex justify-between mx-2 mb-7">
        <a href="dashboard.php">
          <button
            class="back-btn border-2 p-2 rounded-2xl text-xl font-semibold mt-2 bg-orange-400 text-white"
          >
            Back
          </button></a
        >

        <span class="cal-head-div self-center text-2xl font-bold">
          Calender
        </span>

        <a href="logout.php">
          <input
            type="submit"
            value="Logout"
            class="log-out-btn border-2 p-2 rounded-2xl text-xl font-semibold mt-2 bg-[#138808] text-white"
        /></a>
      </div>

      <div
        class="dates grid grid-rows-2 grid-cols-2 gap-x-5 gap-y-5 text-center px-7 h-auto"
      >
        <div class="month jan">
          <div class="month-text">Jan</div>
          <div class="expense"><?php echo $jan ?></div>
        </div>

        <div class="month feb">
          <div class="month-text">Feb</div>
          <div class="expense"><?php echo $feb ?></div>
        </div>

        <div class="month mar">
          <div class="month-text">Mar</div>
          <div class="expense"><?php echo $mar ?></div>
        </div>

        <div class="month apr">
          <div class="month-text">Apr</div>
          <div class="expense"><?php echo $apr ?></div>
        </div>

        <div class="month may">
          <div class="month-text">May</div>
          <div class="expense"><?php echo $may ?></div>
        </div>

        <div class="month mar">
          <div class="month-text">Jun</div>
          <div class="expense"><?php echo $jun ?></div>
        </div>

        <div class="month mar">
          <div class="month-text">JUL</div>
          <div class="expense"><?php echo $jul ?></div>
        </div>

        <div class="month mar">
          <div class="month-text">Aug</div>
          <div class="expense"><?php echo $aug ?></div>
        </div>

        <div class="month mar">
          <div class="month-text">Sept</div>
          <div class="expense"><?php echo $sep ?></div>
        </div>

        <div class="month mar">
          <div class="month-text">Oct</div>
          <div class="expense"><?php echo $oct ?></div>
        </div>

        <div class="month mar">
          <div class="month-text">Nov</div>
          <div class="expense"><?php echo $nov ?></div>
        </div>

        <div class="month mar">
          <div class="month-text">Dec</div>
          <div class="expense"><?php echo $dec ?></div>
        </div>
      </div>
      <!--dates-->
    </div>
    <!--calender-container-->
  </body>
</html>
