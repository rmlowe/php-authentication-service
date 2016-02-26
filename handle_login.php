<?php
require 'common.php';

// Ignore the password
$_SESSION['username'] = $_REQUEST['userId'];
redirect_to($_REQUEST['target']);
