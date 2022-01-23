<?php

include("../db.php");

   $delid=$_REQUEST['id'];
$del="delete from resturantname where id=$delid";
if(mysqli_query($conn,$del))
{
	header("location:resturantshow.php");
}
else{
	echo "data not deleted";
}
?>