<?php
$salt = $_REQUEST['salt'];
$username = $_SESSION['username'];

if (isset($username)) {
	echo 'It is set.';
} else {
	$error = FALSE;
	include 'signin.php';
}
?>