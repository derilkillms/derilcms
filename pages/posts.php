<?php

echo $this->header();

$data['nama'] = 'Deril';
$data['baseurl'] = $CFG->wwwroot;

$data['posts'] = $DB->get_records_sql("SELECT *, FROM_UNIXTIME(timecreated, '%M %d, %Y') AS created FROM {posts} LIMIT 5");

$data['rowsdata'] = count($data['posts']);

$tpl = $mustache->loadTemplate('posts');
echo $tpl->render($data);



echo $this->footer();