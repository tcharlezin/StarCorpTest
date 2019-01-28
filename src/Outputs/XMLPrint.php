<?php

namespace StarCorp\Outputs;

class XMLPrint extends AbstractOutput
{
    public function printValue($value)
    {
        echo "<value>{$value}</value>\n";
    }
}