<?php
/**
 * DERIL CMS
 * Author	: Muhammad Deril
 * URI		: https://www.derillab.com
 */


if (file_exists('config.php')) {
	require 'lib/setup.php';
}else{

	$protocol=$_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';
	
	$secure_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	header('Location: ' . $secure_url.'/install/install.php');
	exit();
}


