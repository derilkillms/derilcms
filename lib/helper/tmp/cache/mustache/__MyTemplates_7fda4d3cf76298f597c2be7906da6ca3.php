<?php

class __MyTemplates_7fda4d3cf76298f597c2be7906da6ca3 extends Mustache_Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<h1>Nama saya ';
        $value = $this->resolveValue($context->find('nama'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ', <h1>
';
        $buffer .= $indent . '<p>ini daftar user</p>
';
        $value = $context->find('users');
        $buffer .= $this->section0b1520124178445bcecbb3e01cd84492($context, $indent, $value);

        return $buffer;
    }

    private function section0b1520124178445bcecbb3e01cd84492(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
<li>{{firstname}}</li>
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
                $value = $this->resolveValue($context->find('firstname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
