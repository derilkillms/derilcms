<?php

$foot = $mustache->loadTemplate('footer');

$datafoot['footer'] = 'Footer';
$datafoot['baseurl'] = $CFG->wwwroot;

echo $foot->render($datafoot);
