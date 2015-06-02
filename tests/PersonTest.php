<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 6/2/15
 * Time: 9:26 AM
 */

class PersonTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Person
     */
    private $person;

    public function setup()
    {
        $this->person = new Person();
    }

    public function testDummy()
    {
        $this->assertInstanceOf(Person::class, $this->person);
    }
}
