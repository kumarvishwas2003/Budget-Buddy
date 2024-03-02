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
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    html,
    body {
        width: 100%;
        height: 100%;
    }

    .welcome-container {
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, #FF9933, #FFFFFF, #138808);
        backdrop-filter: blur(1px);
        display: flex;
        flex-direction: column;
        padding: 15px;
    }

    @keyframes float {
        0% {
            transform: translate(-50%, -50%);
        }

        50% {
            transform: translate(-50%, -45%);
        }

        100% {
            transform: translate(-50%, -50%);
        }
    }

    .bg-logo {
        height: 220px;
        width: 220px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: -2;
        opacity: 0.2;
        animation: float 5s ease-in-out infinite;
        /* Adjust timing and animation properties as needed */
    }

  

    .log-out-btn {
        /* margin-top: 5px; */
        font-size: 17px;
        font-weight: 700;
        padding: 5px 10px;
        border-radius: 10px;
        border: 1px solid white;

    }

    .log-out-btn:hover {
        color: white;
        background-color: #138808e1;
    }

   

    .next-btn {
        background-color: white;
        font-size: 17px;
        color: #138808e1;
        font-weight: 700;
        padding: 5px 10px;
        border-radius: 10px;
        border: 1px solid white;
    }
    </style>
</head>

<body>
    <?php
    $user_profile = $_SESSION['username'];
    // $user_register = $_SESSION['fname'];
    if ($user_profile) {
    } else {
        header('location:login.php');
    }
    ?>
   
    <div class="welcome-container">
        <div>
            <img src="./images/logo.png" class="bg-logo">
        </div>
        <div class="nav flex justify-between">
            <div class="log-out-div">
                <a href="logout.php"><input type="submit" value="Logout"
                        class="log-out-btn bg-[#138808e1] text-white"></a>
            </div>
    <div class=" next-btn-div"><a href="dashboard.php"><button class="next-btn" value="Next">Next</button></a>
</div>
        </div>
        <div class="welcome-head mt-10">
            <h1 class="text-center font-bold text-3xl mt-3">Welcome <?php echo $user_profile ?></h1>
    </div>
    <div class="content-head">
        <p class="text-center text-md mt-2 font-semibold">Happy Budgeting! </p>
    </div>
    <div class=" content-para">
        <p class="text-justify mt-4">

            We're delighted to welcome you to Budget Buddy, your go-to tool for managing your finances with
            ease.
            Here, you can effortlessly track your expenses, set budget goals, and gain valuable insights into
            your
            spending habits.
            <br>
            Start exploring Budget Buddy now to take control of your finances and achieve your financial goals.
            <br>
        <p class="mt-2 font-bold">The Budget Buddy Team</p>
        </p>
    </div>
    </div>
    </div>
    <!--welcome-container-->
    <!-- <input type="button" value="Next" class="next-btn"> -->


</body>

</html>