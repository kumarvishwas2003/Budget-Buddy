<?php
include 'connection.php';
include 'getmonth.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Report</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./CSS/float.css" />
    <link rel="stylesheet" href="calender.css" />
    <style>
      /* Style month sections */
.month {
  display: flex;
  flex-direction: column;
  gap: 5px; /* Adjust the gap value as needed */
  height: 120px;
}

.month-text {
  border-top-right-radius: 18px;
  border-top-left-radius: 18px;
  border: 1px solid white;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 80%;
  background-color: rgba(255, 255, 255, 0.336);
  font-size: 40px;
  font-weight: bold;
}

.expense {
  background-color: rgba(220, 117, 117, 0.336);
  border: 1px solid white;
  border-bottom-right-radius: 18px;
  border-bottom-left-radius: 18px;
}

    </style>
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

        <div class="middle flex flex-col">
      <span class="expense-head-div self-center text-xl font-bold">
        Report
      </span>
      <span class="self-center text-sm font-bold">
        Click to Download
      </span> 
      </div> 

        <a href="logout.php">
          <input
            type="submit"
            value="Logout"
            class="log-out-btn border-2 p-2 rounded-2xl text-xl font-semibold mt-2 bg-[#138808] text-white"
        /></a>
      </div>

<!-- //calender -->
<div class="dates grid grid-rows-2 grid-cols-2 gap-x-5 gap-y-5 text-center px-7 h-auto">
    <div class="month jan">
        <form action="summary.php" method="post">
            <input type="hidden" name="month" value="01">
            <button type="submit" class="month-button" value="01">Jan</button>
        </form>
        <div class="expense"><?php echo $jan ?></div>
    </div>

    <div class="month feb">
        <form id="febForm" action="summary.php" method="post">
            <input type="hidden" name="month" value="02">
            <button type="submit" class="month-button" value="02">Feb</button>
        </form>
        <div class="expense"><?php echo $feb ?></div>
    </div>

    <div class="month mar">
        <form id="marForm" action="summary.php" method="post">
            <input type="hidden" name="month" value="03">
            <button type="submit" class="month-button">Mar</button>
        </form>
        <div class="expense"><?php echo $mar ?></div>
    </div>

    <div class="month apr">
        <form id="aprForm" action="summary.php" method="post">
            <input type="hidden" name="month" value="04">
            <button type="submit" class="month-button">Apr</button>
        </form>
        <div class="expense"><?php echo $apr ?></div>
    </div>

    <div class="month may">
        <form id="mayForm" action="summary.php" method="post">
            <input type="hidden" name="month" value="05">
            <button type="submit" class="month-button">May</button>
        </form>
        <div class="expense"><?php echo $may ?></div>
    </div>

    <div class="month jun">
        <form id="junForm" action="summary.php" method="post">
            <input type="hidden" name="month" value="06">
            <button type="submit" class="month-button">Jun</button>
        </form>
        <div class="expense"><?php echo $jun ?></div>
    </div>

    <div class="month jul">
        <form id="julForm" action="summary.php" method="post">
            <input type="hidden" name="month" value="07">
            <button type="submit" class="month-button">Jul</button>
        </form>
        <div class="expense"><?php echo $jul ?></div>
    </div>

    <div class="month aug">
        <form id="augForm" action="summary.php" method="post">
            <input type="hidden" name="month" value="08">
            <button type="submit" class="month-button">Aug</button>
        </form>
        <div class="expense"><?php echo $aug ?></div>
    </div>

    <div class="month sep">
        <form id="sepForm" action="summary.php" method="post">
            <input type="hidden" name="month" value="09">
            <button type="submit" class="month-button">Sep</button>
        </form>
        <div class="expense"><?php echo $sep ?></div>
    </div>

    <div class="month oct">
        <form id="octForm" action="summary.php" method="post">
            <input type="hidden" name="month" value="10">
            <button type="submit" class="month-button">Oct</button>
        </form>
        <div class="expense"><?php echo $oct ?></div>
    </div>

    <div class="month nov">
        <form id="novForm" action="summary.php" method="post">
            <input type="hidden" name="month" value="11">
            <button type="submit" class="month-button">Nov</button>
        </form>
        <div class="expense"><?php echo $nov ?></div>
    </div>

    <div class="month dec">
        <form id="decForm" action="summary.php" method="post">
            <input type="hidden" name="month" value="12">
            <button type="submit" class="month-button">Dec</button>
        </form>
        <div class="expense"><?php echo $dec ?></div>
    </div>
</div>

      

      <!--dates-->
  
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