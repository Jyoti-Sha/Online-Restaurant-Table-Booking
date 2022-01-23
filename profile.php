<?php
include("db.php");

session_start();

$sesid=$_SESSION['user'];
?>
<html>
<head>
<style>
#resturant
{
	height:600px;
	width:1000px;
	background:url("image/hh.jpg");
	background-size:100% 100%;
}
#resturant1
{
	height:600px;
	width:500px;
	float:left;
}
#resturant2
{
	height:600px;
	width:500px;
	float:left;
}
</style>
</head>
<body>
<div id="outer">
<div id="header"></div>
<div id="resturant">
<div id="resturant1">
<h1>Welcome To Profile Page</h1>
<h1><a href="signin.php" style="color:black;">LOGOUT</a></h1>

<form action="signup.php" method="post" >
<table>
<tr>
<td><u style="color:red;"><h1 style="color:yellow;">RESTAURANTS</h1></u></td></tr>
<tr>
<td><h2 style="color:white;">Select City</h2></td>
<td><select name="city">
<option value="city">--Select City--</option>
<option name="city" value="ballia">Ballia</option>
<option name="city" value="lucknow">lucknow</option>
<option name="city" value="Allahabad">Allahabad</option>
<option name="city" value="Aurangabad">Aurangabad</option>
<option name="city" value="Raipur">Raipur</option>
<option name="city" value="Varansi">Varansi</option>
<option name="city" value="Gazipur">Gazipur</option>
</select></td></tr>
<tr>
<td><h2 style="color:white;">Restaurant Name</h2></td>
<td><select name="resturantname">
<option value="resturantname">--Select Restaurant Name--</option>
<option name="resturnt name" value="Rudra:Ballia">Rudra:Ballia</option>
<option name="resturnt name" value="Swad:Gazipur">Swad:Gazipur</option>
<option name="resturnt name" value="Kathi Junction:Allahabad">Kathi Junction:Allahabad</option>
<option name="resturnt name" value="Food-G:Aurangabad">Food-G:Aurangabad</option>
<option name="resturnt name" value="Brownee:Varansi">Brownee:Varansi</option>
<option name="resturnt name" value="Maharaja:Raipur">Maharaja:Raipur</option>
<option name="resturnt name" value="Vaishnavi:lucknow">Vaishnavi:Lucknow</option></td></tr>
<tr>
<td><h2 style="color:white;">Restaurant Type</h2></td>
<td><select name="resturantype">
<option value="resturantype">--Select Restaurant Type--</option>
<option name="resturant type" value="AC">AC TYPE</option>
<option name="resturant type" value="NON-AC">NON-AC TYPE</option></td></tr>
<tr>
<td><h2 style="color:white;">Menu Item</h2></td>
<td><select name="item">
<option value="item">--Select Item --</option>
<option name="item" value="DOSA">DOSA</option>
<option name="item" value="CHAT PAPDI">CHAT PAPDI</option>
<option name="item" value="PANEER TIKKA">PANEER TIKKA</option>
<option name="item" value="VEG BIRYANI">VEG BIRYANI</option>
<option name="item" value="SPRING ROLL">SPRING ROLL</option>
<option name="item" value="MOMOS">MOMOS</option>
<option name="item" value="BURGER">BURGER</option>
<option name="item" value="CHIZZ PIZZA">CHIZZ PIZZA</option>
<option name="item" value="COLD COFEE">COLD COFEE</option>
<option name="item" value="ICE-CREAM">ICE-CREAM</option>
<option name="item" value="COLD DRINKS">COLD DRINKS</option>
<option name="item" value="CHOLA BHATORA">CHOLA BHATORA</option>
<option name="item" value="CHUTNEY BOMB">CHUTNEY BOMB</option>
<option name="item" value="BABY CORN CIGARS">BABY CORN CIGARS</option>
<option name="item" value="POTATO PANEER TIKKI">POTATO PANEER TIKKA</option>
<option name="item" value="PASTA CARBONARA">PASTA CARBONARA</option>
<option name="item" value="MASHROOM RISOTTO">MASHROOM RISOTTO</option>
<option name="item" value="IDALI SABHAR">IDALI SABHAR</option>
<option name="item" value="SAMOSA">SAMOSA</option>
<option name="item" value="SARDINES">SARDINES</option>
<option name="item" value="RASGULLA">RASGULLA</option>
<option name="item" value="TUNA FILLED SANDWICH">TUNA FILLED SANDWICH</option>
<option name="item" value="BHEL PURI">BHEL PURI</option>
<option name="item" value="VADA">VADA</option>
</td></tr>
<tr>
<td><h2 style="color:white;">Table Number</h2></td>
<td><select name="tablenumber">
<option value="table number">--Select Table number--</option>
<option name="table number" value="Table number 1">Table number 1</option>
<option name="table number" value="Table number 2">Table number 2</option>
<option name="table number" value="Table number 3">Table number 3</option>
<option name="table number" value="Table number 4">Table number 4</option>
<option name="table number" value="Table number 5">Table number 5</option>
<option name="table number" value="Table number 6">Table number 6</option>
<option name="table number" value="Table number 7">Table number 7</option>
<option name="table number" value="Table number 8">Table number 8</option>
<option name="table number" value="Table number 9">Table number 9</option>
<option name="table number" value="Table number 10">Table number 10</option>
<option name="table number" value="Table number 11">Table number 11</option>
<option name="table number" value="Table number 12">Table number 12</option>
</td></tr>

<tr>
<td><button>Submit</button></td>
<td><button>Clear</button></td></tr>
</table>
</form>
</div>
<!--<div id="resturant2">
<?php
include("db.php");
   $sel="select * from resturantname";
   $row=mysqli_query($conn,$sel);
   ?>
   <form>
	<fieldset style="width:300px;">
			<legend>Registration</legend>
	<table align="center" >
	<table border="1">
		<tr>
		<th>Sr No</th>
		<th> Resturantname</th>
		<th> City</th>
		<th> Moblie</th>
		</tr>
		<tr>
      <?php 
       while($res=mysqli_fetch_array($row,MYSQLI_BOTH))
	   {
	  ?>
	  <tr>
		<td><?php echo $res['0']; ?></td>
	    <td><?php echo $res['1']; ?></td>
	    <td><?php echo $res['2']; ?></td>
	    <td><?php echo $res['3']; ?></td>
        <td><?php echo $res['4']; ?></td>
	    <td><?php echo $res['5']; ?></td>
	    <td><?php echo $res['6']; ?></td>
		
	  </tr>
	  <?php
	   }
	  ?>
</div>-->
</div>
</body>
</html>