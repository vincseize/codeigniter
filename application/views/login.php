<?php
session_start(); // Starting Session

$error='Invalid Password'; // Variable To Store Error Message

$valid_password = "avicene";

if (isset($_POST['password'])) {
	$password = isset($_POST['password']);
	if (empty($_POST['password']) OR $password != $valid_password) {
		unset($_SESSION['password']);
	}
	else {
		if ($_POST['password']== $valid_password) {
			$_SESSION['password']=$password;
		}
	}

}

?>