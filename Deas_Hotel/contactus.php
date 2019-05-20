<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="utf-8">
		<title>Jessica Deas- Oceanview Suites</title>
		<link rel="stylesheet" href="css/index.css"/>
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
	    <li> <a href="contactus2.php">Contact Information2</a></li>
</ul>
  </nav>
		<form method="post" action="contact_complete.php" name="JDform">
			<fieldset><legend>Contact Information</legend>
				<table border>
					<th>An * represents a required field</th>
					<tr>
						<th><label for="JDfirst">*Full name:</label></th>
						<td><input type="text" name="JDfirst" id="JDfirst" size="10" value="<?php if( isset($_POST['JDfirst'])){echo $_POST['JDfirst'];}?>"/></td>
					</tr>
					<tr>
						<th><label for="JDaddress">*Address:</label></th>
						<td><input type="address" name="JDaddress" id="JDaddress" value="<?php if( isset($_POST['JDaddress'])){echo $_POST['JDaddress'];}?>" /></td>
					</tr>
					<tr>
						<th><label for="JDdate">*Arrival date:</label></th>
						<td><input type="date" name="JDdate" id="JDdate" value="<?php if( isset($_POST['JDdate'])){echo $_POST['JDdate'];}?>" /></td>
					</tr>
					<tr>
						<th><label for="JDroom">*Choice of room size:</label></th>
						<td><select name="JDroom" id="JDroom">
							<option value="">SELECT ONE</option>
							<option value="DB">Double</option>
							<option value="QN">Queen</option>
							<option value="KG">King</option>
	
						</select>
					</td>
				</tr>
					<tr>
					<th><label for="JDcomments">Comments:</label></label></th>
					<td><textarea name="JDcomments" id="JDcomments"></textarea></td>
				</tr>
				<tr>
					<th>Submit:</th>
					<td><input type="submit" name="JDsubmit" value="SUBMIT"  /></td>
				</tr>
				<?php
			if(empty($_POST['JDfirst']))
			{
				$errormsg .= "<p>Your Name is empty</p>";
			}
			if(empty($_POST['JDaddress'])) {$errormsg .= "<p>Your address is empty</p>";}
			if(empty($_POST['JDdate'])) {$errormsg .= "<p>Your arrival date is empty</p>";}
			if(empty($_POST['JDroom'])) {$errormsg .= "<p>Your room choice is empty</p>";}
			
			echo $errormsg;
		if( isset($_POST['JDsubmit']) )
		{
			echo '<p>The form was submitted.</p>';
		}
		?>
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
