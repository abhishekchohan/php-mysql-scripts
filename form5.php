<html>
<body>
<?php
$postalErr ="";
$dataValid = true;
if ($_POST) { 
	$postal = trim($_POST['postal']);
	$result = preg_match("/^[0-9]{3}\-[0-9]{3}\-[0-9]{4}$/",$postal);
	if (!$result) {
		$postalErr = "Error - you must enter valid Phone Number in 999-999-9999 format.";
		$dataValid = false;
	}
}
if ($_POST && $dataValid)
{ 
	echo "You have entered -> $postal . Thank You.";
} 
else 
{ 
  ?>
	<form method="post" action="">
	Subject Code :<input type="text" name=postal value="<?php if (isset($_POST['postal'])) echo $_POST['postal']; ?>"><?php echo $postalErr; ?>
	<br />
	<input type="submit">
	</form>
<?php
}
?>
</body>
</html>
