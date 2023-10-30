<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['playerChoice'])) {

        $playerChoice = $_POST['playerChoice'];

        $moves = ['rock', 'paper', 'scissors'];

        $player1Move = $playerChoice;
        $player2Move = $moves[rand(0, 2)];

        $player1choice = ("You played $player1Move.");
        $player2choice = (" Player 2 played $player2Move.");


        if ($player1Move == $player2Move) {
            $winner = 0;
        } elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
            $winner = 1;
        } elseif ($player1Move == 'paper' and $player2Move == 'rock') {
            $winner = 1;
        } elseif ($player1Move == 'scissors' and $player2Move == 'paper') {
            $winner = 1;
        } else {
            $winner = 2;
        }
        $_SESSION['results'] = [
            'player1choice' => $player1choice,
            'player2choice' => $player2choice,
            'winner' => $winner
        ];
}
}

header('Location: index.php');