<?php
include("config.php");
error_reporting(0);
session_start();
if(!isset($_SESSION['email']))
{
	header("location:login-page/login.php");
}
$email=$_SESSION['email'];
$a=mysqli_query($al,"SELECT * FROM f_login WHERE email='$email'");
$b=mysqli_fetch_array($a);
$pass=$b['password'];
$old=($_POST['old']);
$p1=($_POST['p1']);
$p2=($_POST['p2']);
if($_POST['old']==NULL || $_POST['p1']==NULL || $_POST['p2']==NULL)
{
	//ASL Do Nothing
}else{
if($old!=$pass){
	
    $msg="Incorrect Old Password";
    
}elseif($p1!=$p2){
		$msg="New Password Didn't Matched";
	}else{
		mysqli_query($al,"UPDATE f_login SET password='$p2' WHERE email='$email'");
                	header("location:faculty.php");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Result</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

</head>

<body><br />

<div align="center">
<span class="head">Exam Catalyst</span>
<hr class="hr" />
<br />
<br />
<span class="subhead">Change Password</span>
<br />
<br />
<form method="post" action="">
<table cellpadding="3" cellspacing="3" class="design" align="center">
<tr>
    <td colspan="2" class="msg" align="center"><?php echo $msg;?></td>
</tr>
<tr>
    <td class="labels">Old Password :</td>
    <td>
        <input type="password" name="old" size="25" class="fields" placeholder="Enter Old Password" required="required" />
    </td>
</tr>
<tr>
    <td class="labels">New Password :</td>
    <td>
        <input type="password" name="p1" size="25" class="fields" placeholder="Enter New Password" required="required"  />
    </td>
</tr>
<tr>
    <td class="labels">Re-Type Password :</td>
    <td>
        <input type="password" name="p2" size="25"  class="fields" placeholder="Re-Type New Password" required="required" />
    </td>
</tr>
<tr>
    <td colspan="2" align="center">
        <input type="submit" value="Change Password" class="fields btn btn-primary" />
    </td>
</tr>
</table>
</form>
<br />
<br />
<br />
<a href="login-page/login.php" class="cmd btn btn-dark">LOGIN PAGE</a>
</div>
</body>
</html>