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
        $this->person = new Person('Dominik','Gebhard','Altstr. 3','5103','Möriken','02.02.1997','252523552434','blau');
    }

    public function testDummy()
    {
        $this->assertInstanceOf(Person::class, $this->person);
    }

    public function testGetFullName(){
        $this->assertEquals($this->person->getFullName(),'Dominik Gebhard');
    }

    public function testGetPlace(){
        $this->assertNotEquals($this->person->getPlace(),"Wildegg");
    }

    public function testGetAddress(){
        $this->assertEquals($this->person->getAddress(),'Altstr. 3');
    }

    public function testGetBirthdate(){
        $this->assertEquals($this->person->getBirthdate(),'02.02.1997');
    }

    public function testGetPhoneNumber(){
        $this->assertEquals($this->person->getPhoneNumber(),'252523552434');
    }

    public function testAlreadyAsked(){
        $this->person->getFavColor();
        $this->assertTrue($this->person->getAlreadyAsked('favcolor'));
        $this->assertFalse($this->person->getAlreadyAsked('phone'));
    }
}
