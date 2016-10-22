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
  if ($_GET)
  {
        // Test for nothing entered in field
        if ($_GET['firstName'] == "") {
                $firstNameErr = "Error - you must fill in a first name";
                $dataValid = false;
        }
        if ($_GET['lastName'] == "") {
                $lastNameErr = "Error - you must fill in a last name";
                $dataValid = false;
        }
        if ($_GET['organization'] == "") {
                $organErr = "Error - you must fill in an organization";
                $dataValid = false;
        }
        if ($_GET['email'] == "") {
                $emailErr = "Error - you must fill in an email";
                $dataValid = false;
        }
        if ($_GET['phone'] == "") {
                $phoneErr = "Error - you must fill in a phone number";
                $dataValid = false;
        }
  }
// If the submit button was pressed and something was entered in both fields, process data
// (we just print a mesg)
if ($_GET && $dataValid) {
?>
        Title: <?php echo $_GET["title"]; ?> <br>
        First name: <?php echo $_GET["firstName"]; ?> <br/>
        Last name:  <?php echo $_GET["lastName"]; ?> <br />
        Organisation :  <?php echo $_GET["organization"]; ?> <br>
        Email Address :  <?php echo $_GET["email"]; ?> <br>
        Phone Number:  <?php echo $_GET["phone"]; ?> <br>
        Days Attending :  <?php echo $_GET["monday"]; ?> <?php echo $_GET["tuesday"]; ?> <br>
        T-Shirt Size :  <?php echo $_GET["t-shirt"]; ?> <br>
<?php
// If no submit or data is invalid, print form, repopulating fields and printing err mesgs
} else {
?>
  <form method="get" action="">
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
        <td><input name="firstName" type="text" value="<?php if (isset($_GET['firstName'])) echo $_GET['firstName']; ?>"><?php echo $firstNameErr;?></td>
        </tr>
        <tr>
        <td>Last name:</td>
        <td><input name="lastName" type="text" value="<?php if (isset($_GET['lastName'])) echo $_GET['lastName']; ?>"><?php echo $lastNameErr; ?></td>
        </tr>
        <tr>
        <td>Organization:</td>
        <td><input name="organization" type="text" value="<?php if (isset($_GET['organization'])) echo $_GET['organization']; ?>"><?php echo $organErr; ?></td>
        </tr>
        <tr>
        <td>Email address:</td>
        <td><input name="email" type="text" value="<?php if (isset($_GET['email'])) echo $_GET['email']; ?>"><?php echo $emailErr; ?></td>
        </tr>
        <tr>
        <td>Phone number:</td>
        <td><input name="phone" type="text" value="<?php if (isset($_GET['phone'])) echo $_GET['phone']; ?>"><?php echo $phoneErr; ?></td>
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
