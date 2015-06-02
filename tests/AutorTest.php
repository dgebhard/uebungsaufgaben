<?php

/**
 * @covers Autor
 */
class AutorTest extends PHPUnit_Framework_TestCase
{

    public function setup()
    {
        //empty
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

}
