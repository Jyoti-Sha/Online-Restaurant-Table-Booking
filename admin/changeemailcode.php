<?php
include("../db.php");
session_start();
$sesid=$_SESSION['admin'];

$a=$_POST['oemail'];
$b=$_POST['nemail'];
$c=$_POST['cemail'];

$sel="select * from admin where email='$sesid'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);

if(!$row)
{
	echo "email and password not match";
}
else
{
	if($row['1']==$a)
	{
		if($b==$c)
		{
			$up="update admin set email='$b' where email='$sesid'";
			if(mysqli_query($conn,$up))
			{
				header("location:index.php");
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