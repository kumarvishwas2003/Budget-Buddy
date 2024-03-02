<?php
include 'connection.php';
session_start();
if(isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['sex'];
    $_SESSION['fname'] = $fname;
    
    // Check if the username already exists in the register table
    $sql_user = "SELECT * FROM register WHERE username='$username'";
    $data = mysqli_query($conn, $sql_user);
    $total = mysqli_num_rows($data);
    
    if ($total != 0) {
        $taken = "Username already taken";
    } else {
        // Insert the user into the register table
        $sql_register = "INSERT INTO register(fname, lname, username, password, gender) VALUES ('$fname', '$lname', '$username', '$password', '$gender')";
        if(mysqli_query($conn, $sql_register)) {
            // Check if the username exists in the login table
            $sql_check = "SELECT * FROM login WHERE username='$username'";
            $data = mysqli_query($conn, $sql_check);
            $total = mysqli_num_rows($data);
            
            if($total == 0) {
                // Insert the user into the login table only if the username doesn't exist in the login table
                $sql_login = "INSERT INTO login(username, password) VALUES ('$username', '$password')";
                if(mysqli_query($conn, $sql_login)) {
                    echo "User registered successfully.";
                    header( "refresh:1;url=login.php" );
                    exit();
                } else {
                    echo "Error inserting data into login table: " . mysqli_error($conn);
                }
            }
        } else {
            echo "Error inserting data into register table: " . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="./CSS/register.css" />
    <link rel=" preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main-container">
        <div class="logo-div">
            <img src="./images/logo.png" alt="budget buddy logo" class="logo" />
        </div>
        <div class="register-head">Register</div>
        <?php if (isset($taken)) { ?>
            <div class="error"><?php echo $taken; ?></div>
            <?php } ?>
        <div class="details-div">
            <form action="" method="POST">
                <div class="fname-div">
                    <input type="text" name="fname" id="fname" class="enter" placeholder="First name" required/>
                </div>
                <div class="lname-div">
                    <input type="text" name="lname" id="lname" class="enter" placeholder="Last name" required/>
                </div>
                <div class="username-div">
                    <input type="text" name="username" id="username" class="enter" placeholder="Username" required/>
                </div>
                <div class="password-div">
                    <input type="password" name="password" id="password" class="enter" placeholder="Password" required/>
                </div>
                <div class="gender-div">
                    <input type="radio" name="sex" value="Male"/>Male
                    <input type="radio" name="sex" value="female" /> Female
                </div>
        </div>
        <input type="submit" value="Register" class="register" name="register"/>
        </form>
    </div>
    <!--main container-->
    <script>
window.onload = function() {
  alert("⚠️ Warning: This website is not very secure. Please do not share your sensitive information such as email addresses and passwords. Use non-official details instead.");
};
</script>
</body>

</html>