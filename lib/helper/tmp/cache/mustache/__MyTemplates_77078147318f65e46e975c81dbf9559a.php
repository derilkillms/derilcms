<?php

class __MyTemplates_77078147318f65e46e975c81dbf9559a extends Mustache_Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="leftcolumn">
';
        $buffer .= $indent . '
';
        $value = $context->find('posts');
        $buffer .= $this->sectionF3fb6d11b8c3ed137d1d06f9a76810ab($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<p>rows data: ';
        $value = $this->resolveValue($context->find('rowsdata'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionF3fb6d11b8c3ed137d1d06f9a76810ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
<div class="card">
<h2><a href="{{baseurl}}index.php/post/{{id}}">{{title}}</a></h2>
<h5>Title description, {{timecreated}}</h5>
<div class="fakeimg" style="height:200px;">Image</div>
<p>Some text..</p>
<p>{{content}}</p>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda($result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="card">
';
                $buffer .= $indent . '<h2><a href="';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= 'index.php/post/';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></h2>
';
                $buffer .= $indent . '<h5>Title description, ';
                $value = $this->resolveValue($context->find('timecreated'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h5>
';
                $buffer .= $indent . '<div class="fakeimg" style="height:200px;">Image</div>
';
                $buffer .= $indent . '<p>Some text..</p>
';
                $buffer .= $indent . '<p>';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
