<?php
include 'connection.php';
session_start();
$user_calender = $_SESSION['username'];
function getMonth($conn,$month,$user_calender){
  $sql = "SELECT SUM(cost) as total_sum from expense where MONTH(date) = $month and user = '$user_calender'";
  $result = mysqli_query($conn,$sql);
  if($result){
    $row = mysqli_fetch_assoc($result);
    $total_sum = $row['total_sum'];
    return $total_sum;
  }
  else{
    echo "something got wrong";
  }
}

$jan = getMonth($conn,1,$user_calender);
$feb = getMonth($conn,2,$user_calender);
$mar = getMonth($conn,3,$user_calender);
$apr = getMonth($conn,4,$user_calender);
$may = getMonth($conn,5,$user_calender);
$jun = getMonth($conn,6,$user_calender);
$jul = getMonth($conn,7,$user_calender);
$aug = getMonth($conn,8,$user_calender);
$sep = getMonth($conn,9,$user_calender);
$oct = getMonth($conn,10,$user_calender);
$nov = getMonth($conn,11,$user_calender);
$dec = getMonth($conn,12,$user_calender);

?>