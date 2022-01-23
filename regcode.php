<?php
include("db.php");
$a=$_POST['name'];
//echo $a;
echo "<br/>";
$b=$_POST['email'];
//echo $b;
echo "<br/>";
$c=$_POST['pass'];
//echo $c;
echo "<br/>";
$d=$_POST['mob'];
//echo $d;
echo "<br/>";

$e=$_POST['city'];
//echo $e;

$date=date("d/m/y");
date_default_timezone_set("asia/kolkata");
$time=date("h:i:sa");

$ins="insert into registration(regname,regemail,regpass,regmobile,regcity,regdate,regtime) values('$a','$b','$c','$d','$e','$date','$time')";
if(mysqli_query($conn,$ins))
{
	$ins1="insert into login(logemail,logpass) values('$b','$c')";
	if(mysqli_query($conn,$ins1))
	{
		header("location:signin.php");
	}
	else
	{
		echo "login data not insert";
	}
}
else
{
	echo "registration data not insert";
}
?>