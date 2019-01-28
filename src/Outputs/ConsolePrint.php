<?php

namespace StarCorp\Outputs;

class ConsolePrint extends AbstractOutput
{
    public function printValue($value)
    {
        echo $value;
    }
}