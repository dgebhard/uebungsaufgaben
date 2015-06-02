<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 6/2/15
 * Time: 9:21 AM
 */

class Person {
    private $fname;
    private $lname;
    private $address;
    private $zip;
    private $place;
    private $birthdate;
    private $favcolor;
    private $phone;

    private $alreadyAsked;

    function Person($fname, $lname, $address, $zip, $place, $birthdate, $phone, $favcolor)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->address = $address;
        $this->zip = $zip;
        $this->place = $place;
        $this->birthdate = $birthdate;
        $this->phone = $phone;
        $this->favcolor = $favcolor;

        $keys = array('fname','lname','address','zip','place','birthdate','phone','favcolor');
        $this->alreadyAsked = array_fill_keys($keys, false);
    }

    public function getFullName()
    {
        $this->alreadyAsked['fname'] = true;
        $this->alreadyAsked['lname'] = true;
        return $this->fname." ".$this->lname;
    }

    public function getPlace()
    {
        $this->alreadyAsked['place'] = true;
        return $this->place;
    }

    public function getBirthdate()
    {
        $this->alreadyAsked['birthdate'] = true;
        return $this->birthdate;
    }

    public function getPhoneNumber()
    {
        $this->alreadyAsked['phone'] = true;
        return $this->phone;
    }

    public function getAlreadyAsked($var)
    {
        return $this->alreadyAsked[$var];
    }

    public function getFavColor()
    {
        $this->alreadyAsked['favcolor'] = true;
        return $this->favcolor;
    }

    public function getAddress()
    {
        return $this->address;
    }
}