<?php
include("db.php");
$a=$_POST['email'];
echo $a;
echo "<br/>";
$b=$_POST['pass'];
echo $b;
echo "<br/>";
date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");

$sel="select * from login where logemail='$a' or logpass='$b'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);
if(!$row)
{

	echo "emailid and password both are not match";
}
else
{
	if($row['1']==$a)
	{
		if($row['2']==$b)
		{
			$up="update login set logdatetime='$datetime',logstatus='true' where logemail='$a'";
			if(mysqli_query($conn,$up))
			{
				session_start();
				$_SESSION['user']=$a;
				header("location:profile.php");
			}
			else
			{
				echo "login failed";
			}
		}
		else
		{
			echo "password are not match";
		}
	}
	else
	{
		echo "password are not match";
	}
}
?>