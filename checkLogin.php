<?php require_once("../includes/initialize.php"); ?>

<!-- check user login -->
<!-- coding: Fabian Isaza Cifuentes -->

<?php 

$email = trim($_POST['email']);
$password = trim($_POST['password']);

// if user name and password match
// return a user object
$found_user = User::authenticate($email, $password);

if($found_user) {
	$session->login($found_user);
	print("success");
} else {
	return null;
}

?>