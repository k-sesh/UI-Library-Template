<?php

class Foo
{
    public $name = "Steven";
    public $value = 10;

    public function taxed_value()
    {
        return $this->value - ($this->value * 0.4);
    }

    public $in_ca = true;
};
