<?php
require 'config.php';
session_start();

$salt = $_REQUEST['salt'];
#$username = $_SESSION['username'];
$username = 'ndadmin';

if (isset($username)) {
	$salt_bytes = base64_decode($salt);
	$digest_base_string = $username . $key . $salt_bytes;
	$digest_str = md5($digest_base_str, TRUE);
	$digest = base64_encode($digest_str);
	echo '<p>$salt_bytes: ' . $salt_bytes . '</p>';
	echo '<p>$digest_base_string: ' . $digest_base_string . '</p>';
	echo '<p>$digest_str: ' . $digest_str . '</p>';
	echo '<p>$digest: ' . $digest . '</p>';
} else {
	$error = FALSE;
	include 'signin.php';
}
?>