<?php

class Kreis implements Figure
{

    /**
     * @var double
     */
    private $radius;

    /**
     * @param double $radius
     *
     * @throws InvalidArgumentException
     */
    function __construct($radius)
    {
        if (!is_numeric($radius) || $radius < 0) {
            throw new InvalidArgumentException('Der Radius "'.$radius.'" ist nicht gültig');
        }

        $this->radius = (double) $radius;
    }

    /**
     * @return double
     */
    public function getUmfang()
    {
        return $this->radius*2*pi();
    }

    /**
     * @return double
     */
    public function getDiagonale()
    {
        return $this->radius*2;
    }

    /**
     * @return double
     */
    public function getFlaeche()
    {
        return pow($this->radius, 2)*pi();
    }
}
