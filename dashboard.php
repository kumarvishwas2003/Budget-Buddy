<?php 
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./CSS/dashboard.css" />
    <link rel="stylesheet" href="./CSS/float.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <style>
    /* * {
        overflow: hidden;
      } */
    .icon-details {
        display: flex;
        gap: 10px;
    }

    .act {
        width: 50%;
        padding: 13px;
        background-color: rgba(255,
                255,
                255,
                0.336);
        /* Adjust opacity for glass effect */
        border-radius: 10px;
        /* Rounded corners */
        color: rgb(0, 0, 0);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.628);
    }

    body {
        width: 100vw;
        height: 100vh;
        background: linear-gradient(to right, #ff9933, #ffffff, #138808);
        backdrop-filter: blur(1px);
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
        animation: float 10s ease-in-out infinite;
        /* Adjust timing and animation properties as needed */
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
    /*this is the proof that merge is working

    /* .log-out-btn {
        background-color: #138808;
      } */
    </style>
</head>

<body>
    <?php
        $user_dashboard = $_SESSION['username']; 
        if($user_dashboard){

        }
        else{
            header("location:login.php");
        }
        ?>
    <div class="dashboard-container">
        <div>
            <img src="./images/logo.png" class="bg-logo" />
        </div>

        <div class="nav flex justify-between mx-2 mb-4">
            <a href="welcome.php">
                <button class="back-btn border-2 p-2 rounded-2xl text-xl font-semibold mt-2 bg-orange-400 text-white">
                    Back
                </button></a>


                <div class="middle flex flex-col">
      <span class="expense-head-div self-center text-xl font-bold mt-4">
        Dashboard
      </span>
      
      </div> 

            <a href="logout.php">
                <input type="submit" value="Logout"
                    class="log-out-btn border-2 p-2 rounded-2xl text-xl font-semibold mt-2 bg-[#138808] text-white" /></a>
        </div>
        <!--nav-->

        <div class="contents-div">
            <div class="icon-details text-xl text-center px-2 flex-col">
                <!--calender-->
                <div class="accordian">
                    <!--accordian-->
                    <div class="question flex justify-between">
                        <div class="left flex gap-2">
                            <div class="icon-div-left">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="text-data">Calender</div>
                        </div>
                        <div class="right">
                            <div class="icon-div-right">
                                <i class="fa-solid fa-caret-down icon-right"></i>
                            </div>
                        </div>
                    </div>
                    <!--question-->
                    <div class="answer max-h-0 overflow-hidden">
                        View and manage your expenses and income on a monthly basis. Plan
                        your financial activities with ease by visualizing your financial
                        data in a monthly calendar format.
                    </div>
                </div>
                <!--income-->
                
                <!--expense-->
                <div class="accordian">
                    <!--accordian-->
                    <div class="question flex justify-between">
                        <div class="left flex gap-2">
                            <div class="icon-div-left">
                                <i class="fa-solid fa-wallet"></i>
                            </div>
                            <div class="text-data">Expense</div>
                        </div>
                        <div class="right">
                            <div class="icon-div-right">
                                <i class="fa-solid fa-caret-down icon-right"></i>
                            </div>
                        </div>
                    </div>
                    <!--question-->
                    <div class="answer">
                        Record your expenses accurately. Monitor where your money is going
                        by categorizing and tracking your expenses, helping you make
                        informed financial decisions.
                    </div>
                </div>
                <!--report-->
                <div class="accordian">
                    <!--accordian-->
                    <div class="question flex justify-between">
                        <div class="left flex gap-2">
                            <div class="icon-div-left">
                                <i class="fa-solid fa-chart-line"></i></i>
                            </div>
                            <div class="text-data">Report</div>
                        </div>
                        <div class="right">
                            <div class="icon-div-right">
                                <i class="fa-solid fa-caret-down icon-right"></i>
                            </div>
                        </div>
                    </div>
                    <!--question-->
                    <div class="answer">
                        Generate detailed reports to gain insights into your financial
                        activities. Analyze your spending patterns, identify trends, and
                        make strategic adjustments to your budget and spending habits.
                    </div>
                </div>
                <div class="accordian">
                    <!--accordian-->
                    <div class="question flex justify-between">
                        <div class="left flex gap-2">
                            <div class="icon-div-left">
                                <i class="fa-solid fa-info"></i>
                            </div>
                            <div class="text-data">About Us!</div>
                        </div>
                        <div class="right">
                            <div class="icon-div-right">
                                <i class="fa-solid fa-caret-down icon-right"></i>
                            </div>
                        </div>
                    </div>
                    <!--question-->
                    <div class="answer">
                        Welcome to Budget Buddy! We're here to help you manage your finances effectively. Our platform offers tools for tracking expenses, analyzing spending habits, and making informed financial decisions. Join us and take control of your finances today!
                    </div>
                </div>
            </div>
            <!--icon details-->
            <div class="continue text-center text-xl mt-3 mb-5">
                <h2>Click to continue</h2>
            </div>
            <div class="input-div grid grid-cols-2 text-6xl gap-y-5 text-center">
                <a href="calender.php"><button class="calender act">
                        <i class="fa-solid fa-calendar-days"></i></button></a>
                <a href="about.html"><button class="about act">
                        <i class="fa-solid fa-info"></i></button></a>

                <a href="expense.php"><button class="expense act">
                        <i class="fa-solid fa-wallet"></i></button></a>
                <a href="report.html"><button class="report act">
                        <i class="fa-solid fa-chart-line"></i></button></a>
            </div>
        </div>
        <!--contents-div-->
        <!-- <input type="text" placeholder="helllo">
        <input type="button" value="click">
        <input type="submit" value="hello"> -->
    </div>
    <!--dashboard-->
    <script src="dashboard.js"></script>
</body>

</html>