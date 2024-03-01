<?php
include 'connection.php';
include 'getmonth.php';

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
<!-- function getTotalExpenseForMonth($conn, $user_calender, $month) {
    // Construct the SQL query to fetch the total sum of expenses for the specified month
    $sql = "SELECT SUM(cost) AS total_sum 
            FROM expense 
            WHERE MONTH(date) = $month AND user = '$user_calender'";
    
    // Execute the query
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        // Fetch the result
        $row = mysqli_fetch_assoc($result);
        
        // Total sum of the column
        $total_sum = $row['total_sum'];
        
        // Return the total sum
        return $total_sum;
    } else {
        // If the query fails, handle the error
        echo "Error: " . mysqli_error($conn);
        return false;
    }
} -->

<!-- $january_total = getTotalExpenseForMonth($conn, $user_calender, 1); // January
$february_total = getTotalExpenseForMonth($conn, $user_calender, 2);// February
$march_total = getTotalExpenseForMonth($conn, $user_calender, 3); //march
$april_total = getTotalExpenseForMonth($conn, $user_calender, 4); //april -->