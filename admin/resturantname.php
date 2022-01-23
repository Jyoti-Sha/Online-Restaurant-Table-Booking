<?php
include("../db.php");

$a=$_POST['name'];
//echo $a;
$b=$_POST['add'];
//echo $b;
$c=$_POST['mob'];
//echo $c;

$datetime=date("d/m/y h:i:sa");
date_default_timezone_set("asia/kolkata");


$ins="insert into resturantname(restname,restaddress,restmobile,restdatetime) values('$a','$b','$c','$datetime')";
if(mysqli_query($conn,$ins))
{
	//echo "data insert";
}
else
{
	echo "resturant data not insert";
}
?>