<?php
/**
 * Author   : Muhammad Deril
 * URI      : http://www.derillab.com
 * Github   : @derilkillms
 */


if (!file_exists('../config.php')) {
	echo "Install first";
	die();
}

require_once '../config.php';

require_once './Auth/auth.php';

require_once './lib/template.php';

