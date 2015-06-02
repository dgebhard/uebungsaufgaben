<?php

class Autor
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
    private $mail;


    /**
     * @param $fname string
     * @param $lname string
     * @param $mail string
     *
     * @throws InvalidArgumentException
     */
    function __construct($fname, $lname, $mail)
    {
        if (is_string($fname) && is_string($lname) && is_string($mail) && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $this->fname = $fname;
            $this->lname = $lname;
            $this->mail = $mail;
        } else {
            throw new InvalidArgumentException('Invalid Arguments');
        }
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->mail;
    }
}
