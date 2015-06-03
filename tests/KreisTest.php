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
        $this->assertEquals(91.60884177867837083357068105643, $this->kreis->getFlaeche());
    }

    public function testCalculateCircleGirthWithDouble()
    {
        $this->assertEquals(33.929200658769766975396548539419, $this->kreis->getUmfang());
    }

    public function testCalculateCircleDiagonalWithDouble()
    {
        $this->assertEquals(10.8, $this->kreis->getDiagonale());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCircleConstructorWithTextStringParameterThrowsInvalidArgumentsException()
    {
        $kreis = new Kreis('erf');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCircleConstructorWithNegativeParameterThrowsInvalidArgumentsException()
    {
        $kreis = new Kreis(-35);
    }
}
