<?php

/**
 * @covers Buch
 */
class BuchTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PHPUnit_Framework_MockObject_MockObject
     */
    private $author;

    /**
     * @var Buch
     */
    private $book;


    public function setup()
    {
        $this->author = $this->getMockBuilder(Autor::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->book = new Buch('PHP for Dummies', $this->author, 2011, 412, 'IT');
    }

    public function testGetAuthorReturnsAndInstanceOfAuthor()
    {
        $this->assertSame($this->author, $this->book->getAuthor());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCreateBookWithEmptyTitle()
    {
        $book = new Buch('', $this->author, 2011, 412, 'IT');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCreateBookWithZeroPages()
    {
        $book = new Buch('Testbuch', $this->author, 2011, 0, 'IT');
    }

    public function testCreateBookWithEmptyGenreCanBeInstantiacted()
    {
        $book = new Buch('Testbuch', $this->author, 2011, 23, '');
        $this->assertInstanceOf(Buch::class, $book);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCreateBookWithInvalidYear()
    {
        $book = new Buch('Testbuch', $this->author, -1, 343, 'IT');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCreateBookWithIntValueInsteadOfString()
    {
        $book = new Buch('Testbuch', $this->author, 2010, 343, 1234);
    }
}
