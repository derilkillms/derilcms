<?php

class __MyTemplates_47dc11163903f6ad3c2723c0ceb76d65 extends Mustache_Template
{
    protected $strictCallables = true;
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<!DOCTYPE html>
';
        $buffer .= $indent . '<html>
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '<meta name="viewport" content="width=device-width, initial-scale=1">
';
        $buffer .= $indent . '<link rel="stylesheet" type="text/css" href="';
        $value = $this->resolveValue($context->find('baseurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/d-content/themes/basic/assets/css/style.css">
';
        $buffer .= $indent . '</head>
';
        $buffer .= $indent . '<body>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="header">
';
        $buffer .= $indent . '  <h2>Blog Name</h2>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="row">';

        return $buffer;
    }
}
