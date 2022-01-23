<html>
<head>
<link href="css/style.css" rel="stylesheet"/>
<style>
  #signup{
    background:url("image/hf3.jpg");
	background-size:100% 100%;
  }
</style>
</head>
<body onload="abc()">
<div id="outer">
<div id="title">
<p>Online Restaurant Order Booking System</p>
</div>
<div id="menu">
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="about.php">ABOUT</a></li>
<li><a href="gallery.php">GALLERY</a></li>
<li><a href="services.php">SERVICES</a></li>
<li><a href="contact.php">CONTACT</a></li>
<li><a href="signup.php">SIGNUP</a></li>
<li><a href="signin.php">LOGIN</a></li>
</ul>
</div>
<div id="signup">
    <div id="up1">
	
	<fieldset style="width:300px;border:5px solid dodgerblue;">
<legend><h3>Registration Form</h3></legend>
	
			<table>
			<form action="regcode.php" method="post">
			   <tr>
			     <td>Name</td>
			     <td><input type="text"name="name"/></td>
			   </tr>
			   <tr>
			     <td>Email</td>
			     <td><input type="text"name="email"/></td>
			   </tr>
			   <tr>
			     <td>Password</td>
			     <td><input type="password"name="pass"/></td>
			   </tr>
			    <tr>
			     <td>Mobile</td>
			     <td><input type="number"name="mob"/></td>
			   </tr>
			   <tr>
			     <td>City</td>
			     <td><input type="text"name="city"/></td>
			   </tr>
			    <tr>
			     <td><button>Submit</button></td>
			     <td>&nbsp;&nbsp;<button>Clear All</button></td>
			   </tr>
			   </form>
			</table>
			</div>
    <div id="up2"></div>
    <div id="up3">
	
	</div>
</div>
<div id="footer">
	     <div id="foot1">
		   <p>&copy;copyright 2018 | All Right Reserved.</p>
		 </div>
	     <div id="foot2">
		   <p>Design & Developed By:Rama,Jyoti,Anshika,Shreya,Sajal</p>
		 </div>
	   </div>
</div>
</body>
</html>