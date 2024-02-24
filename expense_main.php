<?php
include 'connection.php';
session_start();
$date_current = $_SESSION['date_main'];
// echo $date_current;




$date_formatted = date("Y-m-d", strtotime($date_current));
// echo $date_formatted;
// Check if form is submitted
if(isset($_POST['data_enter'])) {
  $item = $_POST['item'];
  $cost = $_POST['cost'];
  $ins = "INSERT INTO `expense` (`sno`, `item`, `cost`, `date`) VALUES (NULL, '$item', '$cost', '$date_current')";
  if(mysqli_query($conn, $ins)) {
    // Redirect the user to a different page after successful form submission
    header("Location: expense_main.php");
    exit();
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Expense</title>
    <link rel="stylesheet" href="./CSS/float.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .form-label{
        font-size: 18px;
        font-weight: bold;
      }
      .form-inp{
        background-color: rgba(255, 255, 255, 0.491);

      }
    </style>
    <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>
    <div>
      <img src="./images/logo.png" class="bg-logo" />
    </div>

    <div class="nav flex justify-between mx-2 mb-4">
      <a href="expense.php">
        <button
          class="back-btn border-2 p-2 rounded-2xl text-xl font-semibold mt-2 bg-orange-400 text-white"
        >
          Back
        </button></a
      >

      <span class="expense-head-div self-center text-2xl font-bold">
        <?php echo $date_current  ?>
      </span>

      <a href="logout.php">
        <input
          type="submit"
          value="Logout"
          class="log-out-btn border-2 p-2 rounded-2xl text-xl font-semibold mt-2 bg-[#138808] text-white"
      /></a>
      <!--form-->
      <div class="container mt-3">
      <form action="" method="POST">
        <!-- <input type="hidden" name="date" value="<?php echo $date_formatted; ?>"> -->
  <div class="mb-3">
    <label for="item" class="form-label">Item:</label>
    <!-- <input type="text" class="form-inp ml-3" id="item" name="item" required> -->
    <input type="text" class="form-inp ml-3" id="item" name="item" required>
    
  </div>
  <div class="mb-3">
    <label for="cost" class="form-label">Cost:</label>
    <input type="number" class="form-inp ml-3" id="cost" name="cost" required>
  </div>
  
  <button type="submit" class="btn btn-primary" name="data_enter">Submit</button>
</form>
</div>


<div class="container">
  <?php
//insertion
// if(isset($_POST['data_enter'])){
//   $item = $_POST['item'];
//   $cost = $_POST['cost'];
//   $ins = "INSERT INTO `expense` (`item`, `cost`) VALUES ('$item', '$cost')";
//   if(mysqli_query($conn,$ins)){
//     // echo "inserted";
//     $insert = true;
//   }
//   else{
//     echo "error";
//   }
// }



//display
$sql = "SELECT * FROM expense WHERE date = '$date_formatted'";
$result = $conn -> query($sql);
?>
<table id="myTable" class="display">
  <thead>
    <tr>
      <th scope="col">S no.</th>
      <th scope="col">Item</th>
      <th scope="col">Cost</th>
      <!-- <th scope="col">Edit</th> -->
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

</div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/jquery-3.7.1.slim.js"
      integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc="
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="//cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css"
    />

    <script src="//cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.7.1.slim.js"
      integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc="
      crossorigin="anonymous"
    ></script>
    <script>
      let table = new DataTable("#myTable");
    </script>
  </body>
</html>
