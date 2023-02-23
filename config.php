<?php

/**
* Author   : Muhammad Deril
* URI      : http://www.derillab.com
* Github   : @derilkillms
*/

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbdriver    = 'pdo';
$CFG->dbtype    = 'mysql'; //mysql or pgsql
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'cmsderil';
$CFG->dbuser    = 'root';
$CFG->dbpass    = '';
$CFG->prefix    = 'd_';
$CFG->dboptions = array (
	'dbpersist' => 0,
	'dbport' => '',
	'dbsocket' => '',
	'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'http://192.168.1.213/alphine/moodlefm/';
require_once(__DIR__ .'/lib/dbdriver/connect.php');
