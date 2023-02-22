<?php

class __MyTemplates_518f9816e716649574084a1da2217f25 extends Mustache_Template
{
    protected $strictCallables = true;
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1>';
        $value = $this->resolveValue($context->findDot('post.title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h1>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<p>';
        $value = $this->resolveValue($context->findDot('post.content'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</p>';

        return $buffer;
    }
}
