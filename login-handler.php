<?php
$salt = $_REQUEST['salt'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if (($username === 'joestudent' && $password === 'topsecret') || ($username === 'marylearner' && $password === 'try2guess')) {
	$_SESSION['username'] = $username;
	header('Location: sso.php?salt=' . urlencode($salt));
} else {
	$error = TRUE;
	include 'signin.php';
}
?>