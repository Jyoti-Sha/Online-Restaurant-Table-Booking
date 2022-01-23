<?php
include("db.php");

$a=$_POST['city'];
echo $a;
echo "<br/>";
$b=$_POST['resturantname'];
echo $b;
echo "<br/>";
$c=$_POST['resturantype'];
echo $c;
echo "<br/>";
$d=$_POST['item'];
echo $d;
echo "<br/>";
$e=$_POST['tablenumber'];
echo $e;
echo "</br>";

date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");

$ins="insert into profile(procity,proresturantname,proresturantype,proitem,protablenumber,prodatetime) values('$a','$b','$c','$d','$e','$datetime')";
if(mysqli_query($conn,$ins))
{
	header("location:signup.php");
}
else
	{
		echo "profile data not insert";
	}
?>