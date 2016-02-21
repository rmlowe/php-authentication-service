<?php
require 'config.php';

function encode_pair($name, $value)
{
	return urlencode($name) . '=' . urlencode($value);
}

function redirect_to($location)
{
	header('Location: ' . $location);
}

session_start();
