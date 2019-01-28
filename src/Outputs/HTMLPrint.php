<?php

namespace StarCorp\Outputs;

class HTMLPrint extends AbstractOutput
{
    public function printValue($value)
    {
        echo sprintf("<p>%s</p>", $value)."\n";
    }
}