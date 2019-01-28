<?php
use PHPUnit\Framework\TestCase;
use StarCorp\Multiples\StarCorp;

class StarCorpTest extends TestCase
{
    public function testMatch()
    {
        $it = new StarCorp();
        $this->assertTrue($it->match(3));
        $this->assertTrue($it->match(6));
        $this->assertTrue($it->match(9));
        $this->assertTrue($it->match(15));
    }

    public function testNotMatch()
    {
        $it = new StarCorp();
        $this->assertFalse($it->match(5));
        $this->assertFalse($it->match(2));
        $this->assertFalse($it->match(10));
        $this->assertFalse($it->match(14));
    }
}