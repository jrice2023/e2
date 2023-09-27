<?php

$moves = ['rock', 'paper', 'scissors'];

// echo $moves[0]; 
// echo $moves[1];
// echo $moves[2];

$randomNumber = rand(0, 2);

$move = $moves[$randomNumber];

var_dump($move);