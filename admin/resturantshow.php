<html>
<?php
include("../db.php");
   $sel="select * from resturantname";
   $row=mysqli_query($conn,$sel);
   ?>
   <head>
   </head>
   <body>
   <form action="dashboard.php" method="post">
	<fieldset style="width:300px;">
			<legend>Registration</legend>
	<table align="center" >
	<table border="1">
		<tr>
		<th>Sr No</th>
		<th> Resturantame</th>
		<th> City</th>
		<th> Moblie</th>
		<th> Delete</th>
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
	    <td><a href="resturantdlt.php?id=<?php echo $res['0'];  ?>">Delete</a></td>

		
	  </tr>
	  <?php
	   }
	  ?>
   </table>
   </body>
   </html>
