<?php
require 'src/autoload.php';

$autor = new Autor('Dominik', 'Gebhard', 'dominik.gebhard@competec.ch');
$book = new Buch('PHP für Dummies', $autor, 2012, 50, 'IT');
echo $book->getAuthor()->getEmail();
