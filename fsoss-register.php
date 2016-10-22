<html>
  <head>
    <title>FSOSS Registration</title>
  </head>
  <body>
  <h1>FSOS Registration</h1>
  <?php
  $firstNameErr ="";
  $lastNameErr ="";
  $organErr ="";
  $emailErr ="";
  $phoneErr ="";
  $dataValid = true;
  // If submit with POST
  if ($_POST)
  { 
        // Test for nothing entered in field
	if ($_POST['firstName'] == "") {
		$firstNameErr = "Error - you must fill in a first name";
		$dataValid = false;
	}
	if ($_POST['lastName'] == "") {
		$lastNameErr = "Error - you must fill in a last name";
		$dataValid = false;		
	}
        if ($_POST['organization'] == "") {
                $organErr = "Error - you must fill in an organization";
                $dataValid = false;
        }
	if ($_POST['email'] == "") {
                $emailErr = "Error - you must fill in an email";
                $dataValid = false;
        }
        if ($_POST['phone'] == "") {
                $phoneErr = "Error - you must fill in a phone number";
                $dataValid = false;
        }
  }
// If the submit button was pressed and something was entered in both fields, process data
// (we just print a mesg)
if ($_POST && $dataValid) { 
?>
 	Title: <?php echo $_POST["title"]; ?> <br>
        First name: <?php echo $_POST["firstName"]; ?> <br/>
        Last name:  <?php echo $_POST["lastName"]; ?> <br />
        Organisation :  <?php echo $_POST["organization"]; ?> <br>
        Email Address :  <?php echo $_POST["email"]; ?> <br>
        Phone Number:  <?php echo $_POST["phone"]; ?> <br>
        Days Attending :  <?php echo $_POST["monday"]; ?> <?php echo $_POST["tuesday"]; ?> <br>
        T-Shirt Size :  <?php echo $_POST["t-shirt"]; ?> <br>
<?php
// If no submit or data is invalid, print form, repopulating fields and printing err mesgs
} else { 
?>
  <form method="post" action="">
	<table>
	<tr>
    	<td valign="top">Title:</td>
	<td>
		<table>
		<tr>
		<td><input type="radio" name="title" value="mr">Mr</td>
		</tr>
		<tr>
		<td><input type="radio" name="title" value="mrs">Mrs</td>
		</tr>
		<tr>
		<td><input type="radio" name="title" value="ms">Ms</td>
		</tr>
		</table>
	</td>
	</tr>
	<tr>
    	<td>First name:</td>
	<td><input name="firstName" type="text" value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName']; ?>"><?php echo $firstNameErr;?></td>
	</tr>
	<tr>
    	<td>Last name:</td>
	<td><input name="lastName" type="text" value="<?php if (isset($_POST['lastName'])) echo $_POST['lastName']; ?>"><?php echo $lastNameErr; ?></td>
	</tr>
	<tr>
    	<td>Organization:</td>
	<td><input name="organization" type="text" value="<?php if (isset($_POST['organization'])) echo $_POST['organization']; ?>"><?php echo $organErr; ?></td>
	</tr>
	<tr>
    	<td>Email address:</td>
	<td><input name="email" type="text" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"><?php echo $emailErr; ?></td>
	</tr>
	<tr>
    	<td>Phone number:</td>
	<td><input name="phone" type="text" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>"><?php echo $phoneErr; ?></td>
	</tr>
	<tr>
    	<td>Days attending:</td>
	<td>
		<input name="monday" type="checkbox" value="monday">Monday
		<input name="tuesday" type="checkbox" value="tuesday">Tuesday<td/>
	</tr>
	<tr>
	<td>T-shirt size:</td>
	<td>
	<select name="t-shirt">
	<option>--Please choose--</option>
	<option name="small" value="s">Small</option>
	<option value="m">Medium</option>
	<option value="l">Large</option>
	<option value="xl">X-Large</option>
	</select>
	</td>
	</tr>
	<tr><td><br></td></tr>
	<tr>
	<td></td>
	<td><input name="submit" type="submit"></td>
	</tr>
  </form>
<?php
}
?>
  </body>
</html>
