 <?php
    include 'connection.php';
        $item =  $_GET['item'];
        $cost = $_GET['cost'];
        $id = $_GET['id'];
        ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>update</title>
    <script src="https://cdn.tailwindcss.com"></script>
<style>
	  .form-label {
        font-size: 18px;
        font-weight: bold;
    }

    .form-inp {
        background-color: rgba(255, 255, 255, 0.491);

    }
	</style>

    <link rel="stylesheet" href="./CSS/float.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
  </head>
  <body>
    <div class="edit-container">
      <div>
        <img src="./images/logo.png" class="bg-logo" />
      </div>

      <div class="nav flex justify-between mx-2 mb-4">
        <a href="expense_main.php">
          <button
            class="back-btn border-2 p-2 rounded-2xl text-xl font-semibold mt-2 bg-orange-400 text-white"
          >
            Back
          </button></a
        >

        <div class="middle flex flex-col">
          <span class="expense-head-div self-center text-xl font-bold mt-4">
            Update
          </span>
        </div>

        <a href="logout.php">
          <input
            type="submit"
            value="Logout"
            class="log-out-btn border-2 p-2 rounded-2xl text-xl font-semibold mt-2 bg-[#138808] text-white"
        /></a>
      </div>
	  <div class="container mt-3">
        <form action="" method="POST">
            <!-- <input type="hidden" name="date" value="<?php echo $date_formatted; ?>"> -->
            <div class="mb-3">
                <label for="item" class="form-label">Item:</label>
                <!-- <input type="text" class="form-inp ml-3" id="item" name="item" required> -->
                <input type="text" class="form-inp ml-3" id="item" name="item" value="<?php echo $item ?>" required>

            </div>
            <div class="mb-3">
                <label for="cost" class="form-label">Cost:</label>
                <input type="number" class="form-inp ml-2" id="cost" name="cost" value="<?php echo $cost ?>" required>
            </div>

            <button type="submit" class="btn btn-primary" name="data_update">update</button>
        </form>
       <?php
       if(isset($_POST['data_update'])){
        $item_new = $_POST['item'];
        $cost_new = $_POST['cost'];
            $sql = "update expense set item = '$item_new',cost = '$cost_new' where sno = '$id'";
            if(mysqli_query($conn,$sql)){
                header("Location:expense_main.php");
            }
            else{
                echo mysql_errno();
            }
        }
       ?>
    </div>
    </div>
  </body>
</html>
