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

    public function testCalculateRectangleAreaWithFloat()
    {
        $this->assertEquals($this->rechteck->getFlaeche(), 20.21);
    }

    public function testCalculateRectangleGirthWithFloat()
    {
        $this->assertEquals($this->rechteck->getUmfang(), 18);
    }

    public function testCalculateRectangleDiagonalWithFloat()
    {
        $this->assertEquals($this->rechteck->getDiagonale(), sqrt(40.58));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testConstructorWithInvalidSideA()
    {
        $rechteck = new Rechteck('5d', 27);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testConstructorWithInvalidSideB()
    {
        $rechteck = new Rechteck(213, 'hallo');
    }
}
