<?php

include("config.php");
session_start();
if(!isset($_SESSION['uname']))
{
	header("location:s_login.php");
}
$uname=$_SESSION['uname'];
$a=mysqli_query($al,"SELECT * FROM s_regis WHERE sname='$uname'");
$b=mysqli_fetch_array($a);
$sem=$b['sem'];

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
<table cellpadding="3" cellspacing="3" class="design" align="center">
<tr class="labels" style="text-decoration:underline;color:#C60;"><th>Sr.No.</th><th>Name</th><th>Roll No.</th><th>Center</th><th>Sem</th><th>Course</th><th>Phone no</th><th>Sub1</th><th>Sub2</th><th>Sub3</th><th>Sub4</th></tr>
<?php 
$i=1;
$x=mysqli_query($al,"SELECT * FROM s_regis WHERE sem='$sem'");
while($y=mysqli_fetch_array($x))
{
	?>
<tr class="labels" style="font-size:14px;">
<td><?php echo $i;$i++;?></td>
<td><?php echo $y['sname'];?></td>
<td><?php echo $y['seatno'];?></td>
<td><?php echo $y['ecenter'];?></td>
<td><?php echo $y['sem'];?></td>
<td><?php echo $y['ename'];?></td>
<td><?php echo $y['mno'];?></td>
<td><?php echo $y['sub1'];?></td>
<td><?php echo $y['sub2'];?></td>
<td><?php echo $y['sub3'];?></td>
<td><?php echo $y['sub4'];?></td>




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