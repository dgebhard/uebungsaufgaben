<?php

class Person
{
    /**
     * @var string
     */
    private $fname;

    /**
     * @var string
     */
    private $lname;

    /**
     * @var string
     */
    private $address;

    /**
     * @var int
     */
    private $zip;

    /**
     * @var string
     */
    private $place;

    /**
     * @var string
     */
    private $birthdate;

    /**
     * @var string
     */
    private $favcolor;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var array
     */
    private $alreadyAsked;

    /**
     * @param string $fname
     * @param string $lname
     * @param string $address
     * @param int $zip
     * @param string $place
     * @param string $birthdate
     * @param string $phone
     * @param string $favcolor
     */
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

    /**
     * @return string
     */
    public function getFullName()
    {
        $this->alreadyAsked['fname'] = true;
        $this->alreadyAsked['lname'] = true;
        return $this->fname." ".$this->lname;
    }

    /**
     * @return string
     */
    public function getPlace()
    {
        $this->alreadyAsked['place'] = true;
        return $this->place;
    }

    /**
     * @return string
     */
    public function getBirthdate()
    {
        $this->alreadyAsked['birthdate'] = true;
        return $this->birthdate;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        $this->alreadyAsked['phone'] = true;
        return $this->phone;
    }

    /**
     * @param $var
     *
     * @return mixed
     */
    public function getAlreadyAsked($var)
    {
        if (array_key_exists($var, $this->alreadyAsked)) {
            return $this->alreadyAsked[$var];
        } else {
            return "key does not exist";
        }
    }

    /**
     * @return string
     */
    public function getFavColor()
    {
        $this->alreadyAsked['favcolor'] = true;
        return $this->favcolor;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
}
