<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Budget Buddy</title>
    <link rel="stylesheet" href="./CSS/welcome.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">

</head>

<body>
    <?php
    $user_profile = $_SESSION['username'];
    if ($user_profile) {
    } else {
        header('location:login.php');
    }
    echo "hello " . $user_profile;
    ?>
    <div class="welcome-container">
        <div class="logo-div">
            <img src="./images/logo.png" alt="logo" class="img">
        </div>
        <div class="welcome-head">
            <p> Welcome to Budget Buddy!</p>
        </div>
        <div class="welcome-para">
            Welcome to Budget Buddy! Your trusted partner in financial management. Track expenses, set goals, and gain
            valuable insights. With our intuitive tools and personalized guidance, take control of your financial
            journey and achieve your goals with confidence and ease. Let's start budgeting together!
        </div>
        <input type="button" value="Next">
        <a href="logout.php"><input type="submit" value="logout"></a>
    </div>
</body>

</html>