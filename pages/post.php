<?php

echo $this->header();

$data['nama'] = 'Deril';

$data['post'] = $DB->get_record_sql("SELECT * FROM {posts} WHERE id=?",array($this->params[1]));

$tpl = $mustache->loadTemplate('post');
echo $tpl->render($data);



echo $this->footer();