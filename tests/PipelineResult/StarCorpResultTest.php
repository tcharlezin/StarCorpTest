<?php
use PHPUnit\Framework\TestCase;
use StarCorp\Multiples\IT;
use StarCorp\Multiples\StarCorp;
use StarCorp\Multiples\StarCorpianos;
use StarCorp\Outputs\ConsolePrint;

class StarCorpResultTest extends TestCase
{
    public function testPipelineDigit3()
    {
        $this->load(new ConsolePrint(3, 3))->execute();
        $this->expectOutputString("StarCorp\n");
    }

    public function testPipelineDigit6()
    {
        $this->load(new ConsolePrint(6, 6))->execute();
        $this->expectOutputString("StarCorp\n");
    }

    public function testPipelineDigit9()
    {
        $this->load(new ConsolePrint(9, 9))->execute();
        $this->expectOutputString("StarCorp\n");
    }

    protected function load(\StarCorp\Interfaces\IOutput $output)
    {
        $output->addToPipeline(new StarCorpianos());
        $output->addToPipeline(new StarCorp());
        $output->addToPipeline(new IT());

        return $output;
    }
}