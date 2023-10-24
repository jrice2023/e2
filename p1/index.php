<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['playerChoice'])) {

$playerChoice = $_POST['playerChoice'];

$moves = ['rock', 'paper', 'scissors'];

$player1Move = $playerChoice;
$player2Move = $moves[rand(0, 2)];

$player1choice = ("You played $player1Move.");
$player2choice = (" Player 2 played $player2Move.");


if ($player1Move == $player2Move) {
    $results = ' Results = Tie!';
} elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
    $results = ' Results = You win!';
} elseif ($player1Move == 'paper' and $player2Move == 'rock') {
    $results = ' Results = You win!';
} elseif ($player1Move == 'scissors' and $player2Move == 'paper') {
    $results = ' Results = You win!';
} else {
    $results = ' Results = Player 2 wins!';
}
}
}

require 'index-view.php';