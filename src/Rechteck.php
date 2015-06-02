<?php

class Rechteck implements Figure
{

    /**
     * @var float
     */
    private $seiteA;

    /**
     * @var float
     */
    private $seiteB;

    /**
     * @param float $seiteA
     * @param float $seiteB
     */
    public function __construct($seiteA, $seiteB)
    {
        if (!is_numeric($seiteA) || $seiteA < 0) {
            throw new InvalidArgumentException('Die Seite "'.$seiteA.'" ist nicht gültig');
        }
        if (!is_numeric($seiteB) || $seiteB < 0) {
            throw new InvalidArgumentException('Die Seite "'.$seiteB.'" ist nicht gültig');
        }
        $this->seiteA = $seiteA;
        $this->seiteB = $seiteB;
    }

    /**
     * @return float
     */
    public function getUmfang()
    {
        return $this->seiteB*2+$this->seiteA*2;
    }

    /**
     * @return float
     */
    public function getDiagonale()
    {
        return sqrt($this->seiteA+$this->seiteB);
    }

    /**
     * @return float
     */
    public function getFlaeche()
    {
        return $this->seiteA*$this->seiteB;
    }
}
