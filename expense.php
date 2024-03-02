<?php
include 'connection.php';
session_start();
$user_profile = $_SESSION['username'];
    // $user_register = $_SESSION['fname'];
    if ($user_profile) {
    } else {
        header('location:login.php');
    }

if(isset($_POST['date_ok'])) {
    $date_main = $_POST['date_main'];
    $_SESSION['date_main'] = $date_main;
    header("location:expense_main.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Expense</title>
    <link rel="stylesheet" href="./CSS/float.css" />
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .date {
        background-color: rgba(255, 255, 255, 0.491);
        font-size: 20px;
        font-weight: bold;
      }
      .OK {
        background-color: rgba(255, 255, 255, 0.491);
      }
    </style>
  </head>
  <body>
    <div>
      <img src="./images/logo.png" class="bg-logo" />
    </div>

    <div class="nav flex justify-between mx-2 mb-4">
      <a href="dashboard.php">
        <button
          class="back-btn border-2 p-2 rounded-2xl text-xl font-semibold mt-2 bg-orange-400 text-white"
        >
          Back
        </button></a
      >

      <span class="expense-head-div self-center text-2xl font-bold">
        Expense
      </span>

      <a href="logout.php">
        <input
          type="submit"
          value="Logout"
          class="log-out-btn border-2 p-2 rounded-2xl text-xl font-semibold mt-2 bg-[#138808] text-white"
      /></a>
    </div>
    <!--nav-->

    <div
      class="exp-container w-full h-1/2 mt-20 flex flex-col items-center justify-center"
    >
      <div class="date-head -mt-36">
        <p class="text-2xl">Please choose a date</p>
      </div>
      <form action="expense.php" method="post">
        <div class="date-body mt-9">
          <input
            type="date"
            class="date w-full px-10 py-2 rounded-lg"
            name="date_main"
            id="date"
            required
          />
        </div>
        <div class="submit-btn text-end mt-4">
        <input
            type="submit"
            class="border-2 p-2 rounded-2xl text-xl font-semibold mt-2 bg-[#138808] text-white"
            value="OK!"
            name="date_ok"
          />
        </div>
      </form>
    </div>
    <!--exp-container-->
  </body>
</html>
