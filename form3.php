<html>
<body>
<?php
$postalErr ="";
$dataValid = true;
if ($_POST) { 
	$postal = trim($_POST['postal']);
	$result = preg_match("/^[a-zA-Z][0-9][a-zA-Z]\s?[0-9][A-Za-z][0-9]$/",$postal);
	if (!$result) {
		$postalErr = "Error - you must enter valid postal code in X9X9X9 format.";
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
	Postal Code :<input type="text" name=postal value="<?php if (isset($_POST['postal'])) echo $_POST['postal']; ?>"><?php echo $postalErr; ?>
	<br />
	<input type="submit">
	</form>
<?php
}
?>
</body>
</html>
