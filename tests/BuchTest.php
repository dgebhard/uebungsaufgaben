<?php

/**
 * @covers Buch
 * @covers Autor
 */
class BuchTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Autor
     */
    private $author;

    /**
     * @var Buch
     */
    private $book;


    public function setup()
    {
        $this->author = new Autor('Dominik', 'Gebhard', 'dominik.gebhard@competec.ch');
        $this->book = new Buch('PHP for Dummies', $this->author, 2011, 412, 'IT');
    }

    public function testGetAuthorReturnsAndInstanceOfAuthorAndEmailCanBeAsked()
    {
        $this->assertEquals($this->book->getAuthor()->getEmail(), 'dominik.gebhard@competec.ch');
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

    public function testCreateBookWithEmptyGenre()
    {
        $book = new Buch('Testbuch', $this->author, 2011, 23,'');
        $this->assertInstanceOf(Buch::class, $book);
    }
}
