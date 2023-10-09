<?php

$moves = ['rock', 'paper', 'scissors'];

$player1Move = $moves[rand(0, 2)];
$player2Move = $moves[rand(0, 2)];

$player1choice = ("Player 1 played $player1Move.");
$player2choice = (" Player 2 played $player2Move.");


if ($player1Move == $player2Move) {
    $results =(' Results = Tie!');
} elseif ($player1Move == 'rock' and $player2Move == 'paper') {
    $results = (' Results = Player 2 wins!');
} elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
    $results = (' Results = Player 1 wins!');
} elseif ($player1Move == 'paper' and $player2Move == 'rock') {
    $results = (' Results = Player 1 wins!');
} elseif ($player1Move == 'paper' and $player2Move == 'scissors') {
        $results = (' Results = Player 2 wins!');
} elseif ($player1Move == 'scissors' and $player2Move == 'paper') {
        $results = (' Results = Player 1 wins!');
} elseif ($player1Move == 'scissors' and $player2Move == 'rock') {
        $results = (' Results = Player 2 wins!');
    }

require 'index-view.php';