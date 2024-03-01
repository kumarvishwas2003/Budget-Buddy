<?php
include'connection.php';
include 'getmonth.php';
$user_entry = $_SESSION['username'];
$month = $_POST['month'];
// echo $month;
$sql = "SELECT * FROM expense WHERE DATE_FORMAT(date, '%m') = '$month' AND user = '$user_entry'";

$result = $conn -> query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Summary</title>
    <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/float.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .download{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
<div class="summary-container">
    <div>
        <img src="./images/logo.png" class="bg-logo" />
      </div>

      <div class="nav flex justify-between mx-2 mb-3">
        <a href="dashboard.php">
          <button
            class="back-btn border-2 p-2 rounded-2xl text-xl font-semibold mt-2 bg-orange-400 text-white"
          >
            Back
          </button></a
        >
        <!-- <span class="self-center text-sm font-bold">
        <?php echo $jan ?>
      </span> -->

        <div class="middle flex flex-col">
      <span class="expense-head-div self-center text-xl font-bold mt-3">
        Summary
      </span>
      <span>
        
      </span> 
      </div> 

        <a href="logout.php">
          <input
            type="submit"
            value="Logout"
            class="log-out-btn border-2 p-2 rounded-2xl text-xl font-semibold mt-2 bg-[#138808] text-white"
        /></a>
      </div>

      <div class="download text-xl font-bold flex ">
        <a href="generate_pdf.php" class="download-head mb-3">Click to download <i class="fa-solid fa-file-pdf"></i></a>
    </div>
        <!--table-->
    <div class="table-container">

            <table class="table table-bordered tb">
            <thead>
                <tr>
                    <th scope="col">S no.</th>
                    <th scope="col">Item</th>
                    <th scope="col">Cost</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>

                <?php 
if($result -> num_rows > 0){
  $sno = 0;
  while($row = $result->fetch_assoc()){
    $sno += 1;
    echo "
       
    <tr>
      <td scope='col'>" .$sno . "</td>
      <td scope='col'>" . $row['item'] . "</td>
      <td scope='col'>" . $row['cost'] . "</td>
        <td scope='col'>" . $row['date'] . "</td>
    </tr>
    

      ";
  }

}
else{
  echo "Please add record";
}

?>
</tbody>
</table>

</div><!--table container-->

</div><!--summary-container-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>




