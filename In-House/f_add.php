<?php
include("config.php");
error_reporting(0);

session_start();
if (!isset($_SESSION['email'])) {
    header("location:./login-page/login.php");
}
$email = mysqli_real_escape_string($al, $_POST['email']);
$pass = mysqli_real_escape_string($al, ($_POST['psw']));
$uname = mysqli_real_escape_string($al, $_POST['uname']);
$sem = mysqli_real_escape_string($al, ($_POST['sem']));

if ($_POST['email'] == NULL || $_POST['psw'] == NULL || $_POST['uname'] == NULL || $_POST['sem'] == NULL) {
    echo ' please fill all the details';
} else {
    $sql = mysqli_query($al, "INSERT INTO f_login(email,password,username,sem) VALUES ('$email','$pass','$uname','$sem')");
    if ($sql) {
        echo"Successfully Registered";
        header("location:Faculty.php");
    } else {
        echo "not registered ";
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

            input[type=text], input[type=password],input[type=number],select {
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
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    </head>
    <body>

        <section class="container">

            <h2>Faculty Login Form </h2>

            <form action="" method="post">
                <div class="imgcontainer">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname">

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email">

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" >

                    <label for="psw"><b>Semester</b></label>
                    <!--<input type="number" placeholder="Enter Semester" name="sem">-->
                    <select name="sem" class="fields" required>
                        <option value="" disabled="disabled" selected="selected">- - Semester - -</option>
                        <option value="1">First Sem</option>
                        <option value="2">Second Sem</option>
                        <option value="3">Third Sem</option>
                        <option value="4">Fourth Sem</option>
                       
                    </select>
                    <br>                   
                    <br>

                    <input class="btn btn-dark" type="submit" name="submit" value="Submit">
                    </form>
                    <label>
                      <!--<input type="checkbox" checked="checked" name="remember"> Remember me-->
                    </label>
                </div>

                <!--<div class="container" style="background-color:#f1f1f1">-->
                <a href="Faculty.php" class="cancelbtn btn btn-secondary">Faculty Page</a>

                    <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
                <!--</div>-->
        </section>

    </body>
</html>
