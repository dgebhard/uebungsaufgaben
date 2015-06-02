<?php

    class Kreis implements Figure
    {

        /**
         * @var float
         */
        private $radius;

        /**
         * @param float $radius
         *
         * @throws InvalidArgumentException
         */
        public function __construct($radius)
        {
            if (!is_numeric($radius) || $radius < 0) {
                throw new InvalidArgumentException('Der Radius "'.$radius.'" ist nicht gültig');
            }
            $this->radius = $radius;
        }

        /**
         * @return float
         */
        public function getUmfang()
        {
            return $this->radius*2*pi();
        }

        /**
         * @return float
         */
        public function getDiagonale()
        {
            return $this->radius*2;
        }

        /**
         * @return float
         */
        public function getFlaeche()
        {
            return pow($this->radius, 2)*pi();
        }
    }
