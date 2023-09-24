<?php
include("../config.php");
error_reporting(0);
$email = mysqli_real_escape_string($al, $_POST['email']);
$pass = mysqli_real_escape_string($al, ($_POST['psw']));

session_start();
if (isset($_SESSION['email'])){
    
            header("location:../Faculty.php");
}

if ($_POST['email'] == NULL || $_POST['psw'] == NULL) {
    $msg='Please fill all the details';
} else {
    $sql = mysqli_query($al, "SELECT * FROM f_login WHERE email='$email' AND password='$pass'");
        if(mysqli_num_rows($sql) == 1){
        $_SESSION['email'] = $email;
        header("location:../Faculty.php");
    } else {
        $msg = "Incorrect Email ID or Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>

        <div class="box-form">
            <div class="left">
                <div class="overlay">
                    <h1>Exam Catalyst.</h1>
                    <br>
                    <br>
                    <br>
                    <p style="color: red"><?php echo $msg;?></p>
                    <p>
                        There is something unique in this soil, which despite many obstacles has always remained the abode of great souls.
                    </p>
                    <span>
                        <p>- Sardar Vallabhbhai Patel</p>
                    </span>
                </div>
            </div>

            <div class="right">
                <h5>Login</h5>
                <p>
                    Don't have an account? <a href="#">Create Your Account</a> it takes
                    less than a minute
                </p>
                <form action="" method="post">
                    <div class="inputs">
                        <input type="text" placeholder="Email" name="email"/>
                        <br />
                        <input type="password" placeholder="Password" name="psw"/>
                        <p><a href="../Forgot_p.php">Forget Password?</a></p>
                    </div>
                    <input type="submit" value="Login" class="btn" />
                </form>
            </div>
        </div>

        <footer>
            <p>
                By
                <a href="../home.php" onclick="alert('thank you for clicking')">Exam Catalyst.</a>
                - Go to home page
            </p>
        </footer>

    </body>
</html>
