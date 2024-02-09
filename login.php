<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Budget Buddy</title>
    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
</head>


<body>
    <div class="log-container">
        <div class="logo-div">
            <img src="./images/logo.png" alt="" class="img" />
        </div>
        <div class="head">
            <p>Budget Buddy</p>
        </div>
        <div class="log-head">
            <p>Login</p>
        </div>
        <form action="#" method="POST">
            <input type="text" placeholder="Username" name="username" />
            <input type="password" placeholder="Password" name="password" />
            <input type="submit" value="Login" class="login-bt" name="login" />
        </form>
    </div>
    <!--log-container-->
</body>

</html>

<?php
include 'connection.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM login where username='$username' && password = '$password' ";
    $data = mysqli_query($conn, $sql);
    $total = mysqli_num_rows($data);
    if ($total == 1) {
        // echo "matched";
        $_SESSION['username'] = $username;

        header("location:welcome.php");
    } else {
        echo "failed";
    }
}

?>