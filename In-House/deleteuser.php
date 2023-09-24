<?php
include("config.php");
$d=$_GET['del'];
$sql=mysqli_query($al,"DELETE FROM s_regis WHERE id='$d'");
if($sql)
{
	?>
	<script type="text/javascript" language="javascript">
	alert('Successfully Deleted');
	window.location="viewUsers.php";
	</script>
<?php

}
