<?php
/**
 * Author   : Muhammad Deril
 * URI      : http://www.derillab.com
 * Github   : @derilkillms
 */

class Routes
{

	public $page = 'posts';
	public $params =[];

	// public $header = require_once 'pages/partials/header.php';

	public function __construct(){
		GLOBAL $CFG, $DB, $mustache;
		$url = $this->parseURL();

		if (isset($url)) {


			$url = array_filter($url, function($value){
				return $value != '';
			});

			$url = array_slice($url,0);

			if (isset($url[0])) {
				if(file_exists('pages/'.$url[0].'.php')){
					$this->page = $url[0];
					unset($url[0]);
				}
			}

			

		}

		$this->params = $url;



		require_once 'pages/'.$this->page.'.php';


	}

	public function header()
	{
		GLOBAL $CFG, $DB, $mustache;
		require_once 'pages/partials/header.php';
	}

	public function footer()
	{
		GLOBAL $CFG, $DB, $mustache;
		require_once 'pages/partials/footer.php';
	}

	public function parseURL(){
		$url = $_SERVER['REQUEST_URI'];
		$indexPos = strpos($url, 'index.php');

		if ($indexPos !== false) {
			$path = substr($url, $indexPos + strlen('index.php'));
			
		}
		if(isset($path)){
			$url = rtrim($path, '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}

	}
	
	
}

?>