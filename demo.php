<?php
require 'src/autoload.php';

$kreis = new Kreis(5);

echo $kreis->getFlaeche();
