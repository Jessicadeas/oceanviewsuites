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
	    <li> <a href="contactus2.php">Contact Information 2</a></li>
</ul>
  </nav>
	</head>
	<body>
	<?php
	//NECESSARY VARIABLES
	$errormsg = "";
	$showform = 1;
	//DATABASE CONNECTION
	require_once "connect.php";

		if( isset($_POST['thesubmit']) )
		{
			echo '<p>The form was submitted.</p>';

			//Data Cleansing
			$formfield['ffName'] = trim($_POST['FullName']);
			$formfield['ffAddress'] = trim($_POST['Address']);
			$formfield['ffArrivalDate'] = trim(strtolower($_POST['ArrivalDate']));
			$formfield['ffRoomSize'] = trim($_POST['RoomSize']);
			$formfield['ffComments'] = trim($_POST['Comments']);
		
			/*  ****************************************************************************
     		CHECK FOR EMPTY FIELDS
    		Complete the lines below for any REQIURED form fields only.
			Do not do for optional fields.
    		**************************************************************************** */
			if(empty($formfield['ffName'])){$errormsg .= "<p>Your customer name field is empty.</p>";}
			if(empty($formfield['ffAddress'])){$errormsg .= "<p>Your address is empty.</p>";}
			if(empty($formfield['ffArrivalDate'])){$errormsg .= "<p>Your arrival date is empty.</p>";}
			if(empty($formfield['ffRoomSize'])){$errormsg .= "<p>Your room size field is empty.</p>";}
			if(empty($formfield['ffComments'])){$errormsg .= "<p>Your comments field is empty.</p>";}
			
			/*  ****************************************************************************
			DISPLAY ERRORS
			If we have concatenated the error message with details, then let the user know
			**************************************************************************** */
			if($errormsg != "")
			{
				echo "<div class='error'><p>THERE ARE ERRORS!</p>";
				echo $errormsg;
				echo "</div>";
			}
			else
			{
				try
				{
					//enter data into database
					$sqlinsert = 'INSERT INTO contactInfo (FullName, Address, ArrivalDate, RoomSize, Comments)
								  VALUES (:bvFullName, :bvAddress, :bvArrivalDate, :bvRoomSize, :bvComments)';
					$stmtinsert = $db->prepare($sqlinsert);
					$stmtinsert->bindvalue(':bvFullName', $formfield['FullName']);
					$stmtinsert->bindvalue(':bvAddress', $formfield['Address']);
					$stmtinsert->bindvalue(':bvArrivalDate', $formfield['ArrivalDate']);
					$stmtinsert->bindvalue(':bvRoomSize', $formfield['RoomSize']);
					$stmtinsert->bindvalue(':bvComments', $formfield['Comments']);
					$stmtinsert->execute();
					echo "<div class='success'><p>There are no errors.  Thank you.</p></div>";
				}//try
				catch(PDOException $e)
				{
					echo 'ERROR!!!' .$e->getMessage();
					exit();
				}
			}//else statement end
		}//if isset submit


	$sqlselect = 'SELECT * from contactInfo';

	$result = $db-> query($sqlselect);


	?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="theform">
			<fieldset><legend>Contact Information</legend>
				<table border>
					<tr>
						<th>Full Name</th>
						<td><input type="text" name="FullName" id="FullName"
						value = <?php echo $formfield['ffName']; ?>	></td>
					</tr>
					<tr>
						<th>Address</th>
						<td><input type="text" name="Address" id="Address"
						value = <?php echo $formfield['ffAddress']; ?>></td>
					</tr>
					<tr>
						<th>Arrival Date</th>
						<td><input type="text" name="ArrivalDate" id="ArrivalDate"
						value = <?php echo $formfield['ffArrivalDate']; ?>></td>
					</tr>
					<tr>
						<th>Room Size</th>
						<td><input type="text" name="RoomSize" id="RoomSize"
						value = <?php echo $formfield['ffRoomSize']; ?>></td>
					</tr>
					<tr>
						<th>Comments</th>
						<td><input type="text" name="Comments" id="Comments"
						value = <?php echo $formfield['ffComments']; ?>></td>
					</tr>
				</table>
				<input type="submit" name = "thesubmit" value="Enter">
			</fieldset>
		</form>
			<br><br>
	<table border>
	<tr>
		<th>Name</th>
		<th>Address</th>
		<th>Arrival Date</th>
		<th>Room Size</th>
		<th>Comments</th>
	</tr>
	<?php 
		while ( $row = $result-> fetch() )
			{
				echo '<tr><td>' . $row['FullName'] . '</td><td> ' . $row['Address'] . 
				'</td><td> ' . $row['ArrivalDate'] . '</td></td>' . $row['RoomSize'] .'</td><td>' . $row['Comments'] . '</td></tr>';
			}
		?>
	</table>
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