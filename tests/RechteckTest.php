<?php

/**
 * @covers Rechteck
 */
class RechteckTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Rechteck
     */
    private $rechteck;

    protected function setUp()
    {
        $this->rechteck = new Rechteck(4.3, 4.7);
    }

    public function testCalculateRectangleAreaWithDouble()
    {
        $this->assertEquals(20.21, $this->rechteck->getFlaeche());
    }

    public function testCalculateRectangleGirthWithDouble()
    {
        $this->assertEquals(18, $this->rechteck->getUmfang());
    }

    public function testCalculateRectangleDiagonalWithDouble()
    {
        $this->assertEquals(sqrt(40.58), $this->rechteck->getDiagonale());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testConstructorWithInvalidSideAThrowsInvalidArgumentsException()
    {
        new Rechteck('5d', 27);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testConstructorWithInvalidSideBThrowsInvalidArgumentsException()
    {
        new Rechteck(213, 'hallo');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCircleConstructorWithNegativeParametersThrowsInvalidArgumentsException()
    {
        new Rechteck(-35, -5);
    }
}
