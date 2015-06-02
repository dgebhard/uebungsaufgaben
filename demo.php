<?php
require 'src/autoload.php';

$person = new Person('Dominik','Gebhard','Altstr. 3','5103','Möriken','02.02.1997','252523552434','blau');

var_dump($person);

var_dump($person->getPhoneNumber());
var_dump($person->getAlreadyAsked('fname'));
var_dump($person->getAlreadyAsked('phone'));
