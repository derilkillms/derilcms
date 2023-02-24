<?php
/**
 * Author   : Muhammad Deril
 * URI      : http://www.derillab.com
 * Github   : @derilkillms
 */

function putconfig($INSTALL)
{
	// Set configuration values
	$config_values = array(
		'db_host' => $INSTALL->host,
		'db_name' => $INSTALL->dbname,
		'db_user' => $INSTALL->dbuser,
		'db_password' => $INSTALL->dbpass,
		'db_prefix' => $INSTALL->dbprefix,
		'wb_baseurl' => $INSTALL->baseurl
	);

// Generate the configuration file content
	$config_file_content = "<?php\n\n";

	$config_file_content .= "/**\n";
	$config_file_content .= "* Author   : Muhammad Deril\n";
	$config_file_content .= "* URI      : http://www.derillab.com\n";
	$config_file_content .= "* Github   : @derilkillms\n";
	$config_file_content .= "*/\n\n";

	$config_file_content .= "unset(\$CFG);\n";
	$config_file_content .= "global \$CFG;\n";
	$config_file_content .= "\$CFG = new stdClass();\n\n";

	$config_file_content .= "\$CFG->dbdriver  = 'pdo';\n";
	$config_file_content .= "\$CFG->dbtype    = 'mysql'; //mysql or pgsql\n";
	$config_file_content .= "\$CFG->dbhost    = '{$config_values['db_host']}';\n";
	$config_file_content .= "\$CFG->dbname    = '{$config_values['db_name']}';\n";
	$config_file_content .= "\$CFG->dbuser    = '{$config_values['db_user']}';\n";
	$config_file_content .= "\$CFG->dbpass    = '{$config_values['db_password']}';\n";
	$config_file_content .= "\$CFG->prefix    = '{$config_values['db_prefix']}';\n";
	$config_file_content .= "\$CFG->dboptions = array (\n";
	$config_file_content .= "	'dbpersist' => 0,\n";
	$config_file_content .= "	'dbport' => '',\n";
	$config_file_content .= "	'dbsocket' => '',\n";
	$config_file_content .= "	'dbcollation' => 'utf8mb4_general_ci',\n";
	$config_file_content .= ");\n\n";


	$config_file_content .= "\$CFG->wwwroot   = '{$config_values['wb_baseurl']}';\n";

	$config_file_content .= "require_once(__DIR__ .'/lib/dbdriver/connect.php');\n";

// Write the configuration file
	$config_file_path = '../config.php';
	file_put_contents($config_file_path, $config_file_content);

	echo "Configuration file generated successfully.";

}