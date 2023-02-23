<?php

function generatedb($host,$dbname,$username,$password,$prefix)
{
	
// Set XML file path
	$xml_file_path = 'install.xml';

	try {
		$dbh = new PDO("mysql:host=$host", $username, $password);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the database
		$dbh->exec("CREATE DATABASE IF NOT EXISTS `$dbname` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");


		try {
			$dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		} catch (PDOException $e) {
			echo "Error connecting to database: " . $e->getMessage();
		}

	} catch (PDOException $e) {
		echo "Error creating database: " . $e->getMessage();
	}


// Load the XML file into a SimpleXMLElement object
	$xml = simplexml_load_file($xml_file_path);

// Iterate through the tables in the XML file and import them into the database
	foreach ($xml->database->table as $table) {
		$table_name = (string) $prefix.$table['name'];
		$create_table_sql = (string) $table->structure;

    // Create the table if it doesn't already exist
		$dbh->exec("CREATE TABLE IF NOT EXISTS `$table_name` $create_table_sql");

    // Import the data into the table
		foreach ($table->data->row as $row) {
			$columns = array();
			$values = array();

			foreach ($row->field as $field) {
				$columns[] = (string) $field['name'];
				$values[] = (string) $field;
			}

			$columns_string = implode(',', $columns);
			$placeholders = implode(',', array_fill(0, count($values), '?'));

			$stmt = $dbh->prepare("INSERT INTO `$table_name` ($columns_string) VALUES ($placeholders)");
			$stmt->execute($values);
		}
	}

	return "Database imported successfully.";
}