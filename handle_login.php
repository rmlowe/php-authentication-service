<?php
require 'common.php';

$salt = $_REQUEST['salt'];
$username = $_REQUEST['userId'];

$_SESSION['username'] = $username;
redirect_to('sso.php?' . encode_pair('salt',  $salt));
