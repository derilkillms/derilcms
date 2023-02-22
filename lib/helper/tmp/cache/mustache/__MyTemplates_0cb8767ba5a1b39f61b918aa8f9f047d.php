<?php

class __MyTemplates_0cb8767ba5a1b39f61b918aa8f9f047d extends Mustache_Template
{
    protected $strictCallables = true;
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1><a href="';
        $value = $this->resolveValue($context->find('baseurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">Ini header</a></h1>';

        return $buffer;
    }
}
