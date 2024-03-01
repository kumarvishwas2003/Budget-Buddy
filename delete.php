 <?php
    include 'connection.php';
        $item =  $_GET['item'];
        $cost = $_GET['cost'];
        $id = $_GET['id'];

        $sql = "delete from expense where sno='$id'";
        if(mysqli_query($conn,$sql)){
         header("Location:expense_main.php");
        }
?>