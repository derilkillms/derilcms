<?php

class __MyTemplates_8761b810bcfc2e4bb916650bf3c03dff extends Mustache_Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<h1>';
        $value = $this->resolveValue($context->find('nama'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '<h1>
';
        $buffer .= $indent . '<p>ini daftar post</p>
';
        $value = $context->find('posts');
        $buffer .= $this->sectionC36d16e490c3512dda0bcb61cd40a6f3($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<p>rows data: ';
        $value = $this->resolveValue($context->find('rowsdata'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</p>';

        return $buffer;
    }

    private function sectionC36d16e490c3512dda0bcb61cd40a6f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
<li><a href="{{baseurl}}index.php/post/{{id}}">{{title}}</a></li>
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
                
                $buffer .= $indent . '<li><a href="';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= 'index.php/post/';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
