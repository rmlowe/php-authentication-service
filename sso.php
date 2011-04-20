<?php
session_start();

$salt = $_REQUEST['salt'];
$username = $_SESSION['username'];

if (isset($username)) {
	echo 'It is set.';
} else {
	$error = FALSE;
#	echo $_SESSION['username'];
	include 'signin.php';
}
?>