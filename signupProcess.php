<?php require_once("../includes/initialize.php"); ?>

<!-- signpu process page -->
<!-- coding: Aaron -->
<!-- coding: FIsaza2 -->

<?php 

$CustEmail = trim($_POST['CustEmail']);
$CustPassword = trim($_POST['CustPassword']);
$CustFirstName = trim($_POST['CustFirstName']);
$CustLastName = trim($_POST['CustLastName']);

if ($CustEmail == "" || $CustPassword == "" || $CustFirstName == "" || $CustLastName == "" ) {
	echo 5;
	return;
}
if (!filter_var($CustEmail, FILTER_VALIDATE_EMAIL)) {
  echo 4;
  return;
}
if (strlen($CustPassword) < 6) {
	echo 3;
	return;
}
$check = User::checkItem('CustEmail', $CustEmail);
if($check) {
	echo 2;
} else {
	$session->message("User created successfully, you can login here.");
	echo User::createUser($CustEmail, $CustPassword, $CustFirstName, $CustLastName);
}


?>
