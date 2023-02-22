<?php

class __MyTemplates_94dd535761a110d957b71f399d36d0d3 extends Mustache_Template
{
    protected $strictCallables = true;
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

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
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
