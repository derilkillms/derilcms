<?php
// print_r($this->parseURL());

echo $CFG->wwwroot;


$getdata = $DB->get_records_sql('SELECT * FROM {user} LIMIT 5');

//with params array
$getrow = $DB->get_record_sql('SELECT * FROM {user} WHERE id=?',array(2));

foreach ($getdata as $key => $value) {
	echo '<br>+'.$value->username.' <br/>';
}

echo $getrow->firstname;
echo '<br>';