<?php

/**
 * @covers Quadrat
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

    public function testCalculateSquareAreaWithFloat()
    {
        $this->assertEquals($this->quadrat->getFlaeche(), 18.49);
    }

    public function testCalculateSquareGirthWithFloat()
    {
        $this->assertEquals($this->quadrat->getUmfang(), 17.2);
    }

    public function testCalculateSquareDiagonalWithFloat()
    {
        $this->assertEquals($this->quadrat->getDiagonale(), sqrt(36.98));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSquareConstructorWithTextStringParameter()
    {
        $quadrat = new Quadrat('5d');
    }
}
