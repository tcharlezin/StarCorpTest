<?php
use PHPUnit\Framework\TestCase;
use StarCorp\Multiples\StarCorpianos;

class StarCorpianosTest extends TestCase
{
    public function testMatch()
    {
        $it = new StarCorpianos();
        $this->assertTrue($it->match(15));
        $this->assertTrue($it->match(30));
        $this->assertTrue($it->match(45));
        $this->assertTrue($it->match(60));
    }

    public function testNotMatch()
    {
        $it = new StarCorpianos();
        $this->assertFalse($it->match(2));
        $this->assertFalse($it->match(3));
        $this->assertFalse($it->match(5));
        $this->assertFalse($it->match(10));
    }
}