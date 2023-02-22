<?php

class __MyTemplates_c44f7bb225905bb0ac1cf75bdc8d7613 extends Mustache_Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<h1>Nama saya ';
        $value = $this->resolveValue($context->find('nama'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ', <h1>
';
        $buffer .= $indent . '<p>ini daftar post</p>
';
        $value = $context->find('posts');
        $buffer .= $this->section3e01aa099010021265728524b3888004($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<p>Controh row data: ';
        $value = $this->resolveValue($context->findDot('post.title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</p>';

        return $buffer;
    }

    private function section3e01aa099010021265728524b3888004(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
<li>{{title}}</li>
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
                
                $buffer .= $indent . '<li>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
