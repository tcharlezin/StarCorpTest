<?php

use PHPUnit\Framework\TestCase;
use StarCorp\Multiples\IT;
use StarCorp\Multiples\StarCorp;
use StarCorp\Multiples\StarCorpianos;
use StarCorp\Outputs\ConsolePrint;

class NumberResultTest extends TestCase
{
    public function testPipelineDigit2()
    {
        $this->load(new ConsolePrint(2, 2))->execute();
        $this->expectOutputString("2");
    }

    public function testPipelineDigit4()
    {
        $this->load(new ConsolePrint(4, 4))->execute();
        $this->expectOutputString("4");
    }

    public function testPipelineDigit8()
    {
        $this->load(new ConsolePrint(8, 8))->execute();
        $this->expectOutputString("8");
    }

    protected function load(\StarCorp\Interfaces\IOutput $output)
    {
        $output->addToPipeline(new StarCorpianos());
        $output->addToPipeline(new StarCorp());
        $output->addToPipeline(new IT());

        return $output;
    }
}