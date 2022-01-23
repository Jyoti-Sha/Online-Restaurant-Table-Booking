<?php
include("../db.php");
session_start();
$sesid=$_SESSION['admin'];

$a=$_POST['opass'];
//echo $a;
$b=$_POST['npass'];
//echo $b;
$c=$_POST['cpass'];
//echo $c;

$sel="select * from admin where email='$sesid'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);

if(!$row)
{
	echo "email and password not match";
}
else
{
	if($row['2']==$a)
	{
		if($b==$c)
		{
			$up="update admin set password='$b' where email='$sesid'";
			if(mysqli_query($conn,$up))
			{
				header("location:dashboard.php");
			}
			else
			{
				echo "password not match";
			}
		}
		else
		{
			echo "emialid is wrong";
		}
	}
}
?>