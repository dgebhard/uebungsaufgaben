<?php

    class KreisTest extends \PHPUnit_Framework_TestCase
    {
        private $kreis;

        protected function setUp()
        {
            $this->kreis = new Kreis(5.4);
        }

        public function testCalculateCircleAreaWithFloat()
        {
            $this->assertTrue($this->kreis->getUmfang());
        }
    }
