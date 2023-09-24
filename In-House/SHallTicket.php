<?php
include("config.php");
session_start();
if (!isset($_SESSION['uname'])) {
    header("location:s_login.php");
}
$uname = $_SESSION['uname'];
$a = mysqli_query($al, "SELECT * FROM s_regis WHERE sname='$uname'");
$b = mysqli_fetch_array($a);
$sem = $b['sem'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Online Result</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>

    <body><br />

        <div align="center">
            <span class="head">Online Result Display</span>
            <hr class="hr" />
            <br />
            <br />
            <span class="subhead">Academic Detail</span>
            <br />
            <br />
            <table cellpadding="3" cellspacing="3" class="design" align="center" style="border:2px solid black">
                <tr class="labels" style="text-decoration:underline;color:#C60; border:2px solid black">
                    <!--<th>Sr.No.</th><th>Name</th><th>Roll No.</th><th>Sem</th><th>Exam Center</th><th>Course</th><th>Sub1</th><th>Sub2</th><th>Sub3</th><th>Sub4</th>-->
                </tr>
<?php
$i = 1;
$x = mysqli_query($al, "SELECT * FROM s_regis WHERE sem='$sem'");
while ($y = mysqli_fetch_array($x)) {
    ?>
                    <tr class="labels" style="font-size:14px; border:2px solid black">
                        <tr>

                            <td>sr.no.: <?php echo $i;
                $i++; ?></td>
                        </tr>    <tr>
                            <td>Name.:<?php echo $y['sname']; ?></td>
                        </tr>
                        <tr>
                            <td>Seat no.:<?php echo $y['seatno']; ?></td>

                        </tr>
                                    <tr>
                            <td>Semester.:<?php echo $y['sem']; ?></td>
                        </tr>
                        <tr>

                            <td>Exam Center.:<?php echo $y['ecenter']; ?></td>
                        </tr>
                        <tr>

                            <td>Course.: <?php echo $y['ename']; ?></td>
                        </tr>
                        <tr >
                            <td style="border:2px solid black">subject 1.:<?php echo $y['sub1']; ?></td>
                            <td style="border:2px solid black">Exam Date.:<?php echo $y['de1']; ?></td>

                        </tr>
                        <tr>

                            <td style="border:2px solid black">subject 2.:<?php echo $y['sub2']; ?></td>
                            <td style="border:2px solid black">Exam Date.:<?php echo $y['de2']; ?></td>

                        </tr>
                        <tr>

                            <td style="border:2px solid black">subject 3.:<?php echo $y['sub3']; ?></td>
                            <td style="border:2px solid black">Exam Date.:<?php echo $y['de3']; ?></td>

                        </tr>
                        <tr>

                            <td style="border:2px solid black">subject 4.:<?php echo $y['sub4']; ?></td>
                            <td style="border:2px solid black">Exam Date.:<?php echo $y['de4']; ?></td>

                        </tr>





                    </tr>
<?php } ?>
            </table>
            <br />
            <br />
            <br />
            <a href="Student.php" class="cmd">HOME</a>
        </div>
    </body>
</html>