<?php

require 'Number.php';
require 'EvenNumber.php';

$example = new Number(9);
$example2 = new EvenNumber (9);

var_dump($example->isValid()); 
var_dump($example2->isValid());