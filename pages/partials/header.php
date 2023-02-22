<?php

$head = $mustache->loadTemplate('header');

$datahead['header'] = 'Header';
$datahead['baseurl'] = $CFG->wwwroot;

echo $head->render($datahead);
