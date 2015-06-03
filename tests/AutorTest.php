<?php

/**
 * @covers Autor
 */
class AutorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Autor
     */
    private $author;

    public function setup()
    {
        $this->author = new Autor('Dominik', 'Gebhard', 'dominik.gebhard@competec.ch');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCreateAutorWithEmailWithoutHostnameThrowsInvalidArgumentsException()
    {
        $author = new Autor('Dominik', 'Gebhard', 'dominik.gebhard@competec');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCreateAutorWithEmailWithoutAtSymbolThrowsInvalidArgumentsException()
    {
        $author = new Autor('Dominik', 'Gebhard', 'dominik.gebhardcompetec.ch');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCreateAutorWithEmptyEmailThrowsInvalidArgumentsException()
    {
        $author = new Autor('Dominik', 'Gebhard', '');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCreateAutorWithFirstNameTypeIntThrowsInvalidArgumentsException()
    {
        $author = new Autor(44, 'Gebhard', 'mail@mail.com');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCreateAutorWithLastNameTypeIntThrowsInvalidArgumentsException()
    {
        $author = new Autor('Dominik', 44, 'mail@mail.com');
    }

    public function testGetEmailFromAutorWithValidAttributes()
    {
        $this->assertEquals('dominik.gebhard@competec.ch', $this->author->getEmail());
    }

}
