<?php

class Autor
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $mail;


    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $mail
     */
    function __construct($firstName, $lastName, $mail)
    {
        if (!is_string($firstName)) {
            throw new InvalidArgumentException('Der Vorname "'.$firstName.'" ist nicht gültig');
        }

        if (!is_string($lastName)) {
            throw new InvalidArgumentException('Der Nachname "'.$lastName.'" ist nicht gültig');
        }

        if (!is_string($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Die E-Mail "'.$mail.'" ist nicht gültig');
        }

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->mail = $mail;

    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->mail;
    }
}
