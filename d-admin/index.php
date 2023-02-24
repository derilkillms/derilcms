<?php
/**
 * Author   : Muhammad Deril
 * URI      : http://www.derillab.com
 * Github   : @derilkillms
 */


require_once 'setup.php';


$data['title'] = "Page Admin";

$tpl = $mustache->loadTemplate('index');
echo $tpl->render($data);
curreSess();