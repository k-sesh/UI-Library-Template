<?php

class __MyTemplates_97cbac6e886b527a0e0508fb7d976d5e extends Mustache_Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . 'Hello ';
        $value = $this->resolveValue($context->find('name'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . 'You have just won $';
        $value = $this->resolveValue($context->find('value'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '!
';
        // 'in_ca' section
        $value = $context->find('in_ca');
        $buffer .= $this->section8c03112b4a37ac4aaa9c3a8de292e599($context, $indent, $value);

        return $buffer;
    }

    private function section8c03112b4a37ac4aaa9c3a8de292e599(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
Well, ${{ taxed_value }}, after taxes.
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . 'Well, $';
                $value = $this->resolveValue($context->find('taxed_value'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', after taxes.
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
