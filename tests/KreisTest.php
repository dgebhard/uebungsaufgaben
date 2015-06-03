<?php

/**
 * @covers Kreis
 */
class KreisTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Kreis
     */
    private $kreis;

    protected function setUp()
    {
        $this->kreis = new Kreis(5.4);
    }

    public function testCalculateCircleAreaWithFloat()
    {
        $this->assertEquals($this->kreis->getFlaeche(), '');
    }

    public function testCalculateCircleGirthWithFloat(){
        $this->assertEquals($this->kreis->getUmfang(), '');
    }
}
