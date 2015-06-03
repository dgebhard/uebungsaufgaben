<?php

/**
 * @covers Quadrat
 * @covers Rechteck
 */
class QuadratTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Quadrat
     */
    private $quadrat;

    protected function setUp()
    {
        $this->quadrat = new Quadrat(4.3);
    }

    public function testCalculateSquareAreaWithDouble()
    {
        $this->assertEquals(18.49, $this->quadrat->getFlaeche());
    }

    public function testCalculateSquareGirthWithDouble()
    {
        $this->assertEquals(17.2, $this->quadrat->getUmfang());
    }

    public function testCalculateSquareDiagonalWithDouble()
    {
        $this->assertEquals(sqrt(36.98), $this->quadrat->getDiagonale());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSquareConstructorWithTextStringParameterThrowsInvalidArgumentsException()
    {
        new Quadrat('5d');
    }
}
