<?php

$moves = ['rock', 'paper', 'scissors'];

// echo $moves[0]; 
// echo $moves[1];
// echo $moves[2];

// $move = $moves[$randomNumber];

$player1Move = $moves[rand(0, 2)];
$player2Move = $moves[rand(0, 2)];

var_dump($player1Move);
var_dump($player2Move);

if ($player1Move == $player2Move) {
    var_dump('Tie');
} elseif ($player1Move == 'rock' and $player2Move == 'paper') {
    var_dump('Player 2 Wins');
} elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
    var_dump('Player 1 Wins');
} elseif ($player1Move == 'paper' and $player2Move == 'rock') {
    var_dump('Player 1 Wins');
} elseif ($player1Move == 'paper' and $player2Move == 'scissors') {
        var_dump('Player 2 Wins');
    } elseif ($player1Move == 'scissors' and $player2Move == 'paper') {
        var_dump('Player 1 Wins');
    } elseif ($player1Move == 'scissors' and $player2Move == 'rock') {
        var_dump('Player 2 Wins');
    }