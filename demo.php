<?php
require 'src/autoload.php';

$kreis = new Kreis(5);

echo "Kreisfläche von Radius 5: ".$kreis->getFlaeche()."\n\r";

$rechteck = new Rechteck(5, 6);

echo "Rechtecksfläche von 5x6: ".$rechteck->getFlaeche()."\n\r";

$quadrat = new Quadrat(33);

echo "Quadratfläche mit Seite 33: ".$quadrat->getFlaeche()."\n\r";

