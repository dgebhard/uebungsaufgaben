<?php

class Quadrat extends Rechteck
{
    /**
     * @param double $seite
     */
    public function __construct($seite)
    {
        if (!is_numeric($seite) || $seite < 0) {
            throw new InvalidArgumentException('Die Seite "'.$seite.'" ist nicht gültig');
        }

        $this->seite = (double) $seite;
    }

    /**
     * @return double
     */
    public function getUmfang()
    {
        return $this->seite*4;
    }

    /**
     * @return double
     */
    public function getDiagonale()
    {
        return sqrt(2)*$this->seite;
    }

    /**
     * @return double
     */
    public function getFlaeche()
    {
        return pow($this->seite, 2);
    }
}
