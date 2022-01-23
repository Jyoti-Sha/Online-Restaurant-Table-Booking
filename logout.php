<?php
include("db.php");

session_start();
$sesid=$_SESSION['user'];

date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");

if(!$sesid)
{
	echo "session not set";
}
else
{
	$up="update login set logoutdatetime='$datetime',logstatus='false' where logemail='$sesid'";
	if(mysqli_query($conn,$up))
	{
		session_destroy();
		header("location:login.php");
	}
	else
	{
		echo "logout failed";
	}
}
?>