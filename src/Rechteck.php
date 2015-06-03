<?php

class Rechteck implements Figure
{

    /**
     * @var double
     */
    protected $seiteA;

    /**
     * @var double
     */
    protected $seiteB;

    /**
     * @param double $seiteA
     * @param double $seiteB
     */
    public function __construct($seiteA, $seiteB)
    {
        if (!is_numeric($seiteA) || $seiteA < 0) {
            throw new InvalidArgumentException('Die Seite "'.$seiteA.'" ist nicht gültig');
        }
        if (!is_numeric($seiteB) || $seiteB < 0) {
            throw new InvalidArgumentException('Die Seite "'.$seiteB.'" ist nicht gültig');
        }
        $this->seiteA = (double) $seiteA;
        $this->seiteB = (double) $seiteB;
    }

    /**
     * @return double
     */
    public function getUmfang()
    {
        return $this->seiteB*2+$this->seiteA*2;
    }

    /**
     * @return double
     */
    public function getDiagonale()
    {
        return sqrt(pow($this->seiteA, 2) + pow($this->seiteB, 2));
    }

    /**
     * @return double
     */
    public function getFlaeche()
    {
        return $this->seiteA*$this->seiteB;
    }
}
