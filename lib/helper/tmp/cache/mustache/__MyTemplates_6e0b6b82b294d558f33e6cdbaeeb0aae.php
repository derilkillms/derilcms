<?php

class __MyTemplates_6e0b6b82b294d558f33e6cdbaeeb0aae extends Mustache_Template
{
    protected $strictCallables = true;
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="leftcolumn">
';
        $buffer .= $indent . '<div class="card">
';
        $buffer .= $indent . '<h2>';
        $value = $this->resolveValue($context->findDot('post.title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h2>
';
        $buffer .= $indent . '<h5>Title description, </h5>
';
        $buffer .= $indent . '<div class="fakeimg" style="height:200px;">Image</div>
';
        $buffer .= $indent . '<p>Some text..</p>
';
        $buffer .= $indent . '<p>';
        $value = $this->resolveValue($context->findDot('post.content'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</p>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
