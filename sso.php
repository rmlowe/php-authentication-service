<?php
require 'common.php';

$salt = $_REQUEST['salt'];
$username = $_SESSION['username'];

if (isset($username)) {
	$digest = base64_encode(md5($username . $key . base64_decode($salt), TRUE));
	$location = $ekp_base . 'servlet/ekp/authenticationTokenVerifier?'
		. encode_pair('userId', $username) . '&' . encode_pair('digest', $digest);
	redirect_to($location);
} else {
	require 'login.php';
}
