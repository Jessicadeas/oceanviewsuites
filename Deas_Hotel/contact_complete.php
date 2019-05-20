<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="utf-8">
		<title>Lab 8 </title>
		<link rel="stylesheet" href="css/index.css"  />
	</head>
	<body>
	<div id="wrapper">
	<header><h1>Oceanview Suites</h1></header>
	<h2 id="header">Contact Information</h2>
	<nav>
<ul>
 <li> <a href="home.html">Home</a></li>
 <li> <a href="info.html">Info</a></li>
 <li> <a href="receipt.html">Receipt</a></li>
 <li> <a href="discount.html">Discount</a></li>
 <li> <a href="estimate.html">Estimate</a></li>
 <li> <a href="amentities.html">Amenities</a></li>
 <li> <a href="register.html">Register</a></li>
  <li> <a href="maps.html">Maps</a></li>
      <li> <a href="special_features.html">Features</a></li>
	   <li> <a href="feature_pricing.html">Feature Pricing</a></li>
	   <li> <a href="contactus.php">Contact Information</a></li>
</ul>
  </nav>
	<body>
		<fieldset><legend>Contact Information</legend>
				<table border>
					<tr>
						<th><label for="JDfirst">Full Name:</label></th>
						<td><?php echo $_POST['JDfirst'] ?></td>
					</tr>
					<tr>
						<th><label for="JDaddress">Address:</label></th>
						<td><?php echo $_POST['JDaddress'] ?></td>
					</tr>
					<tr>
						<th><label for="JDdate">Arrival date:</label></th>
						<td><?php echo $_POST['JDdate'] ?></td>
					</tr>
					<tr>
						<th><label for="JDroom">Choice of room size:</label></th>
						<td>
								<?php
								   if( isset($_POST['JDroom']) && $_POST['JDroom'] == "" )
								   {
									   echo 'None Selected';
								   }
								?>
								<?php if( isset($_POST['JDroom']) && $_POST['JDroom'] == "DB" ){echo ' Double';}?>
								<?php if( isset($_POST['JDroom']) && $_POST['JDroom'] == "QN" ){echo ' Queen';}?>
								<?php if( isset($_POST['JDroom']) && $_POST['JDroom'] == "KG" ){echo ' King';}?>
								
						</td>
					</tr>
				
					<tr>
						<th><label for="JDcomments">Comments:</label></th>
						<td><?php echo $_POST['JDcomments'] ?></td>
					</tr>
				</table>
			</fieldset>
		</form>
		<footer>
1520 North Ocean Blvd<br>
Myrtle Beach, SC 29577<br>
<a href="tel:843-555-5555">1-843-555-5555</a><br>
Copyright &copy; 2018 Ocean View Suites<br>
<a href="mailto:oceansuites@gmail.com">oceansuites@gmail.com</a>
</footer>
		</div>
	</body>
</html>