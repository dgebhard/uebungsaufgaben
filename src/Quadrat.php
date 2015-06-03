<?php

class Quadrat extends Rechteck
{
    /**
     * @var float|null
     */
    private $sqrtTwo;

    /**
     * @param double $seite
     */
    public function __construct($seite)
    {
        parent::__construct($seite, $seite);
    }

    /**
     * @return double
     */
    public function getDiagonale()
    {
        return $this->getSqrtTwo() * $this->seiteA;
    }

    /**
     * @return float
     */
    private function getSqrtTwo()
    {
        if ($this->sqrtTwo == null) {
            $this->sqrtTwo = sqrt(2);
        }
        return $this->sqrtTwo;
    }
}
