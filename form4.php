<html>
<body>
<?php
$postalErr ="";
$dataValid = true;
if ($_POST) { 
	$postal = trim($_POST['postal']);
	$result = preg_match("/^[a-zA-Z]{3}[0-9]{3}[A-Za-z]{1,3}$/",$postal);
	if (!$result) {
		$postalErr = "Error - you must enter valid Subject code in either of XXX999X,XXX999XX,XXX999XXX formats.";
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
