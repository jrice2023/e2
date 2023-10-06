<?php

$moves = ['rock', 'paper', 'scissors'];

// echo $moves[0]; 
// echo $moves[1];
// echo $moves[2];

// $move = $moves[$randomNumber];

$player1Move = $moves[rand(0, 2)];
$player2Move = $moves[rand(0, 2)];

$player1choice = ("Player one played $player1Move.");
$player2choice = (" Player two played $player2Move.");


if ($player1Move == $player2Move) {
    $results =(' Results = Tie!');
} elseif ($player1Move == 'rock' and $player2Move == 'paper') {
    $results = (' Results = Player 2 Wins!');
} elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
    $results = (' Results = Player 1 Wins!');
} elseif ($player1Move == 'paper' and $player2Move == 'rock') {
    $results = (' Results = Player 1 Wins!');
} elseif ($player1Move == 'paper' and $player2Move == 'scissors') {
        $results = (' Results = Player 2 Wins!');
    } elseif ($player1Move == 'scissors' and $player2Move == 'paper') {
        $results = (' Results = Player 1 Wins!');
    } elseif ($player1Move == 'scissors' and $player2Move == 'rock') {
        $results = (' Results = Player 2 Wins!');
    }

    include 'index-view.php';