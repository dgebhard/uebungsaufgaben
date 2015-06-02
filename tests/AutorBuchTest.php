<?php

/**
 * @covers Autor
 * @covers Buch
 */
class AutorBuchTest extends PHPUnit_Framework_TestCase
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
        $this->book = new Buch('PHP für Dummies', $this->author, 2012, 190, 'IT');
    }

    public function testDummy()
    {
        $this->assertInstanceOf(Autor::class, $this->author);
        $this->assertInstanceOf(Buch::class, $this->book);
    }

    public function testGetEmail(){
        $this->assertEquals($this->book->getAuthor()->getEmail(), 'dominik.gebhard@competec.ch');
    }

    public function testInvalidValues()
    {
        $this->setExpectedException('InvalidArgumentException');
        $author = new Autor('Dominik', 'Gebhard', 'dominik.gebhardompetec.ch');

        $this->setExpectedException('InvalidArgumentException');
        $author = new Autor('Dominik', 'Gebhard', 'dominik.gebhard@competec');

        $this->setExpectedException('InvalidArgumentException');
        $book = new Buch('PHP für Dummies', $this->author, 2012, -190, 'IT');

        $this->setExpectedException('InvalidArgumentException');
        $book = new Buch('PHP für Dummies', 'fzg', 2012, -190, 'IT');
    }

}
