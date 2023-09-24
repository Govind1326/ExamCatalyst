<?php
include("config.php");
error_reporting(0);
$uname = mysqli_real_escape_string($al, $_POST['uname']);
//$pass=mysqli_real_escape_string($al,($_POST['psw']));

session_start();
if (isset($_SESSION['uname'])) {
    header("location:Student.php");
}

if ($_POST['uname'] == NULL) {
    echo ' Please fill all the details';
} else {
    $sql = mysqli_query($al, "SELECT * FROM s_regis WHERE sname='$uname'");
    if (mysqli_num_rows($sql) == 1) {
        $_SESSION['uname'] = $uname;
        header("location:Student.php");
    } else {
        $msg = "Incorrect Email ID or Password";
        echo $msg;
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            form {
                border: 3px solid #f1f1f1;
            }

            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            button {
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
            }

            img.avatar {
                width: 40%;
                border-radius: 50%;
            }

            .container {
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>

        <h2>STUDENT Login Form</h2>

        <form action="" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname">

                <!--    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" >
                -->
                <button type="submit">Login</button>

            </div>

            <div class="container" style="background-color:#f1f1f1">
                <a class="cancelbtn" href="home.php">Cancel</a>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>

    </body>
</html>
