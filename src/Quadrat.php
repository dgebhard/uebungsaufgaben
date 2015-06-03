<?php

    class Quadrat extends Rechteck
    {
        /**
         * @param float $seite
         */
        public function __construct($seite)
        {
            if (!is_numeric($seite) || $seite < 0) {
                throw new InvalidArgumentException('Die Seite "'.$seite.'" ist nicht gültig');
            }

            $this->seite = $seite;
        }

        /**
         * @return float
         */
        public function getUmfang()
        {
            return $this->seite*4;
        }

        /**
         * @return float
         */
        public function getDiagonale()
        {
            return sqrt(2)*$this->seite;
        }

        /**
         * @return float
         */
        public function getFlaeche()
        {
            return pow($this->seite, 2);
        }
    }
