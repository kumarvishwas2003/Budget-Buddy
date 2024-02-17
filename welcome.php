<?php
include 'connection.php';
session_start();
// if()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Budget Buddy</title>
    <link rel="stylesheet" href="./CSS/welcome.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

</head>

<body>
    <?php
    $user_profile = $_SESSION['username'];
    if ($user_profile) {
    } else {
        header('location:login.php');
    }
    // echo "hello " . $user_profile; //thsi has to be used in welcome message using isset
    ?>
    <!-- <div class="welcome-container">
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
        
    </div> -->
    <div class="welcome-container">
        <div>
            <img src="./images/logo.png" class="bg-logo">
        </div>
        <div class="log-out-div">
            <a href="logout.php"><input type="submit" value="Logout" class="log-out-btn"></a>
        </div>
        <div class="welcome-head">
            <h1>Welcome <?php echo $user_profile ?></h1>
        </div>
        <div class="content-head">
            <p>Happy Budgeting! </p>
        </div>
        <div class="content-para">
            <p>

                We're delighted to welcome you to Budget Buddy, your go-to tool for managing your finances with ease.
                Here, you can effortlessly track your expenses, set budget goals, and gain valuable insights into your
                spending habits.
                <br>
                Start exploring Budget Buddy now to take control of your finances and achieve your financial goals.
                <br>
                <br>
                The Budget Buddy Team"
            </p>
        </div>
        <div class="next-btn-div"><a href="dashboard.html"><button class="next-btn" value="Next">Next</button></a></div>
    </div>
    <!--welcome-container-->
    <!-- <input type="button" value="Next" class="next-btn"> -->


</body>

</html>