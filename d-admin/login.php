<?php
/**
 * Author   : Muhammad Deril
 * URI      : http://www.derillab.com
 * Github   : @derilkillms
 */


require_once 'setup.php';


$data['title'] = "Page Login";

$tpl = $mustache->loadTemplate('login');
echo $tpl->render($data);


if ($_POST) {

	if (login($_POST['username'],$_POST['password'])==true) {
		header('Location: index.php');
	}else{
		echo "Gagal login";
	}

}
