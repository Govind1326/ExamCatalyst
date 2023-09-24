<?php

include("../config.php");
error_reporting(0);
session_start();
if (!isset($_SESSION['email'])) {
    header("location:./login-page/login.php");
}

$sname = mysqli_real_escape_string($al, $_POST['sname']);
$ename= mysqli_real_escape_string($al, $_POST['ename']);
$seatno = mysqli_real_escape_string($al, $_POST['seatno']);
$mno = $_POST['mno'];
$edate= mysqli_real_escape_string($al, $_POST['edate']);
$gender= mysqli_real_escape_string($al, $_POST['gender']);
$sem= mysqli_real_escape_string($al, $_POST['sem']);
$center= mysqli_real_escape_string($al, $_POST['center']);

$sub1= mysqli_real_escape_string($al, $_POST['sub1']);
$e1date= mysqli_real_escape_string($al, $_POST['e1date']);
$sub2= mysqli_real_escape_string($al, $_POST['sub2']);
$e2date= mysqli_real_escape_string($al, $_POST['e2date']);
$sub3= mysqli_real_escape_string($al, $_POST['sub3']);
$e3date= mysqli_real_escape_string($al, $_POST['e3date']);
$sub4= mysqli_real_escape_string($al, $_POST['sub4']);
$e4date= mysqli_real_escape_string($al, $_POST['e4date']);

if($sname==NULL || $ename==NULL || $seatno==NULL || $mno==NULL || $edate==NULL || $gender==NULL ||$sem==NULL || $sub1==NULL || $e1date==NULL || $sub2==NULL || $e2date==NULL || $sub3==NULL || $e3date==NULL || $sub4==NULL || $e4date==NULL)
{
  echo"fill all fields";
}
else
{
$sql=mysqli_query($al,"INSERT INTO s_regis(sname,ename,seatno,mno,eyear,gender,sem,ecenter,sub1,de1,sub2,de2,sub3,de3,sub4,de4) 
VALUES('$sname','$ename','$seatno','$mno','$edate','$gender','$sem','$center','$sub1','$e1date','$sub2','$e2date','$sub3','$e3date','$sub4','$e4date')");
	if($sql)
	{
		$msg="Successfully Registered";
                 header("location:../Faculty.php");

	}
	else
	{
		$msg="Email Already Exists";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="regi.css">
    </head>
    <body>
        <div class="wrapper rounded bg-white">

            <div class="h3">Registration Form</div>
            <form action="" method="post">
                <div class="form">
                    <div class="row">

                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Candidate's Name</label>
                            <input type="text" name='sname' class="form-control" required>
                        </div>

                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Name of Exam</label>
                            <input type="text" name='ename' class="form-control" required>
                        </div>

                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Exam Seat No.</label>
                            <input type="number" name='seatno' class="form-control" required>
                        </div>

                        <div class="col-md-6 mt-md-0 mt-3">

                            <label>Phone Number</label>
                            <input type="tel" name="mno" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3">
                        <label>Date of Exam</label>
                        <input type="date" name="edate" class="form-control" required>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-3">
                        <label>Gender</label>
                        <div class="d-flex align-items-center mt-2">
                            <label class="option">
                                <input type="radio" name="gender" value="Male">Male
                                <span class="checkmark"></span>
                            </label>
                            <label class="option ms-4">
                                <input type="radio" name="gender" value="Female">Female
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3">
                        <label>Semester</label>
                        <select name="sem" class="fields"required>
                            <option value="" disabled="disabled" selected="selected">- - Semester - -</option>
                            <option value="1">First Sem</option>
                            <option value="2">Second Sem</option>
                            <option value="3">Third Sem</option>
                            <option value="4">Fourth Sem</option>

                        </select>
                    </div>

                    <div class="col-md-6 mt-md-0 mt-3">

                        <label>Exam Center </label>              
                        <select name="center" class="fields"required>
                            <option value="" disabled="disabled" selected="selected">- - Center - -</option>
                            <option value="Gyanodaya">Gyanodaya Pariksha Bhavan</option>
                            <option value="G H Patel">G H Patel Colleage</option>
                        </select>
                    </div>
                </div>
                <div class=" my-md-2 my-3">
                                        <hr>

                    <label>Subject 1</label>
                    <select id="sub" name="sub1" required>
                        <option value="" selected hidden>Choose Option</option>
                        <option value="Maths">Maths</option>
                        <option value="Science">Science</option>
                        <option value="Social">Social</option>
                        <option value="Hindi">Hindi</option>
                    </select>
                    <div class="col-md-6 mt-md-0 mt-3">
                        <label>Date of Exam 1</label>
                        <input type="date" name="e1date" class="form-control" required>
                    </div>
                                        <hr>

                    <label>Subject 2</label>
                    <select id="sub" name="sub2" required>
                        <option value="" selected hidden>Choose Option</option>
                        <option value="Maths">Maths</option>
                        <option value="Science">Science</option>
                        <option value="Social">Social</option>
                        <option value="Hindi">Hindi</option>
                    </select>
                     <div class="col-md-6 mt-md-0 mt-3">
                        <label>Date of Exam 2</label>
                        <input type="date" name="e2date" class="form-control" required>
                    </div>
                                        <hr>

                    <label>Subject 3</label>
                    <select id="sub" name="sub3" required>
                        <option value="" selected hidden>Choose Option</option>
                        <option value="Maths">Maths</option>
                        <option value="Science">Science</option>
                        <option value="Social">Social</option>
                        <option value="Hindi">Hindi</option>
                    </select>
                     <div class="col-md-6 mt-md-0 mt-3">
                        <label>Date of Exam 3</label>
                        <input type="date" name="e3date" class="form-control" required>
                    </div>
                    <hr>
                    <label>Subject 4</label>
                    <select id="sub" name="sub4" required>
                        <option value="" selected hidden>Choose Option</option>
                        <option value="Maths">Maths</option>
                        <option value="Science">Science</option>
                        <option value="Social">Social</option>
                        <option value="Hindi">Hindi</option>
                    </select>
                     <div class="col-md-6 mt-md-0 mt-3">
                        <label>Date of Exam 4</label>
                        <input type="date" name="e4date" class="form-control" required>
                    </div>
                </div>
                <input type="submit" value="Submit" class="btn">
                </div>
            </form>
        </div> 

    <footer>
        <p>
            By
            <a href="http://www.google.com" onclick="alert('thank you for clicking')">Exam Catalyst.</a>
            - Go to home page
        </p>
    </footer>
</body>
</html>