<?php
/**
 * Author   : Muhammad Deril
 * URI      : http://www.derillab.com
 * Github   : @derilkillms
 */

    require_once (__DIR__ .'/Mustache/Autoloader.php');

    Mustache_Autoloader::register();


    $getactive = $DB->get_record_sql("SELECT * FROM {themes} WHERE status=1");

    $mustache = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/../../d-content/themes/'.$getactive->path),
    'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/../../d-content/themes/'.$getactive->path.'/partials'),
    'helpers' => array('i18n' => function($text) {
        // do something translatey here...
    }),
    'escape' => function($value) {
    	return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
    },
    'charset' => 'ISO-8859-1',
    'logger' => new Mustache_Logger_StreamLogger('php://stderr'),
    'strict_callables' => true,
    'pragmas' => [Mustache_Engine::PRAGMA_FILTERS],
));