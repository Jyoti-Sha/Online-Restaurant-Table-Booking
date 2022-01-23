<?php
include("db.php");
$a=$_POST['name'];
echo $a;
echo "<br/>";
$b=$_POST['email'];  
echo $b;
echo "<br/>";
$c=$_POST['mob'];
echo $c;
echo "<br/>";
$d=$_POST['msg'];
echo $d;
echo "<br/>";
date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");

$ins="insert into contact(name,email,mobile,message,datetime) values('$a','$b','$c','$d','$datetime')";
if(mysqli_query($conn,$ins))
{
	header("location:contact.php?msg=data insert");
}
else
{
	echo "data not insert";
}
?>