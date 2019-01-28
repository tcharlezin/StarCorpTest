<?php

namespace StarCorp\Outputs;

use StarCorp\Interfaces\IMultipler;
use StarCorp\Interfaces\IOutput;

abstract class AbstractOutput implements IOutput
{
    private $start;
    private $end;
    private $pipeline;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
        $this->pipeline = array();
    }

    protected abstract function printValue($value);

    public function addToPipeline(IMultipler $multipler)
    {
        $this->pipeline [] = $multipler;
    }

    public function execute()
    {
        for ($number = $this->start; $number <= $this->end; $number++)
        {
            $this->printValue($this->get($number));
        }
    }

    private function get($number)
    {
        foreach ($this->pipeline as $pipe)
        {
            if ($pipe->match($number))
            {
                return $pipe->getResult();
            }
        }

        return $number;
    }
}