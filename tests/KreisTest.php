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

    public function testCalculateCircleAreaWithDouble()
    {
        $this->assertEquals($this->kreis->getFlaeche(), 91.60884177867837083357068105643);
    }

    public function testCalculateCircleGirthWithDouble()
    {
        $this->assertEquals($this->kreis->getUmfang(), 33.929200658769766975396548539419);
    }

    public function testCalculateCircleDiagonalWithDouble()
    {
        $this->assertEquals($this->kreis->getDiagonale(), 10.8);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCircleConstructorWithTextStringParameter()
    {
        $kreis = new Kreis('erf');
    }
}
